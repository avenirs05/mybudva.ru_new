<template>
    <v-card class="mb-3 hidden-md-and-up">
        <v-carousel hide-delimiters :height="carouselHeight" :cycle="cycle">
                    <v-carousel-item
                v-for="(item,i) in items"
                :key="i"
                :src="item.src"

                ></v-carousel-item>
        </v-carousel>

        <v-card-title primary-title>
            <ul class="props-in-max-card-mob">
                <li><b>Площадь:</b> 150 м2</li>
                <li><b>Расстояние до моря:</b> 50 м</li>
                <li><b>Количество спален:</b> 4</li>
                <li><b>Вместимость:</b> 6 человек</li>
                <li><b>Площадь:</b> 150 м2</li>
                <li><b>Расстояние до моря:</b> 50 м</li>
                <li><b>Количество спален:</b> 4</li>
                <li><b>Вместимость:</b> 6 человек</li>
                <li><b>Количество спален:</b> 4</li>
                <li><b>Вместимость:</b> 6 человек</li>                    
            </ul>                
            
            <v-container>
                <h3 class="subheading indigo--text font-weight-bold text-xs-center mt-2">
                    Цена в сутки <span class="caption red--text darken-4">(без учета скидок)</span>
                </h3> 
            </v-container>    
            
            <table class="table">
                <tr>
                    <th>май</th>
                    <td>100€</td>
                </tr>
                <tr>
                    <th>июнь</th>
                    <td>100€</td>
                </tr>
                <tr>
                    <th>июль</th>
                    <td>100€</td>
                </tr>
                <tr>
                    <th>август</th>
                    <td>100€</td>
                </tr>
                <tr>
                    <th>сентябрь</th>
                    <td>100€</td>
                </tr>
                <tr>
                    <th>октябрь-апрель</th>
                    <td>100€</td>
                </tr>
            </table>
        </v-card-title>
    </v-card>  
</template>


<script>
    export default {    
        data () {
           return {
               cycle: false,  
               items: [
                   {
                      src: 'img/realties/astra1-02.jpg'
                   },
                   {
                      src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg'
                   },
                   {
                      src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg'
                   },
                   {
                      src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg'
                   }
               ]
            }
        },
        methods: { },
        computed: {
            carouselHeight() {                            
                switch (this.$vuetify.breakpoint.name) {
                    case 'xs': return '250'
                    case 'sm': return '400'
                }
            }
        }
    }
</script>


<style scoped>
    .props-in-max-card-mob {
        list-style-type: none;
        padding-inline-start: 0;
        line-height: 2;
    }

    .table {
        font-size: 16px;
        width: 100%;
        max-width: 100%;
        border: 1px solid #ddd;
        border-collapse: collapse;
    }

    table tr {
        border: 1px solid #ddd;
        text-align: left;
    }

    table td {
        padding: 8px;
        border: 1px solid #ddd;
        color: green;
        font-weight: bold;
    }

    table th {
        padding: 8px;
        border: 1px solid #ddd;
    }
</style>

