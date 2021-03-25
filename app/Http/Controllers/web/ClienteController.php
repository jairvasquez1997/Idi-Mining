<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Pedido;
use App\Pedido_detalle;
use Auth;

class ClienteController extends Controller
{

    public function pedidos()
    {
    	$pedidos_detalle = Pedido_detalle::get();
        return view('web.clientes.pedidos');
    }
    public function getPedidos()
    {
    	$cliente_id = Auth::user()->cliente_id;
       	$items = Pedido::where('cliente_id',$cliente_id)->get();
       	$items->load('pedidoDetalle','pedidoDetalle.producto');
       	foreach ($items as $item){
           	foreach ($item->pedidoDetalle as $detalle){
               $detalle->subtotal = $detalle->price * $detalle->qty;
               $item->total += $detalle->subtotal;
           	}
       	}
       return response()->json($items);
    }
}