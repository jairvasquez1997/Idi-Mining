<?php

namespace App\Http\Controllers\admin;

use App\Equipo;
use App\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Culqi\Culqi;

class PagosController extends Controller
{
    public function viewPagos()
    {
        return view('admin.pagos.index');
    }

    public function getPagos($estado)
    {
    	$SECRET_KEY = "sk_live_pO5o2Rhl6kyv1MyX";  
    	//$SECRET_KEY = "sk_test_xwkHomTsCZT4dig7";
        $culqi = new Culqi(array('api_key' => $SECRET_KEY));

        $pedidos = Pedido::where('tipo_pago', $estado)->orderby('created_at', 'desc')->get();
        $pedidos->load('zona', 'cliente', 'pedidoDetalle.producto', 'persona');

        foreach ($pedidos as $pedido) {

            foreach ($pedido->pedidoDetalle as $detalle) {
                $pedido->subtotal += ($detalle->precio * $detalle->cantidad);
            }

            if ($pedido->documento == "BOLETA") {
                if ($pedido->cliente->boleta) {
                    $pedido->dni = $pedido->cliente->boleta->dni;
                    $pedido->direccion_actual = $pedido->cliente->boleta->direccion;
                } else {
                    $pedido->dni = '';
                    $pedido->direccion_actual = '';

                }
                $pedido->empresa = '';
                $pedido->ruc = '';
                $pedido->direccion_empresa = '';

            } else {
                if ($pedido->cliente->factura) {
                    $pedido->empresa = $pedido->cliente->factura->empresa;
                    $pedido->ruc = $pedido->cliente->factura->ruc;
                    $pedido->direccion_empresa = $pedido->cliente->factura->direccion;
                } else {

                    $pedido->empresa = '';
                    $pedido->ruc = '';
                    $pedido->direccion_empresa = '';
                }
                $pedido->dni = '';
                $pedido->direccion_actual = '';

            }

            if ($pedido->culqi_cargo_id){

                $transaccion= $culqi->Charges->get($pedido->culqi_cargo_id);

                if ($transaccion->outcome->type == 'venta_exitosa'){
                    $estado='EXITOSA';
                }
                else
                {
                    $estado='RECHAZADA';
                }
                $pedido->transaccion = array(
                    'created' => $transaccion->creation_date,
                    'marca' => $transaccion->source->iin->card_brand,
                    'tarjeta' => $transaccion->source->card_number,
                    'estado' => $estado,
                );
            }
            else
            {
                $pedido->transaccion = array(
                    'created' => '',
                    'marca' => '',
                    'tarjeta' => '',
                    'estado' => '',
                );
            }

            $pedido->subtotal = number_format($pedido->subtotal, 2);
        }
        

        return response()->json($pedidos);
    }
}