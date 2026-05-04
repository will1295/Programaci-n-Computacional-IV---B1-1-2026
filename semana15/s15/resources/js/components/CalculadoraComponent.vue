<template>
    <div>
        <input v-model="numero1" type="number" placeholder="Numero 1">
        <input v-model="numero2" type="number" placeholder="Numero 2">
        <select v-model="operacion" name="" id="">
            <option value="sumar">+</option>
            <option value="restar">-</option>
            <option value="multi">*</option>
            <option value="dividir">/</option>
        </select>
        <button @click="calcular">Calcular</button>
    </div>
    {{ resultado }}
</template>

<script setup>
import {ref} from 'vue';
import axios from 'axios';

var numero1 = ref(0)
var numero2 = ref(0)
var operacion = ref("sumar")
var resultado = ref(null)

const calcular = async()=>{
    try{
        const response = await
        axios.post('/calcular',{
            n1:numero1.value,
            n2:numero2.value,
            op:operacion.value
        })
        resultado.value = response.data.res;
    }
    catch(error){
        console.error("Error al calcular: ",error)
    }
}


</script>

<style>

</style>