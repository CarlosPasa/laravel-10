import './bootstrap';
import { createApp } from 'vue';
import VerProducto  from '@/components/Productos/VerProducto.vue';
import { createPinia } from 'pinia';

const pinia = createPinia();
//Obtener el elemento del DOM
const el = document.getElementById("ver_producto");

const app = createApp(VerProducto, {
    id:Number(el.getAttribute('data-id')),
});

app.use(pinia);

app.mount('#ver_producto');