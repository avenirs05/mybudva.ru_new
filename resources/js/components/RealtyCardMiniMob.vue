<template>
    <v-container class="hidden-md-and-up bg-color-card-mini-mob">
        <v-layout row wrap class="">
            <v-flex xs6>                    
                <v-card dark :href="realtyPage" hover class="text-xs-left">
                    <v-img
                        class="white--text"                            
                        :src="realty.images[0].path"  
                        aspect-ratio="1.5"
                    ></v-img>
                </v-card>
            </v-flex>
            <v-flex xs6>
                <v-card flat class="pl-3 card-mini-right-text-mob">
                    <a :href="realtyPage" id="headline-wrap">
                        <h4>{{ realty.name }}</h4>
                    </a>                        
                    <ul>
                        <li>
                            <b>{{ trans('text.realty.square') }}:</b> 
                            {{ realty.square }} {{ trans('text.realty.meters') }}<sup><small>2</small></sup>
                        </li>
                        <li>
                            <b>{{ trans('text.realty.dist_sea') }}:</b> 
                            {{ realty.dist_sea }} {{ trans('text.realty.meters') }}
                        </li>
                        <li>
                            <b>{{ trans('text.realty.bedrooms') }}:</b> 
                            {{ realty.bedrooms }}
                        </li>
                        <li>
                            <b>{{ trans('text.realty.capacity') }}:</b> 
                            {{ realty.capacity }} {{ trans('text.realty.persons') }}
                        </li>
                    </ul>
                </v-card>
            </v-flex>
            <v-flex d-flex class="pt-3" xs-12>                    
                <v-layout row wrap align-end>
                    <v-flex xs6>   
                        <v-btn 
                            class="btn-more-mob"                                   
                            :href="realtyPage"
                            :style="{ marginBottom: 0 }"
                            >{{ trans('text.btn_more') }}
                        </v-btn>
                    </v-flex> 
                    <v-flex xs6 text-xs-right>                                                        
                        <span class="price-text-through-mob">{{ trans('text.from') }} € {{ realty.price_line_through }}</span>&nbsp; &nbsp; 
                        <span class="price-text-mob">€ {{ realty.price }}</span>                           
                    </v-flex> 
                </v-layout>                     
            </v-flex>
        </v-layout>            
    </v-container> 
</template>


<script>
    export default {   
        mounted () { 
            this.realtyPage = route('realtyPage', this.realty.id);
        }, 
        props: [
            'locale',
            'realty'
        ],  
        data: () => ({ 
            realtyPage: ''
        })    
    }
</script>


<style scoped>
    .container {
        border-top: 1px solid #CCCCCC;
    }
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
/*        background: lavender;*/
        margin-bottom: 0px;
    }

    .price-text-through-mob {
        text-decoration: line-through;
        text-decoration-color: red;
        font-size: 18px;        
    }

    .price-text-mob {
        font-size: 18px;
        color: green;
    }

    .btn-more-mob.v-btn.theme--light {
        letter-spacing: 1px;  
        text-transform: none;
        color: rgb(255, 255, 255);
        background-color: rgb(51, 153, 51);
        margin-left: 0; 
        marfin-bottom: 0;
    }
</style>

