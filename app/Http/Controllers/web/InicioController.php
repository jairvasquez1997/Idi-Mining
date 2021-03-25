<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Producto;
use App\Categoria;

class InicioController extends Controller
{
    public function mostrarInicio()
    {

        $productos = Producto::where('categoria_id',26)->get();
        $categorias = Categoria::where('id',26)->first();
        return view('web.home.index',
    				['productos' => $productos, 
                    'categorias' => $categorias]);
    }
}