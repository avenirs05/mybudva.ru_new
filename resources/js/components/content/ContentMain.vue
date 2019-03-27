<template>
    <v-content>        
        <v-img
            class="white--text"                
            src="/img/main.jpg"
            id="main-img"
        >
            <v-container fill-height fluid grid-list-xl> 
                <v-layout row align-center>
                    <v-flex>                                
                        <h1 class="display-1 text-xs-center pb-5">{{ trans('text.header_main') }}</h1>                                
                    </v-flex>
                </v-layout>
            </v-container>
        </v-img>            
        <div>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
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
.v-parallax__image {
    transform: none !important;
    width: 100% !important;
}
</style>