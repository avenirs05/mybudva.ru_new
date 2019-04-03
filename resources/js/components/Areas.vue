<template>     
    <v-container grid-list-xl>        
        <h3 class="text-xs-center mt-2 mb-4 blue--text">{{ headerAreas }}</h3>
        <v-layout v-bind="columnOrRow">
            <v-flex v-for="area in areas" :key="area[`name_${locale}`]">    
                <h4 class="mb-2">{{ area[`name_${locale}`] }}</h4>
                <div v-html="area[`text_${locale}`]"></div>                       
            </v-flex>                 
        </v-layout>
    </v-container>
</template>


<script>
    export default {
        props: ['locale', 'areas', 'headerAreas'],    
        mounted() {
        },    
        data: () => ({ }),
        computed: {
            columnOrRow () {
                const binding = {}
                
                if (this.$vuetify.breakpoint.smAndDown) {
                    binding.column = true; 
                }

                return binding;
            }
        }
    }
</script>


<style scoped>

</style>
