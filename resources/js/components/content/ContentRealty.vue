<template>
    <v-content>          
        <v-container>
            <v-layout row align-center>
                <v-flex>                              
                    <h1 class="display-1 text-xs-center text-md-left mt-1 mb-2">
                        {{ JSON.parse(realty).name }}
                    </h1>                     
                </v-flex>               
            </v-layout> 
            <realty-card-max-desk 
                :realty="JSON.parse(realty)"
                :locale="locale"
            ></realty-card-max-desk>
        </v-container>  
        
        <realty-card-max-mob 
            :realty="JSON.parse(realty)"
            :locale="locale"
        ></realty-card-max-mob>       
        
        <v-container>    
            <v-layout row>
                <v-flex>                              
                    <div class="description mb-4">
                        {{ JSON.parse(realty)[`description_${locale}`] }}
                    </div>
                </v-flex>               
            </v-layout> 
            <v-layout row>
                <v-flex>  
                    <h2>Отзывы</h2>
                    <hr class="mb-3">
                    <div class="feedback mb-3">
                        <h5 class="mb-2">Name</h5>
                        <p>Отзыв1. Апартаменты находятся в районе Биела (Черногория), в 400 метрах от моря и пляжа. В пешей доступности магазины первой необходимости, палатки со свежими фруктами, пекарни со свежей выпечкой.</p>
                        <p>Отзыв1. Апартаменты находятся в районе Биела (Черногория), в 400 метрах от моря и пляжа. В пешей доступности магазины первой необходимости, палатки со свежими фруктами, пекарни со свежей выпечкой.</p>
                        <p>Отзыв1. Апартаменты находятся в районе Биела (Черногория), в 400 метрах от моря и пляжа. В пешей доступности магазины первой необходимости, палатки со свежими фруктами, пекарни со свежей выпечкой.</p>
                        <p>Отзыв1. Апартаменты находятся в районе Биела (Черногория), в 400 метрах от моря и пляжа. В пешей доступности магазины первой необходимости, палатки со свежими фруктами, пекарни со свежей выпечкой.</p>
                    </div>
                    <div class="feedback mb-3">
                        <h5 class="mb-2">Name</h5>
                        <p>Отзыв2. Апартаменты находятся в районе Биела (Черногория), в 400 метрах от моря и пляжа. В пешей доступности магазины первой необходимости, палатки со свежими фруктами, пекарни со свежей выпечкой.</p>
                        <p>Отзыв2. Апартаменты находятся в районе Биела (Черногория), в 400 метрах от моря и пляжа. В пешей доступности магазины первой необходимости, палатки со свежими фруктами, пекарни со свежей выпечкой.</p>
                        <p>Отзыв2. Апартаменты находятся в районе Биела (Черногория), в 400 метрах от моря и пляжа. В пешей доступности магазины первой необходимости, палатки со свежими фруктами, пекарни со свежей выпечкой.</p>
                        <p>Отзыв2. Апартаменты находятся в районе Биела (Черногория), в 400 метрах от моря и пляжа. В пешей доступности магазины первой необходимости, палатки со свежими фруктами, пекарни со свежей выпечкой.</p>
                    </div>
                </v-flex>               
            </v-layout>         
        </v-container> 
        
        <v-layout v-html="JSON.parse(realty).map_html"></v-layout>
        
    </v-content>
</template>


<script>
    import RealtyCardMaxDesk from '../RealtyCardMaxDesk.vue'
    import RealtyCardMaxMob from '../RealtyCardMaxMob.vue'
    
    export default {
//        mounted() { console.log(this.realty.name) },   
        props: [
            'realty', 
            'locale'
        ],
        components: { 
            RealtyCardMaxDesk,
            RealtyCardMaxMob
        },
        data () {
            return { }
        }
    }
</script>


<style scoped>    

</style>