<template>
    <div>
        <form>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" value="Envio a domicilio"
                @change="store.editarMetodoDeEnvio($event)" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Envio a domicilio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" value="Envio a sucursal"
                @change="store.editarMetodoDeEnvio($event)" >
                <label class="form-check-label" for="exampleRadios2">
                    Retiro a sucursal
                </label>
            </div>
            <div v-show="store.metodo_de_envio ==='Envio a domicilio'">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Direccion</label>
                    <input type="text" class="form-control" autocomplete="off" @change="store.editarDireccion($event.target.value)">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Codigo Postal</label>
                    <input type="text" class="form-control" autocomplete="off" @change="store.editarCodigoPostal($event.target.value)">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Localidad</label>
                    <input type="email" class="form-control" autocomplete="off" @change="store.editarLocalidad($event.target.value)">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Provincia</label>
                    <input type="text" class="form-control" autocomplete="off" @change="store.editarProvincia($event.target.value)">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pais</label>
                    <input type="text" class="form-control" autocomplete="off" @change="store.editarPais($event.target.value)">
                </div>
            </div>            
        </form>
    </div>
</template>
<script setup>
import { useProcesoDeCompraStore } from '../../stores/proceso_de_compra';

const store = useProcesoDeCompraStore();
</script>
<style scoped>
    
</style>