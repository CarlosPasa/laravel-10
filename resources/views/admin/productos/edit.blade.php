@extends("_layouts.admin")
@section('contenido')
<div class="card">
    <div class="card-header">
        <strong>Producto</strong>
    </div>
    <div class="card-body">
        @include('_includes.admin._modules.errores')
        <form method="post" action="{{ action([\App\Http\Controllers\Backend\ProductoController::class,"update"], $producto) }}">
            @csrf
            <input type="hidden" name="_method" value="patch" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="nombre">Categoria</label>
                        <select class="form-control" name="categoria_id">
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" @if ($producto->categoria_id === $categoria->id)
                                    selected
                                @endif>{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" name="nombre" id="nombre" value="{{$producto->nombre}}" type="text" value="" placeholder="Ingrese un nombre">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Stock</label>
                        <input class="form-control" name="stock" id="stock" value="{{$producto->stock}}" type="text" value="" placeholder="Ingrese un stock">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Precio</label>
                        <input class="form-control" name="precio" id="precio" value="{{$producto->precio}}" type="text" value="" placeholder="Ingrese un precio">
                    </div>
                </div>
                <div class="col-sm-12">
                    <button class="btn btn-success" type="submit">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
