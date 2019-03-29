<template>
    <v-content>          
        <v-container>
            <v-layout row align-center class="hidden-sm-and-down">
                <v-flex>                              
                    <h1 class="display-1 text-xs-center">Villas</h1>                     
                </v-flex>
            </v-layout>
            <hr class="grey lighten-5 mt-4">
        </v-container>  
        
        <v-container>
            <v-layout row wrap class="mb-5">
                <v-flex xs4>                    
                    <v-card dark href="/" hover class="text-xs-left">
                        <v-img
                            class="white--text"                            
                            src="/img/realties/astra1-02.jpg"                            
                            >
                        </v-img>
                    </v-card>
                </v-flex>
                <v-flex xs4>
                    <v-card flat class="pl-3 card-left-text">
                        <a href="" id="headline-wrap">
                            <h3 class="headline">Villa Name</h3>
                        </a>
                        <h4 class="pt-3 mb-4">Subheader</h4>
                        <ul>
                            <li><b>Площадь:</b> 150 м2</li>
                            <li><b>Расстояние до моря:</b> 50 м</li>
                            <li><b>Количество спален:</b> 4</li>
                            <li><b>Вместимость:</b> 6 человек</li>
                        </ul>
                    </v-card>
                </v-flex>
                <v-flex d-flex xs4>
                    <v-layout column align-end justify-space-between fill-height>
                        <v-flex>                            
                            <v-img src="/img/booking-logo.jpg" height="50" width="50">
                                <span class="rating">9.3</span>
                            </v-img>                            
                        </v-flex> 
                        <v-flex d-flex> 
                            <v-layout column align-end justify-space-between fill-height>
                                <span class="price-text-through">от € 180</span>  
                                <span class="price-text">€ 180</span> 
                                <v-btn class="btn-more"
                                       large
                                       href="/"
                                       >Подробнее
                                </v-btn>
                            </v-layout>
                        </v-flex>               
                    </v-layout>
                </v-flex>
            </v-layout>
            <hr class="grey lighten-5 mt-4">      
        </v-container>  
    </v-content>
</template>

<script>    
    export default {
        mounted () { },
        data: () => ({
            
        })        
    }
</script>

<style scoped>
    #headline-wrap {
        text-decoration: none;
    }
    #headline-wrap:hover {
        color: rgb(51, 122, 183);
        text-decoration: underline;
    }
    .v-card {
        background-color: transparent;
        font-size: 18px;
    }
    
    .v-card.card-left-text {
        margin-top: -5px;
    }
    
    h4 {
        font-weight: normal;
    }
    
    .price-text {
        font-size: 24px;
    }
    
    .price-text-through {
        text-decoration: line-through;
        text-decoration-color: red;
        font-size: 24px;        
    }
    
    .btn-more.v-btn.v-btn--large {
        margin-right: 0;  
        padding: 10px 20px;
        font-size: 20px;
        border-radius: 3px;
        background-color: rgb(51, 153, 51)!important ;
        color: rgb(255, 255, 255)!important;
        border: medium none;
        width: 100%;
        letter-spacing: 1px;  
        text-transform: none;
        font-weight: 400;
    }
    
    .rating {
        position: absolute;
        color: #fff;
        left: 13px;
        top: 11px;
        font-size: 18px;
        color: white;
    }
    
</style>