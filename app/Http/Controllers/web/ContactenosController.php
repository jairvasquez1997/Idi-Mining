<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class ContactenosController extends Controller
{
    public function mostrarContactenos()
    {
        return view('web.contactenos.index');
    }
}