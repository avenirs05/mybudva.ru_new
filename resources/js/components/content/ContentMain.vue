<template>
    <v-content>    
        <main-screen></main-screen>
        <areas></areas>        
        <questions></questions>
        <foods></foods>     
    </v-content>
</template>


<script>  
    import Areas from '../Areas.vue'; 
    import Questions from '../Questions.vue'; 
    import Foods from '../Foods.vue'; 
    import MainScreen from '../MainScreen.vue';
    
    export default { 
        components: {
            Areas,
            Questions,
            Foods,
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