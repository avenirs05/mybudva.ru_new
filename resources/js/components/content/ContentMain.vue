<template>
    <v-content>    
        <main-screen
            :header-main-screen="headerMainScreen"  
            :phone-main="phoneMain"
        ></main-screen>
        
        <v-container>
            <h2 class="text-xs-center mt-2 font-weight-bold">{{ headerMainContent }}</h2>
        </v-container>
        
        <areas 
            :areas="JSON.parse(areas)" 
            :header-areas="headerAreas"
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
//        mounted() { console.log(this.phoneMain)},   
        props: [
            'locale', 
            'areas', 
            'questions',
            'products',
            'headerMainScreen',
            'headerMainContent',
            'headerAreas',
            'phoneMain'
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