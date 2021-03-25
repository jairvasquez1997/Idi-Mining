<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Categoria;
use App\Producto;

class CartaController extends Controller
{
    public function mostrarCarta()
    {
        $productos = Producto::all();
        return view('web.tienda')->with('productos',$productos);
    }
    public function mostrarMenu()
    {
        return view('web.nuestra_carta.menu');
    }
    public function mostrarPiqueos()
    {
        return view('web.nuestra_carta.piqueos');
    }
    public function mostrarCarnes()
    {
        return view('web.nuestra_carta.carnes');
    }
    public function mostrarParrillas()
    {
        return view('web.nuestra_carta.parrillas');
    }
    public function mostrarCerdo()
    {
        return view('web.nuestra_carta.cerdo');
    }
    public function mostrarAngus()
    {
        return view('web.nuestra_carta.angus');
    }
    public function mostrarPollos()
    {
        return view('web.nuestra_carta.pollos');
    }
    public function mostrarKids()
    {
        return view('web.nuestra_carta.kids');
    }
    public function mostrarGuarniciones()
    {
        return view('web.nuestra_carta.guarniciones');
    }
}