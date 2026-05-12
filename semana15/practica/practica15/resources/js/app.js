import './bootstrap';
import { createApp } from 'vue';
import SaludoComponent from './components/SaludoComponent.vue';

const app = createApp({});

app.component('saludo-component', SaludoComponent);

app.mount('#app');
/*Crear un component que realice
conversion de temperatura entre
Celcius, F y Kelvin
Utilizando un controlador para manejar
la view de blade*/