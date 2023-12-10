<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request){
        //return view('welcome');
        //dd($request->all());
        //dd($request);
        $nombre = $request->input('nombre');
        if(!is_null($nombre)){
            $categorias = Categoria::where('nombre','LIKE','%'.$nombre.'%')
                ->get();
        }else{
            $categorias = Categoria::orderBy('nombre','desc')
                ->get();
        }

        return view('home',[
            'categorias'=> $categorias,
        ]);
    }

    public function categoria(string $nombreCategoria){
        echo 'Productos de '. $nombreCategoria;
    }

    public function crearCategoria(){
        $categoria = new Categoria();
        $categoria->nombre="Lacteos";
        $categoria->save();
    }
}
