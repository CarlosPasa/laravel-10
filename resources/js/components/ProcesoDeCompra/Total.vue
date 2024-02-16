<template>
    <div>
        <div class="card">
            <h5 class="card-header">TOTAL</h5>
            <div class="card-body">
                <h6>{{  total   }}</h6>
            </div>
        </div>
    </div>
</template>
<script setup>
// Imports
import { ref, watch } from 'vue';
import { useCarritoStore } from '@/stores/carrito';
import { storeToRefs } from 'pinia';

// Store
const store = useCarritoStore();

// Data
const total = ref(0);
const { productos } = storeToRefs(store);

watch(productos, () =>{
    console.log("Se cambiaron los productos");
    // Se hace llamado a la API para calcular el total

},{ deep:true});

</script>