<template>
	<form>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="exampleRadios" value="Envío a domicilio" checked
				@change="store.editarMetodoDeEnvio($event)">
			<label class="form-check-label" for="exampleRadios1">
				Envío a domicilio
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="exampleRadios" value="Retiro en sucursal"
				@change="store.editarMetodoDeEnvio($event)">
			<label class="form-check-label" for="exampleRadios2">
				Retiro en sucursal
			</label>
		</div>

		<div
			v-show="store.metodo_de_envio !== 'Retiro en sucursal'">
			<div class="form-group mt-3">
				<label for="exampleFormControlInput1">Dirección</label>
				<input type="text" class="form-control" placeholder="Calle Falsa 123" autocomplete="off"
					@change="store.editarDireccion($event.target.value)">
			</div>
			<div class="form-group mt-3">
				<label for="exampleFormControlInput1">Código postal</label>
				<input type="text" class="form-control" placeholder="1111" autocomplete="off"
					@change="store.editarCodigoPostal($event.target.value)">
			</div>
			<div class="form-group mt-3">
				<label>Localidad</label>
				<input type="text" class="form-control" placeholder="Piura" autocomplete="off"
					@change="store.editarLocalidad($event.target.value)">
			</div>
			<div class="form-group mt-3">
				<label for="exampleFormControlInput1">Provincia</label>
				<input type="text" class="form-control" placeholder="Piura" autocomplete="off"
					@change="store.editarProvincia($event.target.value)">
			</div>
			<div class="form-group mt-3">
				<label for="exampleFormControlInput1">País</label>
				<input type="text" class="form-control" placeholder="Peru" autocomplete="off"
					@change="store.editarPais($event.target.value)">
			</div>
		</div>

	</form>
</template>

<script setup>
// Imports
import {useProcesoDeCompraStore} from "@/stores/proceso_de_compra";

// Store
const store = useProcesoDeCompraStore();

</script>

<style scoped>

</style>