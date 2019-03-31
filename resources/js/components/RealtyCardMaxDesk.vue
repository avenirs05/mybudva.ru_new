<template>
    <div>
        <v-layout row wrap class="mb-3 mt-4 hidden-sm-and-down">
            <v-flex xs5>                    
                <v-card dark hover class="text-xs-left" @click="openLg">
                    <v-img
                        class="realty-card-desk white--text"                            
                        src="/img/realties/astra1-02.jpg"  
                        aspect-ratio="1.5"
                        >
                    </v-img>
                </v-card>
            </v-flex>
            <v-flex xs4>
                <v-card flat class="pl-3 card-mini-right-text-desk">
                    <ul>
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
                </v-card>
            </v-flex>
            <v-flex xs3>
                <v-card flat class="pl-3">
                    <h2 class="subheading indigo--text font-weight-bold mb-3">
                        Цена в сутки <span class="caption red--text darken-4">(без учета скидок)</span>
                    </h2> 
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
                </v-card>
            </v-flex>
        </v-layout>
        <v-layout row align-center class="hidden-sm-and-down">
            <v-flex>                              
                <div id="lightgallery" ref="lightgallery" class="mb-3">
                    <a href="img/realties/astra1-02.jpg">
                        <img src="img/realties/astra1-02.jpg" />
                    </a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                    <a href="img/realties/astra1-02.jpg"><img src="img/realties/astra1-02.jpg" /></a>
                </div>
            </v-flex>               
        </v-layout> 
    </div>
</template>


<script>
    export default {    
        data: () => ({}),
        methods: {
            /**
             * Т.к. основная картинка лежит вне lightgallery,
             * то нужно при ее нажатии инициировать клик внутри первого элемента в
             * lightgallery
             * @returns {undefined}
             */
            openLg() {
                $('.realty-card-desk').click(function () {
                    $('#lightgallery a').first().trigger("click");
                });
            }
        }
    }
</script>


<style scoped>
    #lightgallery img {
        width: 65px;
        height: 43px;
        margin-right: -2px;
        margin-top: -5px;
    }

    .v-card {
        background-color: transparent;
        font-size: 18px;
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

    .price-in-max-card-desk {
        list-style-type: none;
        padding-inline-start: 0;
    }

    .description {
        font-size: 16px;
    }
    
</style>

