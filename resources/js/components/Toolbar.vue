<template>
    <v-toolbar app fixed clipped-left id="toolbar">
        <v-toolbar-side-icon class="hidden-md-and-up" @click.stop="changeDrawer"></v-toolbar-side-icon>
        <v-toolbar-side-icon @click="$vuetify.goTo('#main', scrollOptions)">
            <v-icon size="24px" color="red darken-4">fas fa-star</v-icon>
        </v-toolbar-side-icon>            

        <v-toolbar-title>Application</v-toolbar-title>            
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
                //this.$parent.$children[0].drawer = true;
                this.$parent.$children[0].drawer = true;
            }            
        },

    }
</script>


<style>
    .v-toolbar__title:not(:first-child) {
        margin-left: 5px;
    }
    .v-btn.btn-menu-desktop {
        text-transform: none;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 24px;
    }
</style>
