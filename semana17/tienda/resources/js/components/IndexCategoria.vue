<template>
    <div>
        <h1>Categorías disponibles</h1>

        <div v-for="categoria in categoriasData">
            <h3>{{ categoria.nombre }}</h3>
            <p>{{ categoria.descripcion }}</p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    categoriasData: {
        type: Array,
        default: () => []
    }
})
</script>

<style>
</style>