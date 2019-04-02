<template>
    <v-content>    
        <main-screen></main-screen>
        
        <areas 
            :areas="JSON.parse(areas)" 
            :locale="locale"
        ></areas>        
        
        <questions 
            :questions="JSON.parse(questions)" 
            :locale="locale"
        ></questions>
        
        <products
            :products="products"
            :locale="locale"
        ></products> 
        
    </v-content>
</template>


<script>  
    import Areas from '../Areas.vue'; 
    import Questions from '../Questions.vue'; 
    import Products from '../Products.vue'; 
    import MainScreen from '../MainScreen.vue';
    
    export default { 
        mounted() { console.log(this.products) },    
        props: [
            'locale', 
            'areas', 
            'questions',
            'products'
        ],     
        components: {
            Areas,
            Questions,
            Products,
            MainScreen
        },
        data: () => ({ })
    }
</script>


<style scoped>
/* В файл app.js добавлена функция vh() */
    .v-content {
        font-size: 18px;
    }
</style>