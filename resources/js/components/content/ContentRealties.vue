<template>
    <v-content>          
        <v-container>
            <v-layout row align-center>
                <v-flex>                              
                    <h1 class="display-1 text-xs-center">{{ header }}</h1>                     
                </v-flex>
            </v-layout>
            <hr class="grey lighten-5 mt-4 hidden-sm-and-down">
        </v-container>      
   
        <realty-card-mini-desk 
            v-for="realty in JSON.parse(realties)" 
            :key="realty.name"
            :realties="JSON.parse(realties)"
        ></realty-card-mini-desk>
        
        <realty-card-mini-mob></realty-card-mini-mob>       
      </v-content>
</template>

<script>    
    import RealtyCardMiniDesk from '../RealtyCardMiniDesk.vue'
    import RealtyCardMiniMob from '../RealtyCardMiniMob.vue'
    
    export default {  
        mounted() {           
            this.getHeader();
        },  
        
        props: ['realties'],
        
        components: {
            RealtyCardMiniDesk,
            RealtyCardMiniMob
        },
        
        data: () => ({ 
            header: ''
        }),
        
        methods: {
            getHeader() {
                switch(window.location.pathname) {
                    case '/villas':
                        this.header = trans('text.menu.villas');
                        break;
                    case '/apartments':
                        this.header = trans('text.menu.apartments')
                        break;   
                }
            }
        }
    }
</script>

<style scoped>    
    
</style>