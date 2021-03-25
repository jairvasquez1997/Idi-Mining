<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Categoria;

class BarController extends Controller
{
    public function mostrarBar()
    {
        $categorias = Categoria::where('estado',1)->where('tipo','BAR')->get();
        return view('web.bar.index')->with('categorias',$categorias);
    }
    public function mostrarVinosPeruanos()
    {
        return view('web.bar.vinos_peruanos');
    }
    public function mostrarVinosArgentinos()
    {
        return view('web.bar.vinos_argentinos');
    }
    public function mostrarVinosChilenos()
    {
        return view('web.bar.vinos_chilenos');
    }
    public function mostrarVinosEspanoles()
    {
        return view('web.bar.vinos_espanoles');
    }
    public function mostrarSangrias()
    {
        return view('web.bar.sangrias');
    }
    public function mostrarAperitivos()
    {
        return view('web.bar.aperitivos');
    }
    public function mostrarRefrescantes()
    {
        return view('web.bar.refrescantes');
    }
    public function mostrarShots()
    {
        return view('web.bar.shots');
    }
    public function mostrarGaseosas()
    {
        return view('web.bar.gaseosas');
    }
    public function mostrarBebidas()
    {
        return view('web.bar.bebidas');
    }
    public function mostrarCervezas()
    {
        return view('web.bar.cervezas');
    }
}