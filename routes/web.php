<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
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
});
//CATEGORIAS
Route::prefix('categorias')->group(function(){
    Route::prefix('ofertas')->group(function(){
        Route::get('ult-mes', function () {
            echo 'Categorias con ofertas del ultimo mes';
        });
        Route::get('ult-semana', function () {
            echo 'Categorias con ofertas del ultima semana';
        });
    });
    Route::get('/', function (Request $request) {
        //return view('welcome');
        //dd($request->all());
        dd($request);
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
        if(is_null($request->input('nombre'))){
            if(array_key_exists($request->input('nombre'),$categorias)){
                echo 'Existe Categoria';
            }
        }else{
            foreach($categorias as $nombreCategoria => $categoria){
                    echo $nombreCategoria.'<br>';
            }
        }           
    });
    Route::get('{nombreCategoria}', function (string $nombreCategoria) {
        echo 'Productos de '. $nombreCategoria;
    });
});
//Nos devuelve todos los productos en formato JSON

Route::get('productos/{categoria?}', function (?string $categoria = null) {    
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
});

