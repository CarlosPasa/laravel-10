<template>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="producto in store.productos" >
                <td>{{ producto.nombre }}</td>
                <td><input type="number" class="form-control" 
                    @change="store.editarCantidad(producto.id, $event.target.value)"
                    :value="producto.cantidad"></td>
                <td>{{ producto.precio }}</td>                
                <td>{{ producto.precio * producto.cantidad }}</td>
            </tr>
        </tbody>
    </table>
</template>
<script setup>
// Store
import {useCarritoStore} from "@/stores/carrito";

const store = useCarritoStore();
</script>
<style scoped>
    
</style>