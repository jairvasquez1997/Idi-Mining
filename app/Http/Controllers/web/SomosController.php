<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class SomosController extends Controller
{
    public function mostrarSomos()
    {
        return view('web.quienes_somos.index');
    }
}