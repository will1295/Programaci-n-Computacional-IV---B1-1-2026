<script>
    export default{
        data(){
            return{
                contador:0,
                nombre:""
            }
        },
        methods:{
            saludar(){
                alert("Soy una alerta!")

            },
            incrementar(){
                this.contador++
            },
            escribir(event){
                this.nombre = event.target.value
            }
        }
    }

</script>

<template>
    <button @click="saludar">Haz click aqui</button>
    <button v-on:click="saludar"">Haz click aqui</button>

    <p>{{ contador }}</p>
    <button @click="incrementar">Incrementar</button>

    <input @input="escribir" type="text" placeholder="Escribe algo!">
    <p>Hola {{ nombre }}, como te encuentras?</p>

<!--
    Realizar un componente que maneje una lista de usuarios,
    esta lista de usuarios debe mostrarse en una tabla y tener los
    campos de nombre, apellido, usuario, rol, estado
    Por defecto el estado debe ser activo; un boton debe poder
    cambiar el estado del usuario de activo a inactivo y viceversa
    En la tabla solo se mostraran los usuarios activos.    

-->


</template>

<style>

</style>
