<template>
    <v-container class="hidden-md-and-up bg-color-card-mini-mob">
        <v-layout row wrap class="">
            <v-flex xs6>                    
                <v-card dark href="/realty" hover class="text-xs-left">
                    <v-img
                        class="white--text"                            
                        src="/img/realties/astra1-02.jpg"  
                        aspect-ratio="1.5"
                        >
                    </v-img>
                </v-card>
            </v-flex>
            <v-flex xs6>
                <v-card flat class="pl-3 card-mini-right-text-mob">
                    <a href="/realty" id="headline-wrap">
                        <h4>Villa Name</h4>
                    </a>                        
                    <ul class="">
                        <li><b>Площадь:</b> 150 м2</li>
                        <li><b>До моря:</b> 50 м</li>
                        <li><b>Спален:</b> 4</li>
                        <li><b>Человек:</b> 6</li>                         
                    </ul>
                </v-card>
            </v-flex>
            <v-flex d-flex class="pt-3" xs-12>                    
                <v-layout row wrap align-end>
                    <v-flex xs6>   
                        <v-btn class="btn-more-mob"                                   
                               href="/"
                               >Подробнее
                        </v-btn>
                    </v-flex> 
                    <v-flex xs6 text-xs-right>                                                        
                        <span class="price-text-through-mob">от €180</span>&nbsp; &nbsp; 
                        <span class="price-text-mob">€180</span>                           
                    </v-flex> 
                </v-layout>                     
            </v-flex>
        </v-layout>            
    </v-container> 
</template>


<script>
    export default {   
        mounted () {}, 
        data: () => ({ })    
    }
</script>


<style scoped>
    .v-card.card-mini-right-text-mob {
        background-color: transparent;
        font-size: 16px;
        margin-top: -5px;
    }

    .card-mini-right-text-mob ul {
        list-style-type: none;
        padding-inline-start: 0;
    }

    .bg-color-card-mini-mob {
        background: beige;
        margin-bottom: 20px;
    }

    .price-text-through-mob {
        text-decoration: line-through;
        text-decoration-color: red;
        font-size: 22px;        
    }

    .price-text-mob {
        font-size: 22px;
        color: green;
    }

    .btn-more-mob.v-btn.theme--light {
        letter-spacing: 1px;  
        text-transform: none;
        color: rgb(255, 255, 255);
        background-color: rgb(51, 153, 51);
        margin-left: 0;    
    }
</style>

