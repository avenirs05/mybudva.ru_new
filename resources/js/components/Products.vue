<template>     
    <v-container v-html="products"></v-container>
</template>

<script>
    export default {
        props: ['locale', 'products'],   
        mounted() { }, 
        data: () => ({  })
    }
</script>


<style>
    .table-products-layout .table {
        font-size: 16px;
        width: 100%;
        max-width: 100%;
        border: 1px solid #ddd;
        border-collapse: collapse;
    }

    .table-products-layout table tr {
        border: 1px solid #ddd;
        text-align: left;
    }

    .table-products-layout table td {
        padding: 10px;
    }

    .table-products-layout table th {
        background: white;
        padding: 10px;
        color: blue;
    }
</style>
