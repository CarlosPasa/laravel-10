<template>
    <div class="container my-3">
        <div class="row">
            <Productos 
            v-show="paso === 1"/>
            <DatosDelComprador 
            v-show="paso === 2"/>
            <MetodoDeEntrega 
            v-show="paso === 3"/>
            <ResumenDeCompra 
            v-show="paso === 4"/>
        </div>
        <!-- COMPONENTES DE CADA PASO -->
        <div class="d-flex justify-content-between mt-3">
            <button type="button" class="btn btn-danger"
            :disabled="paso === 1"
            @click="pasoAnterior">ANTERIOR</button>
            <button type="button" class="btn btn-primary"
                v-if="paso !== 4"
            @click="pasoSiguiente">SIGUIENTE</button>
            <button type="button" class="btn btn-success"
                v-if="paso === 4"
            @click="finalizarCompra">FINALIZAR COMPRA</button>
        </div>
        
    </div>
</template>
<script setup>
//  Imports
import { onMounted, ref } from 'vue';
import {useCarritoStore} from "@/stores/carrito";
import Productos from '@/Components/ProcesoDeCompra/Productos.vue';
import DatosDelComprador from '@/Components/ProcesoDeCompra/DatosDelComprador.vue';
import MetodoDeEntrega from '@/Components/ProcesoDeCompra/MetodoDeEntrega.vue';
import ResumenDeCompra from '@/Components/ProcesoDeCompra/ResumenDeCompra.vue';
// Store
const store = useCarritoStore();


// Data
const paso = ref(1);

// Metodos

const pasoAnterior = () =>{
    paso.value--;
}
const pasoSiguiente = () =>{
    paso.value++;
}
const finalizarCompra = () =>{
    console.log('Finalizar Compra');
}

// Eventos
onMounted( () => {
	store.obtenerProductos();
});
</script>
<style scoped>
    
</style>