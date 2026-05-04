import './bootstrap';
import { createApp } from 'vue';
import SaludoComponent from './components/SaludoComponent.vue';
import CalculadoraComponent from './components/CalculadoraComponent.vue';


/*createApp(SaludoComponent).mount("#app")*/
/* 
const app = createApp({})
app.component('calculadora-component',CalculadoraComponent)
app.mount("#app")*/

createApp(CalculadoraComponent).mount("#app")