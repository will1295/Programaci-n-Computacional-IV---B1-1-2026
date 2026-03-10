<script setup>
    import {ref} from 'vue';

    let precio = ref(0)
    let cantidad = ref(0)
    let total = ref(0)

    function calcular(){
        total.value = precio.value * cantidad.value;
    }

</script>

<template>
    <h1>Calculo de compra</h1>
    <form action="" method="post">
        <label for="">Precio del producto</label>
        <input v-model="precio" type="number" name="" id="" step="0.01" min="0.01">

        <label for="">Cantidad de producto</label>
        <input v-model="cantidad" type="number" name="" id="" min="1">
        <button @click.prevent="calcular">Calcular</button>
    </form>

    <h3>Total de la compra: ${{ total }}</h3>

</template>

<style scoped>
</style>