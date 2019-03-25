<template>
    <v-app id="inspire" dark>        
        <v-navigation-drawer
          class="hidden-md-and-up"  
          v-model="drawer"
          clipped
          fixed           
        >
            <v-list dense>
                <v-list-tile 
                    v-for="item in menu"
                    :key="item.icon"                    
                    flat
                    @click="$vuetify.goTo(item.id, scrollOptions); 
                            drawer = !drawer"                           
                >
                    <v-list-tile-content>
                        <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>

        <v-toolbar app fixed clipped-left id="toolbar">
            <v-toolbar-side-icon class="hidden-md-and-up" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-side-icon @click="$vuetify.goTo('#main', scrollOptions)">
                <v-icon size="24px" color="red darken-4">fas fa-star</v-icon>
            </v-toolbar-side-icon>            
            
            <v-toolbar-title>Application</v-toolbar-title>            
            <v-spacer></v-spacer>            

            <v-toolbar-items>
                <v-btn                 
                    class="hidden-sm-and-down"    
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
        
        <content-component></content-component>
        <footer-component></footer-component>        
    </v-app>
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
            }
        },
    }
</script>


<style scoped>
    .v-toolbar__title:not(:first-child) {
        margin-left: 5px;
    }
</style>