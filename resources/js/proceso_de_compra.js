import './bootstrap';
import { createApp } from 'vue';
import ProcesoDeCompra  from '@/components/ProcesoDeCompra/ProcesoDeCompra.vue';
import { createPinia } from 'pinia';
//Inicializar Pinia
const pinia = createPinia();
const app = createApp(ProcesoDeCompra);
app.use(pinia);
app.mount('#proceso_de_compra');