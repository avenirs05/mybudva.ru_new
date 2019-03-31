<template>     
    <v-container> 
        <h3 class="text-xs-center blue--text mb-4">КАКИЕ ЦЕНЫ НА ПРОДУКТЫ В ЧЕРНОГОРИИ В 2019 ГОДУ?</h3>

        <v-layout row wrap>            
            <table class="table">
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
                </tbody>
            </table>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        data: () => ({  })
    }
</script>


<style scoped>
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
        padding: 10px;
    }

    table th {
        background: white;
        padding: 10px;
        color: blue;
    }
</style>
