<template>
    <div>
        <h1>{{ mensaje }}</h1>
        <button @click="cambiar">Cambiar texto</button>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                mensaje:"Hola desde Vue"
            }
        },methods:{
            cambiar(){
                this.mensaje = "Mensaje actualizado"
            }
        }
    }

</script>

<style>

</style>