<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    public function mostrarGaleria()
    {
        return view('web.galeria.index');
    }
}