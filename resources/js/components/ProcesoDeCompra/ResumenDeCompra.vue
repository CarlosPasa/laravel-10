<template>
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Productos</h5>
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
                            <tr v-for="producto in storeCarrito.productos" >
                                <td>{{ producto.nombre }}</td>
                                <td>{{ producto.cantidad }}</td>
                                <td>{{ producto.precio }}</td>                
                                <td>{{ producto.precio * producto.cantidad }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Datos del comprador
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>Nombre: </strong>{{ storeProcesoDeCompraStore.nombre }}</li>
                        <li><strong>Apellido: </strong>{{ storeProcesoDeCompraStore.apellido }}</li>
                        <li><strong>Email: </strong>{{ storeProcesoDeCompraStore.email }}</li>
                        <li><strong>Telefono: </strong>{{ storeProcesoDeCompraStore.telefono }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Metodo de Entrega
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>Metodo de entrega: </strong>{{ storeProcesoDeCompraStore.metodo_de_envio }}</li>
                    </ul>
                    <div v-if="storeProcesoDeCompraStore.metodo_de_envio === 'Envío a domicilio'">
                        <h6>Direccion de envio</h6>
                        <ul>
                            <li><strong>Direccion: </strong>{{ storeProcesoDeCompraStore.direccion }}</li>
                            <li><strong>Localidad: </strong>{{ storeProcesoDeCompraStore.localidad }}</li>
                            <li><strong>Provincia: </strong>{{ storeProcesoDeCompraStore.provincia }}</li>
                            <li><strong>Pais: </strong>{{ storeProcesoDeCompraStore.pais }}</li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
// Imports
import { useCarritoStore } from '@/stores/carrito';
import { useProcesoDeCompraStore } from '@/stores/proceso_de_compra';

// Data
const storeCarrito = useCarritoStore();
const storeProcesoDeCompraStore = useProcesoDeCompraStore();
</script>
<style scoped>
    
</style>