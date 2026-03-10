<script setup>
    import {ref} from 'vue';
    
    import logo from '../assets/logo.png';
    import logo2 from '../assets/social-impact.png';  
   
    //imagen de internet
    const imagen = "https://ugb.edu.sv/wp-content/uploads/2025/12/social-impact.png"
  
   //imagen guardad y enlace
    const imagen2 = logo
    const enlace = "https://facturacion.ugb.edu.sv/img/job-profile2.a5201693.png" 
    
    //imagen guardad
    const imagenActual = ref(imagen2)
    const imagen3 = logo2
    

    const cambiarImagen=()=>{
        imagenActual.value = imagen3
    }

</script>

<template>
    <img :src="imagen" alt="" srcset="">

    <div>
        <img :src="imagenActual" alt="">
        <br>
        <a v-bind="enlace">Enlace a internet</a>
    </div>
    <button @click="cambiarImagen">Cambia la imagen</button>

    

</template>

<style scoped>

</style>