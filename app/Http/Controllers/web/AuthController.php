<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Persona;
use App\Cliente;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use AuthenticatesUsers;
/*

    protected function redirectPath()
    {
        if (Cart::content()->count() > 0) {
            return '/pedido';
        } else {
            return '/cliente/pedidos';
        }
    }
*/
    protected $redirectTo = '/cliente/pedidos';

    protected function redirectPath()
    {
        if (Cart::content()->count() > 0) {
            return '/carrito2';
        } else {
            return '/cliente/pedidos';
        }
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        if (Auth::guest())
            return view('web.auth.login');
        else{
            return redirect()->route('cliente.pedidos');
        }
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required',
            'email' => 'required|email',
            'celular' => 'required',
        ]);
        //try {
//            DB::beginTransaction();
            /*
            $persona = new Persona($request->all());
            $persona->save();
            */
            $cliente = new Cliente();
            $cliente->nombres = $request->nombres;
            $cliente->apellidos = $request->apellidos;
            $cliente->dni = $request->dni;
            $cliente->email = $request->email;
            $cliente->celular = $request->celular;
            $cliente->save();

            $user = new User();
            
            $user->rol = 'cliente';
            $user->username = $request->email;
            $user->password = Hash::make($request->password);
            $user->cliente_id = $cliente->id;
            $user->save();

            return redirect()->route('web.login');


            $data = [
                'username' => $user->username,
                'password' => $request->password,
            ];

            if (Auth::attempt($data)) {
                //return redirect()->route('order');
            } else {
                return redirect()->back();
            }
//            DB::commit();*/
            
        /*} catch (\Exception $e) {
//            DB::rollBack();
            return redirect()->back();
        }*/

    }
    public function logout()
    {
        $this->guard()->logout();
        return redirect()->route('/');
    }
}