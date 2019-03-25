<template>
    <v-content class="pt-0">
        <v-parallax id="parallax" src="/img/main.jpg">
            <v-layout
                column
                align-center
                justify-center
                class="white--text"
            >
                <h1 class="display-1 text-xs-center">
                    {{ trans('text.header_main') }}
                </h1>
            </v-layout>
        </v-parallax>
        <div>

        </div>
    </v-content>
</template>


<script>    
    export default {
        mounted () { },
        data: () => ({
            
        })        
    }
</script>

<style scoped>
/*    В файл app.js добавлен код:
    document.getElementById('parallax').style.height = '100vh';*/
</style>