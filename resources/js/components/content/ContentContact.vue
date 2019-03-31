<template>
    <v-content>          
        <v-container>
            <v-layout row wrap>  
                <v-flex>
                    <h1 class="display-1 mt-1 text-xs-center">Контакты</h1>  
                </v-flex>
            </v-layout>
            <hr class="grey lighten-5 mt-4 hidden-sm-and-down">
            <v-layout> 
                <v-flex class="contacts-wrapper mt-4">
                    <p><b>Адрес:</b> Budva 85310</p>
                    <p><b>Тел.:</b> +382 68 089 888</p>
                    <p><b>Viber:</b> +382 68 089 888</p>
                    <p><b>WhatsApp:</b> +382 68 089 888</p>
                    <p><b>E-mail:</b> arenda@mybudva.ru</p> 
                </v-flex>
            </v-layout>
        </v-container>
    </v-content>
</template>

<script>    
    export default {
        mounted () { },
        data: () => ({ })        
    }
</script>

<style scoped>
    .contacts-wrapper {
        font-size: 18px;
    }
</style>