<template>
    <div>
        <h2>Componente de prueba</h2>
        <input v-model="nombre" type="text" placeholder="Escribe tu nombre">
        <p>Hola {{ nombre }}</p>
    </div>
</template>

<script setup>
import {ref} from 'vue'
const nombre = ref('')
</script>

<style>

</style>