<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request){
        //return view('welcome');
        //dd($request->all());
        //dd($request);
        $categorias = [
            'Fideos'=>[
                'Fideos largos',
                'cabello de angel'
            ],
            'Verduras'=>[
                'Tomates',
                'Lechuga'
            ]
        ];
        if(!is_null($request->input('nombre'))){
            if(array_key_exists($request->input('nombre'),$categorias)){
                echo 'Existe Categoria';
            }
        }else{
            foreach($categorias as $nombreCategoria => $categoria){
                    echo $nombreCategoria.'<br>';
            }
        }
    }

    public function categoria(string $nombreCategoria){
        echo 'Productos de '. $nombreCategoria;
    }
}
