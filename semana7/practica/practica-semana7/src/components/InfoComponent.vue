<script setup>
    let info = {
        nombre:"Juan Perez",
        edad:18,
        carrera:"Ing en sistemas"
    }
</script>

<template>
    <div>
        <h2>Nombre: {{ info.nombre }}</h2>
        <h2>Edad: {{ info.edad }}</h2>
        <h2>Carrera: {{ info.carrera }}</h2>
    </div>
    
</template>

<style scoped>
    
</style>