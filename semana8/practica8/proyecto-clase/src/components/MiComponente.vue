<script>
    export default{
        data(){
            return{
                mensaje:"Hola Mundo con Vue",
                descripcion:"<h1>Este texto se carga desde vue</h1>",
                mostrar:true,
                nombre:"Pepito Perez",
                edad:19,
                imagen:"https://lenguajejs.com/vuejs/introduccion/que-es-vue/vuejs.png"
            }
        }
    }

</script>

<template>
    <h1 v-text="mensaje"></h1>
    <div v-html="descripcion"></div>
    <p v-if="edad>=18">
        Eres mayor de edad
    </p>
    <p v-else-if="edad<18">
        Eres menor de edad
    </p>
    <p v-show="mostrar">
        Este texto puede estar oculto
    </p>

    <img :src="imagen" alt="">

</template>

<style scoped>

</style>