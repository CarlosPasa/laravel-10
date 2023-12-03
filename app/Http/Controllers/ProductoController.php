<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(?string $categoria = null){
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
        foreach($categorias as $categoriaArrays){
            foreach($categoriaArrays as $producto){
                $productos[]= $producto;
            }
        }
        return view('productos',[
            'productos'=> $productos
        ]);
    }
}
