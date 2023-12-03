<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categorias = [
            'Fideos'=>[
                'Fideos largos',
                'Cabello de angel'
            ],
            'Verduras'=>[
                'Tomates',
                'Lechuga'
            ]
        ];
        $productos = [];
        $nombreCategorias=[];
        foreach($categorias as $nombreCategoria => $categoriaArray){
            $nombreCategorias[]=$nombreCategoria;
            foreach($categoriaArray as $producto){
                $productos[]=$producto;
            }
        }
        return view('home',[
            'productos'=> $productos,
            'categorias'=> $nombreCategorias,
        ]);
    }
}
