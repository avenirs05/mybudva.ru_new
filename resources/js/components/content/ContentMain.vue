<template>
    <v-content>        
        <v-img
            class="white--text"                
            src="/img/main.jpg"
            id="main-img"
            >
            <v-container fill-height fluid grid-list-xl> 
                <v-layout row align-center class="hidden-sm-and-down">
                    <v-flex>                              
                        <h1 class="display-1 text-xs-center pb-5">{{ trans('text.header_main') }}</h1>                                
                    </v-flex>
                </v-layout>
                <v-layout row align-center class="hidden-md-and-up">
                    <v-flex>                                
                        <v-list-tile class="contacts-mob grow">
                            <v-list-tile-avatar size="25" color="grey darken-3">
                                <v-img
                                    class="elevation-6"
                                    src="/img/whatsapp.svg"
                                    ></v-img>
                            </v-list-tile-avatar>
                            <v-list-tile-avatar size="25" color="grey darken-3">
                                <v-img
                                    class="elevation-6"
                                    src="/img/viber.png"
                                    ></v-img>
                            </v-list-tile-avatar>
                            <v-list-tile-content>
                                <v-list-tile-title class="tel-text">+382 68 089 888</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>                               
                        <h1 class="display-1 text-xs-center pb-5">{{ trans('text.header_main') }}</h1>                                
                    </v-flex>
                </v-layout>
            </v-container>
        </v-img> 
        
        <v-container> 
            <h2 class="text-xs-center mt-4 font-weight-bold">Отдых в Черногории в 2019 году. Часто задаваемые вопросы.</h2>
            <h3 class="text-xs-center mt-5 blue--text">КУРОРТЫ И ГОРОДА В ЧЕРНОГОРИИ: КУДА ЛУЧШЕ ПОЕХАТЬ?</h3>

            <v-layout row wrap class="mt-4 hidden-sm-and-down">            
                <table class="table table-bordered" style="margin-bottom: 40px;">
                    <thead>
                        <tr>
                            <th scope="col">Будванская ривьера</th>
                            <th scope="col">Бока-Которский залив</th>
                            <th scope="col">Барская ривьера</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Открытое море. Лучшие пляжи в Черногории, преимущественно песчано-галечные. Главные курортные места: <i>Будва, Бечичи, Рафаиловичи, Свети Стефан (Близикуче), Петровац, Булярица.</i></p>
                                <p><i>Будва</i> — центр туризма в Черногории. Самая развитая инфраструктура. Максимальное количество туристов, отелей, магазинов, дискотек и развлечений. Почти все автобусные экскурсии на русском языке стартуют из Будвы. Три оборудованных песчано-галечных пляжа: <i>Могрен, Словенска Плажа и Ричардова глава</i>.</p>
                            </td>
                            <td>
                                <p><i>Котор, Пераст, Рисан.</i> Много старинных зданий, каменных улочек, древних церквей, памятников и достопримечательностей. Идеальное место для культурного отдыха. Пляжей почти нет. Купаться можно, ныряя с каменных плит на набережных, либо  использовать небольшие понтоны с лесенками в воду. Открытого моря нет.</p>
                                <p><i>Герцег-Нови, Кумбор, Биела</i>. Спокойное, чистое и глубокое море. Пляжи - мелкая галька. Самый зеленый и живописный регион, который называют «ботаническим садом» Черногории. Тихий курорт для семейного и романтического отдыха.</p>
                            </td>
                            <td>
                                <p><i>Бар</i> — это крупный деловой и промышленный центр с кварталами офисов и торговым портом. Русскоязычных туристов мало, цены ниже. Пляж в Баре галечный, купающихся немного. Туристы приезжают сюда в основном за покупками.</p>
                                <p><i>Добры Воды, Шушань, Сутоморе</i> — много туристов (в основном сербы), мало туристической инфраструктуры и пляжей.</p>
                                <p><i>Ульцинь</i> — мусульманско-албанский край Черногории. Пляж - <i>Велика Плажа</i> протяженностью 13 км. Самый ветреный регион. Идеальное место для  кайтсерфинга.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </v-layout>
        </v-container>
        
        <v-container grid-list-xl class="hidden-md-and-up">
            <v-layout v-bind="binding">
                <v-flex>                    
                    <h4>Будванская ривьера</h4>
                    <div>
                        <p>Открытое море. Лучшие пляжи в Черногории, преимущественно песчано-галечные. Главные курортные места: <i>Будва, Бечичи, Рафаиловичи, Свети Стефан (Близикуче), Петровац, Булярица.</i></p>
                    </div>                       
                </v-flex>
                <v-flex>                    
                    <h4>Будванская ривьера</h4>
                    <div>
                        <p>Открытое море. Лучшие пляжи в Черногории, преимущественно песчано-галечные. Главные курортные места: <i>Будва, Бечичи, Рафаиловичи, Свети Стефан (Близикуче), Петровац, Булярица.</i></p>
                    </div>                       
                </v-flex>
                <v-flex>                    
                    <h4>Будванская ривьера</h4>
                    <div>
                        <p>Открытое море. Лучшие пляжи в Черногории, преимущественно песчано-галечные. Главные курортные места: <i>Будва, Бечичи, Рафаиловичи, Свети Стефан (Близикуче), Петровац, Булярица.</i></p>
                    </div>                       
                </v-flex>
            </v-layout>
        </v-container>
        
        <v-container grid-list-xl>
            <div class="mb-5">
                <h3 class="blue--text">КАКОЕ МОРЕ В ЧЕРНОГОРИИ?</h3>
                <p>Адриатическое море с чистой (прозрачность воды до 60 м) и лазурной водой, но при этом не самое теплое. Вода очень соленая (содержание природной соли 40 %) и богата минералами. Пляжный сезон в Черногории начинается в начале мая, а заканчивается в середине октября.</p>
            </div>
            <div class="mb-5">
                <h3 class="blue--text">КАКОЕ МОРЕ В ЧЕРНОГОРИИ?</h3>
                <p>Адриатическое море с чистой (прозрачность воды до 60 м) и лазурной водой, но при этом не самое теплое. Вода очень соленая (содержание природной соли 40 %) и богата минералами. Пляжный сезон в Черногории начинается в начале мая, а заканчивается в середине октября.</p>
            </div>
        </v-container>
        
        <v-container> 
            <h3 class="text-xs-center blue--text mb-4">КАКИЕ ЦЕНЫ НА ПРОДУКТЫ В ЧЕРНОГОРИИ В 2019 ГОДУ?</h3>

            <v-layout row wrap>            
                <table class="table table-bordered">
                    <thead class="faq__table-heads">
                        <tr>
                            <th scope="col">Продукт</th>
                            <th scope="col">Единица измерения</th>
                            <th scope="col">Цена, €</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="faq__veg-tr text-success bg-light">
                            <td colspan="3"><b>Овощи</b></td>
                        </tr>
                        <tr class="faq__veg-tr text-success">
                            <td>Картофель</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 0,45</td>
                        </tr>
                        <tr class="faq__veg-tr text-success">
                            <td>Помидоры</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 0,80</td>
                        </tr>
                        <tr class="faq__veg-tr text-success">
                            <td>Огурцы</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 0,60</td>
                        </tr>
                        <tr class="faq__veg-tr text-success">
                            <td>Перец</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 2,00</td>
                        </tr>

                        <tr class="faq__fruits-tr text-danger">
                            <td colspan="3"><b>Фрукты</b></td>
                        </tr>
                        <tr class="faq__fruits-tr text-danger">
                            <td>Клубника</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 3,00</td>
                        </tr>
                        <tr class="faq__fruits-tr text-danger">
                            <td>Черешня</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 4,50</td>
                        </tr>
                        <tr class="faq__fruits-tr text-danger">
                            <td>Яблоки</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 0,70</td>
                        </tr>
                        <tr class="faq__fruits-tr text-danger">
                            <td>Бананы</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 1,00</td>
                        </tr>
                        <tr class="faq__fruits-tr text-danger">
                            <td>Виноград</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 3,00</td>
                        </tr>
                        <tr class="faq__fruits-tr text-danger">
                            <td>Апельсины</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 0,80</td>
                        </tr>

                        <tr class="faq__meat-tr text-primary">
                            <td colspan="3"><b>Мясо</b></td>
                        </tr>
                        <tr class="faq__meat-tr text-primary">
                            <td>Свинина</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 3,50</td>
                        </tr>
                        <tr class="faq__meat-tr text-primary">
                            <td>Говядина</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 6,50</td>
                        </tr>
                        <tr class="faq__meat-tr text-primary">
                            <td>Курица</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 2,50</td>
                        </tr>
                        <tr class="faq__meat-tr text-primary">
                            <td>Ветчина</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 3,70</td>
                        </tr>
                        <tr class="faq__meat-tr text-primary">
                            <td>Пршут</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 12,00</td>
                        </tr>

                        <tr class="faq__milk-tr text-success">
                            <td colspan="3"><b>Молочные продукты</b></td>
                        </tr>
                        <tr class="faq__milk-tr text-success">
                            <td>Сыр</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 5,00</td>
                        </tr>
                        <tr class="faq__milk-tr text-success">
                            <td>Масло</td>
                            <td nowrap>0,25 кг</td>
                            <td nowrap>от 2,50</td>
                        </tr>
                        <tr class="faq__milk-tr text-success">
                            <td>Молоко</td>
                            <td nowrap>1 л</td>
                            <td nowrap>от 0,70</td>
                        </tr>

                        <tr class="faq__sea-tr text-info">
                            <td colspan="3"><b>Морепродукты</b></td>
                        </tr>
                        <tr class="faq__sea-tr text-info">
                            <td>Мидии</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 2,50</td>
                        </tr>
                        <tr class="faq__sea-tr text-info">
                            <td>Креветки</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 15,00</td>
                        </tr>
                        <tr class="faq__sea-tr text-info">
                            <td>Устрицы</td>
                            <td nowrap>1 шт</td>
                            <td nowrap>от 1,00</td>
                        </tr>
                        <tr class="faq__sea-tr text-info">
                            <td>Дорада/сибас</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 8,00</td>
                        </tr>
                        <tr class="faq__sea-tr text-info">
                            <td>Форель</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 5,00</td>
                        </tr>

                        <tr class="faq__drinks-tr text-danger">
                            <td colspan="3"><b>Напитки</b></td>
                        </tr>
                        <tr class="faq__drinks-tr text-danger">
                            <td>Вода без газа</td>
                            <td nowrap>1,5 л</td>
                            <td nowrap>от 0,50</td>
                        </tr>
                        <tr class="faq__drinks-tr text-danger">
                            <td>Минеральная вода с газом</td>
                            <td nowrap>1,5 л</td>
                            <td nowrap>от 0,65</td>
                        </tr>
                        <tr class="faq__drinks-tr text-danger">
                            <td>Пиво баночное</td>
                            <td nowrap>0,5 л</td>
                            <td nowrap>от 0,60</td>
                        </tr>
                        <tr class="faq__drinks-tr text-danger">
                            <td>Вино местное Plantaze</td>
                            <td nowrap>0,75 л</td>
                            <td nowrap>от 3,00</td>
                        </tr>
                        <tr class="faq__drinks-tr text-danger">
                            <td>Ракия (40 градусов)</td>
                            <td nowrap>1 л</td>
                            <td nowrap>от 12,00</td>
                        </tr>

                        <tr class="faq__another-tr text-success">
                            <td colspan="3"><b>Прочие продукты</b></td>
                        </tr>
                        <tr class="faq__another-tr text-success">
                            <td>Хлеб</td>
                            <td nowrap>1 шт</td>
                            <td nowrap>от 0,60</td>
                        </tr>
                        <tr class="faq__another-tr text-success">
                            <td>Макароны</td>
                            <td nowrap>0,5 кг</td>
                            <td nowrap>от 0,60</td>
                        </tr>
                        <tr class="faq__another-tr text-success">
                            <td>Яйца</td>
                            <td nowrap>10 шт</td>
                            <td nowrap>от 1,30</td>
                        </tr>
                        <tr class="faq__another-tr text-success">
                            <td>Чай в пакетиках</td>
                            <td nowrap>20 шт</td>
                            <td nowrap>от 0,80</td>
                        </tr>
                        <tr class="faq__another-tr text-success">
                            <td>Кофе молотый</td>
                            <td nowrap>0,5 кг</td>
                            <td nowrap>от 4,00</td>
                        </tr>
                        <tr class="faq__another-tr text-success">
                            <td>Сахар</td>
                            <td nowrap>1 кг</td>
                            <td nowrap>от 0,40</td>
                        </tr>
                        <tr class="faq__another-tr text-success">
                            <td>Сигареты</td>
                            <td nowrap>1 пачка</td>
                            <td nowrap>от 2,00</td>
                        </tr>
                    </tbody>
                </table>
            </v-layout>
        </v-container>
        
        
    </v-content>
</template>


<script>    
    export default {
        mounted () { },
        data: () => ({

        }),
        computed: {
            hidden () {
                switch (this.$vuetify.breakpoint.name) {
                    case 'md': return false
                    case 'lg': return false
                    case 'xl': return false
                }
            },
            binding () {
                const binding = {}
                
                if (this.$vuetify.breakpoint.smAndDown) {
                    binding.column = true; 
                }

                return binding;
            }
        },
    }
</script>

<style scoped>
/* В файл app.js добавлена функция vh() */

    .contacts-mob {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }

    .contacts-mob .v-list__tile__title.tel-text {
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 28px;
    }

    .contacts-mob .v-list__tile__avatar {
        min-width: 25px;
    }

    .contacts-mob .v-list__tile__avatar .v-avatar {
        margin-right: 8px;
    }
    
    .table {
        font-size: 18px;
    }
    
    .v-content {
        font-size: 18px;
    }
</style>