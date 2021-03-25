<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
	public function add(Request $request)
    {
    	try{
        $producto = Producto::find($request->id);
        $precio = $producto->precio;
        $cartItem = $this->search($producto->id);
        if (empty($cartItem)) {
                $cart = Cart::add($producto->id, $producto->nombre, $request->qty, $precio);
                $cart->associate($producto);
            } else {
                Cart::update($cartItem->rowId, $request->qty);
            }
            return Response()->json(true);
        } catch (\Exception $e) {
            return Response()->json(false);
        }
    }

    
    public function search($id)
    {
        $cartItem = Cart::search(function ($cartItem) use ($id) {
            return $cartItem->id == $id;
        })->first();

        return $cartItem;
    }
    public function content()
    {
        $carts = new Collection;
        foreach (Cart::content() as $cart) {
            $producto = Producto::find($cart->model->id);
            $producto->rowId = $cart->rowId;
            $producto->qty = $cart->qty;
            $producto->price = number_format($cart->price, 2, '.', '');
            $producto->subtotal = number_format($cart->subtotal, 2, '.', '');
            $carts->add($producto);
            //dd($carts);
        }
        return response()->json(['carts' => $carts, 'total' => Cart::subtotal()]);
    }

    public function update(Request $request)
    {
        try {
            Cart::update($request->rowId, $request->qty);
            return Response()->json(true);
        } catch (\Exception $e) {
            return Response()->json(false);
        }
    }

    public function remove($rowId)
    {
        try {
            Cart::remove($rowId);
            return Response()->json(true);
        } catch (\Exception $e) {
            return Response()->json(false);
        }
    }

    public function mostrarCarrito()
    {
        return view('web.carrito.index');
    }
    
    public function mostrarCarrito2()
    {
        if (Auth::guest())
            return redirect()->route('web.login');
        else{
            if (Cart::content()->count() > 0) 
            {
                return view('web.carrito.carrito2');
            } else {
                return redirect()->route('cliente.pedidos');
            }
        }
        
    }
    public function agregarProductos($idProducto)
    {
        return view('web.carrito.index')->with($idProducto,'idProducto');
    }
}