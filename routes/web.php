<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoriaController as BackendCategoriaController;
use App\Http\Controllers\Backend\ProductoController as BackendProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
// HOME
Route::get('/', [HomeController::class, 'index']);

// PRODUCTOS
Route::prefix('productos')->group(function() {

    Route::prefix('{categoria}')->group(function() {

        Route::get('/', [ProductoController::class, 'categoria']);
        Route::get('{producto}', [ProductoController::class, 'verProducto']);
    });
});

// CARRITO
Route::get('carrito', [CarritoController::class,'carrito']);

/* ADMIN */
Route::prefix('admin')->group(function () {
    Route::middleware('admin-logeado:0')->group(function (){
        Route::get('login',[AdminController::class, "login"]);
        Route::post('login', [AdminController::class, 'loguear']);
    });

    // Middleware para el logeo
    Route::middleware('admin-logeado:1')->group(function (){
        Route::get('/',[AdminController::class, "home"]);
        Route::get('logout',[AdminController::class, "logout"]);
        //Categorias
        Route::resource('categorias',BackendCategoriaController::class);
        //Productos
        Route::resource('productos',BackendProductoController::class);
    });
});

Route::get('crear-usuario', function () {
    $user = new User();
    $user->name='Carlos';
    $user->email='capo@gmail.com';
    $user->password=Hash::make('123456');
    $user->save();
});
