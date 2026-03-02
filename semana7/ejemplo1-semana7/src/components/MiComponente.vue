<!--Parte js de un componente de vue-->
<script setup>
    import {ref} from 'vue';
    var contador = ref(0);

    var aumentar = () =>{
        contador.value++;
    }
</script>

<!--Parte html de un componente de vue-->
<template>
    <div class="caja">
        <h1>Hola Mundo desde Vue!</h1>
        <button @click="aumentar">Haz click!</button>
        <p>Haz hecho click {{ contador }} veces</p>
    </div>
    
</template>

<!--Parte css de un componente de vue-->
<style scoped>
    .caja{
        border: 2px solid black;
        border-radius: 8px;
        padding: 20px;
    }

    button{
        background-color: chartreuse;
        border-radius: 8px;
        cursor: pointer;
        padding: 10px 20px;
        
    }

</style>