<template>
    <v-container class="hidden-sm-and-down">
        <v-layout row wrap class="mb-5">
            <v-flex xs4>                    
                <v-card dark :href="realtyPage" hover class="text-xs-left">
                    <v-img
                        class="white--text"                            
                        src="/images/realties/astra1-02.jpg"  
                        aspect-ratio="1.5"
                        >
                    </v-img>
                </v-card>
            </v-flex>
            <v-flex xs4>
                <v-card flat class="pl-3 card-mini-right-text-desk">
                    <a :href="realtyPage" id="headline-wrap">
                        <h3 class="headline">{{ realty.name }}</h3>
                    </a>
                    <h4 class="pt-3 mb-4">{{ realty[`subname_${locale}`] }}</h4>
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
                            {{ realty.capacity }}
                        </li>
                    </ul>
                </v-card>
            </v-flex>
            <v-flex d-flex xs4>
                <v-layout column align-end justify-space-between fill-height>
                    <v-flex>                            
                        <v-img src="/images/booking-logo.jpg" height="50" width="50">
                            <span class="rating">{{ bookingMark }}</span>
                        </v-img>                            
                    </v-flex> 
                    <v-flex d-flex> 
                        <v-layout column align-end justify-space-between fill-height>
                            <span class="price-text-through-desk">{{ trans('text.from') }} € {{ realty.price_line_through }}</span>  
                            <span class="price-text-desk">€ {{ realty.price }}</span> 
                            <v-btn class="btn-more-desk"
                                   large
                                   :href="realtyPage"
                                   >{{ trans('text.btn_more') }}
                            </v-btn>
                        </v-layout>
                    </v-flex>               
                </v-layout>
            </v-flex>
        </v-layout>
        <hr class="grey lighten-5 mt-4">      
    </v-container>  
</template>


<script>
    export default {   
        mounted () { 
            console.log(this.realty.booking_mark);
            console.log(typeof this.realty.booking_mark);
            this.realtyPage = route('realtyPage', this.realty.id);
            this.getBookingMark();
        }, 
        props: [
            'realty', 
            'locale'
        ],
        data: () => ({ 
            realtyPage: '',
            bookingMark: 0.0
        }),
        methods: {
            /**
             * Если оценка 9.0 или 8.0, то по умолчанию js обрезает до 8 или 9
             * Эта функция проверяет после точки и если 0, то добавляет знак 
             * после точки
             * @returns {undefined}
             */
            getBookingMark () {
                let mark = this.realty.booking_mark;                
                mark = String(mark);
                if (mark[2] === undefined) mark += '.0';                
                this.bookingMark = mark;           
            }
        }
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

    .v-card.card-mini-right-text-desk {
        margin-top: -5px;
    }

    h4 {
        font-weight: normal;
    }

    .price-text-desk {
        font-size: 24px;
    }

    .price-text-through-desk {
        text-decoration: line-through;
        text-decoration-color: red;
        font-size: 24px;        
    }

    .btn-more-desk.v-btn.v-btn--large {
        margin-right: 0;  
        padding: 10px 20px;
        font-size: 20px;
        border-radius: 3px;
        background-color: rgb(51, 153, 51);
        color: rgb(255, 255, 255);
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

