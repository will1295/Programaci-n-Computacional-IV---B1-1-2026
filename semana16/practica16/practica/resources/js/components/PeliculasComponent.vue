<template>
    <h1>Registro de peliculas</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Duracion</th>
                <th>Categoria</th>
                <th>Fecha de estreno</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="pelicula in peliculas">
                <td>{{ pelicula.nombre }}</td>
                <td>{{ pelicula.duracion }}</td>
                <td>{{ pelicula.categoria }}</td>
                <td>{{ pelicula.fechaestreno }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
import {ref,onMounted} from 'vue';
import axios from 'axios';

const props = defineProps({
    listado:{
        type:Array,
        default:()=>[]
    }
})
//Agregar la funcion de crear una nueva pelicula
const peliculas = ref(props.listado);
const lista = async() => {
    const res = await axios.get('/');
    peliculas.value = res.data;
}


</script>

<style>

</style>