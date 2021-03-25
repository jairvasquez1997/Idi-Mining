<?php

namespace App\Http\Controllers\web;

use Auth;
use App\User;
use App\Persona;
use App\Cliente;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class SocialAuthController extends Controller
{
    //
    // Metodo encargado de la redireccion a Facebook
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->fields([
        'first_name', 'last_name', 'email', 'gender', 'birthday'
    ])->scopes([
        'email', 'user_birthday'
    ])->redirect();
    }
    
    // Metodo encargado de obtener la información del usuario
    public function handleProviderCallback($provider)
    {
        // Obtenemos los datos del usuario
        $social_user = Socialite::driver($provider)->fields([
        'name', 'email', 'gender', 'verified', 'first_name', 'last_name'
        ])->stateless()->user();
        // Comprobamos si el usuario ya existe
        //dd($social_user);
        //return ($social_user->getAvatar());
        $usua = $social_user->user;
        $nombap = $usua['first_name'];
        $nombap2 = $usua['last_name'];
    
        if ($cliente = Cliente::where('email', $social_user->email)->first()) { 
            if ($usuario = User::where('username', $social_user->email)->first()){
                return $this->authAndRedirect($usuario);
            }
            else{
                $user =  new User();
                $user->username = $social_user->email;
                $user->rol = 'cliente';
                $user->cliente_id = $cliente->id;
                $user->save();
                return $this->authAndRedirect($user);
            }
        }
        else if ($usuario = User::where('username', $social_user->email)->first()) {
                if ($cliente = Cliente::where('email', $social_user->email)->first()) {
                    return $this->authAndRedirect($usuario);
                }
                else{
                    $client =  new Cliente();
                    $cliente->nombres = $nombap;
                    $cliente->apellidos = $nombap2;
                    $cliente->email = $social_user->email;
                    $cliente->userID = $social_user->id;
                    //dd($cliente);
                    $cliente->save();
                    $usuario->cliente_id = $client->id;
                    $usuario->save(); 
                    return $this->authAndRedirect($usuario);
                }
        }
        else{
            $clie =  new Cliente();
            $clie->nombres = $nombap;
            $clie->apellidos = $nombap2;
            $clie->email = $social_user->email;
            $clie->userID = $social_user->id;
            //dd($cliente);
            $clie->save();

            $us =  new User();
            $us->username = $social_user->email;
            $us->rol = 'cliente';
            $us->cliente_id = $clie->id;
            $us->save(); 
            return $this->authAndRedirect($us);
        }
    }
 
    // Login y redirección

    public function authAndRedirect($user)
    {
        Auth::login($user);
        //return redirect()->route('/');

        if (Cart::content()->count() > 0) {
            return redirect()->route('carrito2.mostrar');
        } else {
            return redirect()->route('cliente.pedidos');
        }
        /*
        //$cart= \Session::get('cart');

        Auth::login($user);
 
        if ($cart == null) {
            return redirect()->route('/');
        }else{
            return redirect()->route('pedido_detalle'); 
        }

        //return redirect()->route('pedido_detalle');
        //return redirect()->to('/home#');
        */
    }

}
