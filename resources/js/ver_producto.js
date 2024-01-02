import './bootstrap';
import { createApp } from 'vue';
import VerProducto  from '@/components/Productos/VerProducto.vue';

//Obtener el elemento del DOM
const el = document.getElementById("ver_producto");

createApp(VerProducto, {
    id:Number(el.getAttribute('data-id')),
}).mount('#ver_producto');