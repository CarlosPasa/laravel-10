<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //Agarra todos los elementos de la tabla
        //$categorias = Categoria::all();
        $categorias = Categoria::all();
        return view('home',[
            'categorias'=> $categorias,
        ]);
    }
}
