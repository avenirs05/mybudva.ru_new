<template>
    <v-menu offset-y left bottom class="language-menu" attach="#toolbar">
        <v-btn flat slot="activator">
            <v-img contain height="24px" :src="`/img/${locale}.png`"></v-img>
        </v-btn>

        <v-list>
            <v-list-tile
                    v-for="(item, index) in items"
                    :key="index"
                    :href="`/locale/${item.name}`"
            >
                <v-list-tile-avatar>
                    <v-img contain height="24px" :src="`/img/${item.name}.png`"></v-img>
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>{{item.title}}</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list>
    </v-menu>
</template>


<script>
    export default {
        props: ['locale'],
        mounted () {},    
        data: () => {
            return {
                language: trans('landing.lang'),
                items: [
                    {
                        name: 'ru',
                        title: 'Russian'
                    },

                    {
                        name: 'en',
                        title: 'English'
                    },
                ]
            }
        },        
    }
</script>

