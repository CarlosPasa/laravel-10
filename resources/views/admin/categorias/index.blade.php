@extends("_layouts.admin")
@section('contenido')
<div class="card">
    <div class="card-body">
        @include('_includes.admin._modules.success')
        <table class="table table-responsive-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ action([\App\Http\Controllers\Backend\CategoriaController::class,"edit"], $categoria->id) }}" class="mr-3">
                                    <button class="btn btn-info" type="button">Editar</button>
                                </a>
                                <form method="post" action="{{ action([\App\Http\Controllers\Backend\CategoriaController::class, 'destroy'], $categoria) }}" onclick="return confirm('Está seguro que desea eliminar este elemento?')">
    
                                    @csrf    
                                    <input type="hidden" name="_method" value="delete" />    
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </div>                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
