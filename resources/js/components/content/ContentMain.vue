<template>
    <v-content>        
        <v-img
            class="white--text"                
            src="/img/main.jpg"
            id="main-img"
            >
            <v-container fill-height fluid grid-list-xl> 
                <v-layout row align-center class="hidden-sm-and-down">
                    <v-flex>                              
                        <h1 class="display-1 text-xs-center pb-5">{{ trans('text.header_main') }}</h1>                                
                    </v-flex>
                </v-layout>
                <v-layout row align-center class="hidden-md-and-up">
                    <v-flex>                                
                        <v-list-tile class="contacts-mob grow">
                            <v-list-tile-avatar size="25" color="grey darken-3">
                                <v-img
                                    class="elevation-6"
                                    src="/img/whatsapp.svg"
                                    ></v-img>
                            </v-list-tile-avatar>
                            <v-list-tile-avatar size="25" color="grey darken-3">
                                <v-img
                                    class="elevation-6"
                                    src="/img/viber.png"
                                    ></v-img>
                            </v-list-tile-avatar>
                            <v-list-tile-content>
                                <v-list-tile-title class="tel-text">+382 68 089 888</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>                               
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

        }),
        computed: {
            hidden () {
                switch (this.$vuetify.breakpoint.name) {
                    case 'md': return false
                    case 'lg': return false
                    case 'xl': return false
                }
            }
        } 
    }
</script>

<style scoped>
/*    В файл app.js добавлен код:
    document.getElementById('main-img').style.height = '100vh';*/

    .contacts-mob {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }

    .contacts-mob .v-list__tile__title.tel-text {
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 24px;
    }

    .contacts-mob .v-list__tile__avatar {
        min-width: 25px;
    }

    .contacts-mob .v-list__tile__avatar .v-avatar {
        margin-right: 8px;
    }
</style>