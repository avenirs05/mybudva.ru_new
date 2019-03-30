<template>
    <v-content>          
        <v-container>
            <v-layout row align-center>
                <v-flex>                              
                    <h1 class="display-1 text-xs-center">Villas</h1>                     
                </v-flex>
            </v-layout>
            <hr class="grey lighten-5 mt-4 hidden-sm-and-down">
        </v-container>      
   
        <realty-card-mini-desk></realty-card-mini-desk>
        
        <realty-card-mini-mob></realty-card-mini-mob>
        
      
     </v-content>
</template>

<script>    
    import RealtyCardMiniDesk from '../RealtyCardMiniDesk.vue'
    import RealtyCardMiniMob from '../RealtyCardMiniMob.vue'
    
    export default {            
        components: {
            RealtyCardMiniDesk,
            RealtyCardMiniMob
        },
        data: () => ({ })        
    }
</script>

<style scoped>    
    
</style>