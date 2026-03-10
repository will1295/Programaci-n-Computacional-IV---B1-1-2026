<script setup>
    import {ref} from 'vue';
    let texto = ref('')

    let arreglo = ref([
        'Manzanas',
        'Peras',
        'Uvas'
    ]);
    const visible = ref(true)

    let parrafo = ref('<h1>Este parrafo se inserta por el v-html</h1>')

    let vColor = {
        mounted:(el,binding) =>{
            el.style.color=binding.value}
        }

    let vFocus = {
        mounted: (el) =>el.focus()
    }

    function mensaje(texto){
        alert(texto)
    }

</script>

<template>
    <input v-model="texto" type="text" placeholder="Escribe algo">
    <p>{{ texto }}</p>

    <h1>Mi listado de compras</h1>
    <ul>
        <li v-for="(elemento,index) in arreglo" :key="index">
            {{ index+1 }}.{{ elemento }}
        </li>
    </ul>

    <div>
        <button @click="visible=!visible">{{ visible ? 'Ocultar':'Mostrar' }}mensaje</button>
        <p v-if="visible">Hola soy visible</p>
        <p v-else>Estoy oculto</p>
        <p v-show="visible">Hola soy visible</p>
    </div>


    <div>
        <p v-html="parrafo"></p>
    </div>
    <p v-color="'red'">Este texto usa una directiva personalizada</p>

    <input v-focus type="text" placeholder="Esto se hace foco automaticamente">

    <button @click.right="mensaje('Hola!')">Haz click aqui</button>

</template>

<style scoped>

</style>