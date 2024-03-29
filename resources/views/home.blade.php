@extends('_layouts.layout')
@section('main')
    <h1>HOME</h1>
    <h3>CATEGORIAS</h3>
    <div class="container">
        <div class="row">
            @foreach($categorias as $categoria)
            <div class="col-12 col-sm-4">
                <h4>{{$categoria->nombre}}</h4>
            </div>
            <div class="col-12">
                <div class="row mt-5 mb-5">
                    @foreach($categoria->productos as $producto)
                    <div class="col-12 col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <h6>{{ $producto->categoria->nombre }}</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ action([\App\Http\Controllers\ProductoController::class, 'verProducto'], [$categoria, $producto]) }}" class="btn btn-primary">IR AL PRODUCTO</a>
                            </div>
                        </div>
            </div>
                    @endforeach
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
    {{--@include('_includes.productos')--}}

@endsection('main')