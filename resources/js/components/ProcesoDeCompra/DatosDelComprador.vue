<template>
    <div class="row">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" class="form-control" autocomplete="off" @change="store.editarNombre($event.target.value)">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" class="form-control" autocomplete="off" @change="store.editarApellido($event.target.value)">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" autocomplete="off" @change="store.editarEmail($event.target.value)">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Teléfono</label>
                <input type="text" class="form-control" autocomplete="off" @change="store.editarTelefono($event.target.value)">
            </div>
        </form>
    </div>
</template>
<script setup>
// Imports
import { useProcesoDeCompraStore } from '@/stores/proceso_de_compra';

// Store
const store = useProcesoDeCompraStore();

</script>
<style scoped>
    
</style>