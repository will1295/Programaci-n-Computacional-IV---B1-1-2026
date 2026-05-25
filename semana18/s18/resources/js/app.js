import './bootstrap';
import {createApp} from 'vue';
import VerClientes from './components/VerClientes.vue';
import IngresarCliente from './components/IngresarCliente.vue';

const app = createApp({});
app.component('ver-clientes',VerClientes);
app.component('ingresar-clientes',IngresarCliente);
app.mount('#app');