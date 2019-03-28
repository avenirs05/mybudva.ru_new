<template>
    <v-toolbar app fixed clipped-left id="toolbar">
        <v-toolbar-side-icon class="hidden-md-and-up" @click.stop="changeDrawer"></v-toolbar-side-icon>
        <v-toolbar-side-icon class="logo">
            <img src="/img/logo.png" :height="logoHeight">
        </v-toolbar-side-icon> 
        
        <v-list-tile class="contacts-desk hidden-sm-and-down grow">
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
            
        <v-spacer></v-spacer>            

        <v-toolbar-items>
            <v-btn                 
                class="hidden-sm-and-down btn-menu-desktop"    
                :class="activeClass(item.href)" 
                active-class="v-btn--active yellow--text"
                v-for="item in menu"
                :key="item.title"
                flat                                      
                :href="item.href"                       
            >
                {{ item.title }}
            </v-btn> 
            <lang :locale="locale"></lang>
        </v-toolbar-items>
        
    </v-toolbar>       
</template>

<script>
    export default {   
        mounted () {
        },    
        props: ['locale'],    
        data: () => ({
            drawer: false,
            menu: [
                { title: 'Главная', href: '/' },
                { title: 'Виллы', href: '/villas' },
                { title: 'Апартаменты', href: '/apartments' },
                { title: 'Отзывы', href: '/feedbacks' },
                { title: 'Контакты', href: '/contact' },
            ],
            toggle_exclusive: 2,
            active_class_name: 'v-btn--active yellow--text'
        }),
        methods: {
            /**
             * Подсветка нужной кнопки меню              
             * @param {type} href
             * @returns {default.methods.active_class_name|String}
             */
            activeClass(href) {
                let location = window.location.pathname;               

                if (href !== '/') {
                    if (location.match(href)) {
                        return this.active_class_name;
                    } else return '';                   
                }  
                
                if (location === '/') {
                    return this.active_class_name;
                }
            },
            changeDrawer() {
                this.$parent.$children[0].drawer = true;
            }            
        },
        computed: {
            logoHeight () {
                switch (this.$vuetify.breakpoint.name) {
                    case 'xs': return '25'
                    case 'sm': return '25'
                    case 'md': return '41'
                    case 'lg': return '41'
                    case 'xl': return '41'
                }
            }
        }     
    }
</script>


<style>
/*    .v-toolbar__title:not(:first-child) {
        margin-left: 5px;
    }*/
    .v-btn.btn-menu-desktop {
        text-transform: none;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 24px;
    }
    
    .v-btn--icon.logo {
        width: auto;
    }
    
    .v-toolbar__content .v-btn--icon {
        margin: 0px;
    }   
    
    .logo:hover {
        background-color: black;
    }
    
    .contacts-desk .v-list__tile {
        padding-left: 24px;
    }
    
    .contacts-desk .v-list__tile__title.tel-text {
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 24px;
    }
    
    .contacts-desk .v-list__tile__avatar {
        min-width: 25px;
    }
    
    .contacts-desk .v-list__tile__avatar .v-avatar {
        margin-right: 8px;
    }

</style>

