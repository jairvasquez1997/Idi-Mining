<?php

namespace App\Http\Controllers\admin;

use App\Equipo;
use App\Pedido;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PedidoController extends Controller
{
    public function viewPendiente()
    {
        return view('admin.pedido.pendiente');
    }

    public function viewEnviado()
    {
        return view('admin.pedido.enviado');
    }

    public function viewEntregado()
    {
        return view('admin.pedido.entregado');
    }

    public function getPedidos($estado)
    {
        if (auth()->user()->rol == 'admin'){
            $pedidos = Pedido::where('estado_pedido', $estado)->orderby('created_at', 'desc')->get();
        }else{
            $pedidos = Pedido::where('estado_pedido', $estado)->where('persona_id',auth()->user()->persona->id)->orderby('created_at', 'desc')->get();
        } 


        $pedidos->load('cliente', 'pedidoDetalle.producto', 'persona');

        

        


        foreach ($pedidos as $pedido) {

            $pedido->zona = DB::table('zonas')
     ->select('zonas.zona', 'zonas.precio')
     ->join('pedido', 'pedido.zona_id', '=', 'zonas.id')
     ->where('pedido.zona_id', $pedido->zona_id)
     ->get();

     

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
            $pedido->subtotal = number_format($pedido->subtotal, 2);
        }

        

        return response()->json($pedidos);
    }

    public function pedidoEnvio(Pedido $pedido, $repartidor_id)
    {

        try {
            DB::beginTransaction();

            $pedido->estado_pedido = 'ENVIADO';
            $pedido->persona_id = $repartidor_id;
            $pedido->save();

            DB::commit();
            
            $equipos = Equipo::where('rol','delivery')->get();
	
        	foreach($equipo as $equipos){
            	$token_dispositivo = $equipo->equipo_token;
    
                    $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
                    $token = $token_dispositivo;
                    //"eOvjkN0yKDE:APA91bFxb9BUXV4lC5V-EhuoV-rtO0MERZXzEte3AGpx7knruATFtUoYtrZhcRDA6_OaumyCWrL0L9OPZWWIoWdZSNSTT_pkvalAh1wu_Twn9HSkf9XjvpaOjpfNoQPGfLLHy9o1-Gj8";
                    $fields = array(
                        'to' => $token,
                        'notification' => array('title' => 'Estancia-Delivery', 'body' => 'nuevo pedido enviado'),
                        'data' => array('message' => '$message')
                    );
        
                    $headers = array(
                        'Authorization:key=AAAApzf1dxA:APA91bGfJVYpaKnP7G3QaUJBz5EB8sy9ICwyL_14oqqFZXRbprX4sldFUbbfbKXpi6QEMg-nrQNolh8pvI9cN99PXLByHL9H-RVHk-I_pqWozrTe5c5Hcu8oodaJZ4uh-AvKbSpLaQb_ ',
                        'Content-Type:application/json'
                    );
                
                    $ch = curl_init();
                                        
                    curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm); 
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 ); 
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                                    
                    $result = curl_exec($ch);
           
                    curl_close($ch);
	
        	}
            /*
            //filtrar por rol
            //$equipos = Equipo::where('rol','delivery');
            
            //encontrat token
            
            $equipo = Equipo::where('persona_id',$repartidor_id)->first();

            $token_dispositivo = $equipo->equipo_token;

            $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
            $token = $token_dispositivo;
            //"eOvjkN0yKDE:APA91bFxb9BUXV4lC5V-EhuoV-rtO0MERZXzEte3AGpx7knruATFtUoYtrZhcRDA6_OaumyCWrL0L9OPZWWIoWdZSNSTT_pkvalAh1wu_Twn9HSkf9XjvpaOjpfNoQPGfLLHy9o1-Gj8";
            $fields = array(
                'to' => $token,
                'notification' => array('title' => 'Estancia-Delivery', 'body' => 'nuevo pedido enviado'),
                'data' => array('message' => '$message')
            );

            $headers = array(
                'Authorization:key=AAAApzf1dxA:APA91bGfJVYpaKnP7G3QaUJBz5EB8sy9ICwyL_14oqqFZXRbprX4sldFUbbfbKXpi6QEMg-nrQNolh8pvI9cN99PXLByHL9H-RVHk-I_pqWozrTe5c5Hcu8oodaJZ4uh-AvKbSpLaQb_ ',
                'Content-Type:application/json'
            );
        
            $ch = curl_init();
                                    
            curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm); 
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 ); 
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                                
            $result = curl_exec($ch);
       
            curl_close($ch);*/
            
            return response()->json(true);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function pedidoEntregado(Pedido $pedido)
    {

        try {
            DB::beginTransaction();


            $pedido->estado_pedido = 'FINALIZADO';
            $pedido->estado_pago = 'PAGADO';
            $pedido->save();
            DB::commit();
            return response()->json(true);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
