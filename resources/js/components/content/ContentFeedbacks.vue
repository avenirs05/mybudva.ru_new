<template>
    <v-content>          
        <v-container>
            <v-layout row wrap>  
                <v-flex>
                    <h1 class="display-1 mt-1 mb-3 text-xs-center">{{ trans('text.menu.feedbacks') }}</h1>  
                </v-flex>
            </v-layout>
            <hr class="grey lighten-5 mb-4 hidden-sm-and-down">
            <v-layout row>
                <v-flex>  
                    <div v-for="feedback in JSON.parse(feedbacks)" 
                         :key="feedback.id" 
                         class="feedback mb-5">
                        <h5 class="mb-2">
                            {{ feedback.header }},
                            <a class="realty-link" 
                               :href="`/realty/${feedback.realty.id}`"
                               >{{ feedback.realty.name }} {{ feedback.realty.type }}
                            </a>                            
                        </h5>  
                        <p>{{ feedback.text }}</p>
                    </div>
                </v-flex>               
            </v-layout> 
        </v-container>
    </v-content>
</template>

<script>    
    export default {
        mounted () { },
        props: ['feedbacks'],
        data: () => ({  }),
    }
</script>

<style scoped>
    a.realty-link:hover {
        color: blue;
    }
</style>