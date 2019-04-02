<template>     
    <v-container grid-list-xl column> 
        <v-layout column>
            <v-flex 
                v-for="question in questions" 
                :key="question[`question_${locale}`]"
                ><h3 class="blue--text mb-2">
                    {{ question[`question_${locale}`] }}
                </h3>
                <p>{{ question[`answer_${locale}`] }}</p>
            </v-flex>
        </v-layout>    
    </v-container>
</template>


<script>
    export default {
        mounted() { },    
        props: ['locale', 'questions'],    
        data: () => ({  })
    }
</script>


<style scoped>
        
</style>
