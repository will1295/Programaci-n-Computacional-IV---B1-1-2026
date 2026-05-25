<template>
    <div>
        <h3>Lista de clientes</h3>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DUI</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="cliente in clientes">
                    <td>{{ cliente.nombre }}</td>
                    <td>{{ cliente.dui }}</td>
                    <td>{{ cliente.email }}</td>
                    <td>{{ cliente.telefono }}</td>
                </tr>
            </tbody>
        </table>

    </div>

</template>

<script setup>
import {ref,onMounted,defineExpose} from 'vue';
import axios from 'axios';

const clientes = ref([]);

const obtenerClientes = async()=>{
    try{
        const response = await axios.get('http://127.0.0.1:8000/api/clientes');
        clientes.value = response.data;   
    }
    catch(error){
        console.error("Error al obtener los datos")
    }
}

onMounted(()=>{
    obtenerClientes();
})

</script>

<style>

</style>