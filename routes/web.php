<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
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
Route::get('/', [\App\Http\Controllers\HomeController::class,"index"]);
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
    Route::get('crear-categoria', [CategoriaController::class,"crearCategoria"]);
    Route::get('/', [CategoriaController::class,"index"]);
    Route::get('{nombreCategoria}', [CategoriaController::class,"categoria"]);    
});
//Nos devuelve todos los productos en formato JSON

Route::get('productos/{categoria?}', [ProductoController::class,"index"]);

