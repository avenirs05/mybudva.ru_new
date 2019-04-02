<template>     
    <v-container grid-list-xl>
        <h2 class="text-xs-center mt-4 font-weight-bold">Отдых в Черногории в 2019 году. Часто задаваемые вопросы.</h2>
        <h3 class="text-xs-center mt-5 mb-3 blue--text">КУРОРТЫ И ГОРОДА В ЧЕРНОГОРИИ: КУДА ЛУЧШЕ ПОЕХАТЬ?</h3>
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
        props: ['locale', 'areas'],    
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
