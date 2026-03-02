<script setup>
    import {ref} from 'vue'
    var miinput = ref(null)

    var valor = ref('')

    var texto = ref('')

    var mostrarvalor = () =>{
        valor.value = miinput.value.value;
    }


</script>

<template>
   
    <p>Escribiste esto: {{ texto }}</p>

    <input type="text" placeholder="Escribe algo">

    <input type="text" ref="miinput" v-model="texto" placeholder="Escribe algo">

    <button @click="mostrarvalor">Click!</button>

    <p>Esto fue lo que escribiste: {{ valor }} </p>

</template>

<style scoped>

</style>