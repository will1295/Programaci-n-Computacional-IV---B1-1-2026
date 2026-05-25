<template>
    <h3>Registrar nuevo cliente</h3>

    <form @submit.prevent="guardarCliente">
        <input type="text" v-model="form.nombre" required placeholder="Nombre">
        <input type="number" v-model="form.dui" required placeholder="DUI">
        <input type="email" v-model="form.email" required placeholder="Email">
        <input type="number" v-model="form.telefono" required placeholder="Telefono">
        <button type="submit">Guardar</button>
    </form>
</template>

<script setup>
import {ref,defineEmits} from 'vue';
import axios from 'axios';

const emit = defineEmits(['cliente-agregado']);

const form = ref({
    nombre:'',
    dui:'',
    email:'',
    telefono:''
})

const guardarCliente = async()=>{
    try{
        const response = await axios.post('http://127.0.0.1:8000/api/clientes',form.value);
    alert(response.data.message);
    form.value = {nombre:'',dui:'',email:'',telefono:''}
    emit('cliente-agregado')
    }
    catch(error){
        console.error(error);
        alert(error.response?.data?.message || "Error al agregar");
    }
    
}

</script>

<style>

</style>