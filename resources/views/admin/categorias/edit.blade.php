@extends("_layouts.admin")
@section('contenido')
<div class="card">
    <div class="card-header">
        <strong>Categoria</strong>
    </div>
    <div class="card-body">
        <form method="post" action="{{ action([\App\Http\Controllers\Backend\CategoriaController::class,"update"], $categoria) }}">
            @csrf
            <input type="hidden" name="_method" value="patch" />
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" name="nombre" id="nombre" type="text" value="{{$categoria->nombre}}" placeholder="Ingrese un nombre">
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
