@extends('_layouts.layout')

@section('librerias')
    @vite('resources/js/ver_producto.js')
@endsection

@section('main')
    <!--h3>PRODUCTO {{ $producto->nombre }}</h3-->
    <div id="ver_producto" data-id="{{ $producto->id }}">
    </div>
@endsection