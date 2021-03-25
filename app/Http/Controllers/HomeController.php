<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cabecera;
use App\Titulo;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }


    public function perfil()
    {
        return view('admin.perfil');
    }



}
