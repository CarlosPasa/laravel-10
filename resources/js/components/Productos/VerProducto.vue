<template>
    <div class="container mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6">
                <img src="https://img.freepik.com/vector-premium/icono-carrito-compras-rapido_414847-513.jpg?size=338&ext=jpg&ga=GA1.1.1687694167.1704067200&semt=ais"
                class="img-fluid" alt="">
            </div>
            <div class="col-12 col-sm-6">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ nombre }}</h1>
                    </div>
                    <div class="col-12">
                        <p>DESCRIPCION DEL PRODUCTO</p>
                    </div>
                    <div class="col-12">
                        <h6><strong>PRECIO:</strong> ${{ precio }}</h6>
                    </div>
                    <div class="col-12">
                        <h6><strong>STOCK:</strong> {{ stock }}</h6>
                    </div>
                    <div class="col-12">
                        <AgregarAlCarrito 
                        :id="props.id"
                        :stock="stock" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>
<script setup>
import axios from 'axios';
import { onMounted, ref } from 'vue';
import AgregarAlCarrito from './AgregarAlCarrito.vue';

    //Props
    const props = defineProps ({
        id:{
            type: Number,
            default:0
        }
    });

    //Data
    const nombre = ref('');
    const precio = ref(0);
    const stock = ref(0);
    


    // Eventos
    onMounted(() =>{
        // Traemos info del producto
        axios
            .get('/api/productos/'+props.id)
            .then((responseProducto) => {
                const producto = responseProducto.data;
                //setiamos variables del componente
                nombre.value = producto.nombre;
                precio.value = producto.precio;
                stock.value = producto.stock;
                console.log(producto);
            })
    });
    
</script>
<style scoped>
    
</style>