<?php

namespace App\Http\Controllers\web;

use App\Actualizacion;
use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str as Str;

class WebController extends Controller
{

    public function actualidades()
    {
        $items = Actualizacion::paginate(4);
        return view('web.actualidades', compact('items'));
    }
}
