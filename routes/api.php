<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('productos',function(){
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
    $productos=[];
    foreach($categorias as $categoriaArray){
        foreach($categoriaArray as $producto){
            $productos[]=$producto;
        }
    }
    //return Response::json($productos);
    return new JsonResponse($productos);
});