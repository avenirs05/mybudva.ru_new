<template>
    <v-app id="inspire" dark>        
        <v-navigation-drawer
          v-model="drawer"
          clipped
          fixed
          app 
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

            <v-toolbar-items >
                <v-btn class="hidden-sm-and-down"                    
                    active-class="v-btn--active yellow--text"
                    v-for="item in menu"
                    :key="item.icon"
                    flat
                    @click="$vuetify.goTo(item.id, scrollOptions)"
                    :to="item.id"
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
        mounted () { },    
        props: ['locale'],    
        data: () => ({
            drawer: false,
            menu: [
                { icon: 'home', title: 'Link A', id: '#main' },
                { icon: 'screen2', title: 'Link B', id: '#screen2' },
                { icon: 'screen3', title: 'Link C', id: '#screen3' },
                { icon: 'screen4', title: 'Link D', id: '#screen4' },
            ],
            scrollOptions: {
                duration: 1000,
                offset: 70,
                easing: 'easeInOutCubic'
            },
            toggle_exclusive: 2,
        })         
    }
</script>


<style scoped lang="scss">
    .v-toolbar__title:not(:first-child) {
        margin-left: 5px;
    }
</style>