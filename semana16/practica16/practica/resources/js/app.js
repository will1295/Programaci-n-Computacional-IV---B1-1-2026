import './bootstrap';
import { createApp } from 'vue';
import PeliculasComponent from './components/PeliculasComponent.vue';

const app = createApp({});
app.component('pelicula-component',PeliculasComponent);
app.mount('#app');