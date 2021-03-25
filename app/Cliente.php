<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'id',
        'userID',
        'nombres',
        'apellidos',
        'dni',
        'email',
        'celular',
    ];

    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }

    public static function clienteExist($userID)
    {
        $cliente = Cliente::where('userID', $userID)->first();
        return $cliente;

    }

    public static function mostrarCliente($uid)
    {

        $cliente = Cliente::where('userID', $uid)->first();
        if ( $cliente->boleta) {
            $cliente->dni = $cliente->boleta->dni;
            $cliente->direccion = $cliente->boleta->direccion;
        }else{
            $cliente->dni = null;
            $cliente->direccion = null;
            $cliente->celular = null;
        }

        if($cliente->factura){
            $cliente->empresa = $cliente->factura->empresa;
            $cliente->ruc = $cliente->factura->ruc;
            $cliente->direccion_empresa = $cliente->factura->direccion;
        }else{
            $cliente->empresa = null;
            $cliente->ruc = null;
            $cliente->direccion_empresa = null;
        }


        return $cliente;
    }

    public function boleta()
    {
        return $this->hasOne(Boleta::class);
    }
    public function factura()
    {
        return $this->hasOne(Factura::class);
    }
}
