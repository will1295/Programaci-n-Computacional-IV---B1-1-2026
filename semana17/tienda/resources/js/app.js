import './bootstrap';
import { createApp } from 'vue';
import Categoria from './components/IndexCategoria.vue';

const app = createApp({});

app.component('index-categoria', Categoria);
app.mount("#app");