<script setup>
import {ref} from 'vue';

var nombre = ref('Juan Perez');
var edad = 20;
var universidad = "UGB";
var carrera = "Ing en sistemas";

</script>

<template>
    <div>
        <h1>Perfil</h1>
        <h2>{{ nombre }}</h2>
        <p>Edad {{ edad }}</p>
        <p>Universidad: {{ universidad }}</p>
        <p>Carrera: {{ carrera }}</p>
    </div>

</template>

<style scoped>

</style>