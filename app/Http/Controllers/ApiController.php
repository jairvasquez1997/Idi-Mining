<?php

namespace App\Http\Controllers;

use App\User;
use App\Boleta;
use App\Categoria;
use App\Cliente;
use App\Costo;
use App\Events\EventPedido;
use App\Equipo;
use App\Factura;
use App\Pedido;
use App\Pedido_detalle;
use App\Producto;
use App\Zona;
use Illuminate\Http\Request;
use Carbon\Carbon;
Use Hash;
use Illuminate\Support\Facades\Input;
use DB;

class ApiController extends Controller
{
    public function buscaProductoAdmin($producto_id){
        $producto = Producto::find($producto_id);
        return response()->json($producto);
    }
    public function buscarZona($zona_id){
        $zona = Zona::where('id',$zona_id)->first();
        return response()->json($zona);
    }
    
    public function buscarCliente($cliente_id){
        
        $cliente = Cliente::where('id',$cliente_id)->first();
        return response()->json($cliente);
    }
    
    public function listarPedidos(){
        $mytime = Carbon::now();
        $fechaActual = $mytime->toDateString();
        $pedidos = Pedido::whereDate('created_at',$fechaActual)->orderBy('id','desc')->get();
        return response()->json($pedidos);
    }
    
    public function notificacion(){
        
        $equipos = Equipo::where('rol','admin')->get();
	        foreach($equipo as $equipos){
	            

                $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
                $token = $equipo->equipo_token;;
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
            return response()->json(true);
    }
    
    public function addEquipo(Request $request){
        try{
            $data = Input::all();
            //$data = $request->json()->all(); 
            DB::beginTransaction();
            
            $variable = $data["persona_id"];
            
            $existe = Equipo::where('persona_id',$variable)->first();
            
            if($existe == null){
                $equipo = new Equipo();
                $equipo->rol = $data["rol"];
                $equipo->persona_id = $data["persona_id"];
                $equipo->equipo_token = $data["equipo_token"];
                $equipo->save();     
            }else{
                $equipo = Equipo::where('persona_id',$variable)->first();
                $equipo->equipo_token = $data["equipo_token"];
                $equipo->save();    
            }
            
            DB::commit();
            return response()->json(true);
        }catch(\Exception $e){
            DB::rollBack();
            return $e->getMessage();
        }
    }
    
    public function pedidosAdmin(){
        $pedidos = Pedido::orderBy('id','desc')->get();
        return response()->json($pedidos);
    }
    
    public function factura(){
        $facturas = Factura::orderBy('id','asc')->get();
        return response()->json($facturas);
    }
    
    public function boleta(){
        
        $boletas = Boleta::orderBy('id','asc')->get();
        return response()->json($boletas);
    }
    public function atras($id){
        
        $pedido = Pedido::findOrFail($id);
        $persona_id = $pedido->persona_id;
        $usuario = User::where('id',$persona_id)->first();
        
        return response()->json($usuario);
        
    }
    public function users($username){
        try{
            $usuario = User::where('username',$username)->first();
            return response()->json($usuario);
        }catch(\Exception $e){
            DB::rollBack();
            return $e->getMessage();
        }
        
    }
    public function editarEstadoPedido($id){
        try{
            
            DB::beginTransaction();
            $pedido = Pedido::findOrFail($id);
            $pedido->estado_pedido = "FINALIZADO";
            $pedido->estado_pago = "PAGADO";
            $pedido->save();
            DB::commit();
            
            $persona_id = $pedido->persona_id;
            $usuario = User::where('id',$persona_id)->first();
            return response()->json( $usuario);
            
        }catch(\Exception $e){
            DB::rollBack();
            return $e->getMessage();
        }
    }
    
    public function listarProductos(){
        $productos = Producto::orderBy('id','asc')->get();
        return response()->json($productos);
    }
    public function seleccionaCliente(){
        $clientes = Cliente::orderBy('id','asc')->get();
        return response()->json($clientes);
    }
    
    public function mostrarZonas(){
        $zonas = Zona::orderBy('id','asc')->get();
        return response()->json($zonas);
    }
    
    public function mostrarDetalle($id){
        $detalle = Pedido_detalle::where('pedido_id', $id)->get();
        return response()->json($detalle);
    }
    
    public function mostrarUsuario(Request $request){
        
        $data = $request->json()->all();
        
        $email = $data['email'];
        $password = $data['password'];
        $respuesta = 'false';
        $usuario = User::where('username',$email)->first();
        if($usuario){
            if($password == '123456789'){
                $usuario->id_celular = $data['token'];
                $usuario->save();
                $respuesta = $usuario;
            }
        }
        
        
        return response()->json($respuesta);
    }
    
    public function mostrarPedido($persona_id){
        
        $pedidos = Pedido::where('persona_id',$persona_id)->get();
        return response()->json($pedidos);
    }

    public function mostrarCategoria()
    {
        return response()->json(Categoria::mostrarTodo());
    }


    public function mostrarProducto($id)
    {

        return response()->json(Producto::mostrarCategoria($id));
    }

    public function storeCliente(Request $request)
    {

        $data = $request->json()->all();
        try {
            DB::beginTransaction();

            if (!Cliente::clienteExist($data['userID'])) {
                $cliente = new Cliente();
                $cliente->userID = $data['userID'];
                $cliente->nombres = $data['nombre'];
                $cliente->apellidos = $data['apellidos'];
                $cliente->email = $data['email'];
                $cliente->save();
            }
            DB::commit();
            return response()->json(true);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function storePedido(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->json()->all();

            $pedido = new Pedido();
            $pedido->cliente_id = $data['cliente_id'];
            $pedido->direccion = $data['direccion'];
            $pedido->zona_id = $data['zona_id'];
            $pedido->referencia = $data['referencia'];
            $pedido->igv = $data['igv'];
            $pedido->total = $data['total'];
            $pedido->documento = $data['documento'];
            $pedido->tipo_pago = $data['tipo_pago'];
            $pedido->cuanto_pagar = $data['cuanto_pagar'];
            if ($pedido->tipo_pago == "TARJETA") {
                $pedido->estado_pago = "PAGADO";
            }
            $pedido->save();
            $carrito = $data['carrito'];
            if (count($carrito) > 0) {
                foreach ($carrito as $producto) {
                    $detalle = new Pedido_detalle();
                    $detalle->pedido_id = $pedido->id;
                    $detalle->producto_id = $producto['id'];
                    $detalle->cantidad = $producto['cantidad'];
                    $detalle->precio = $producto['precio'];
                    $detalle->save();
                }
            }
            
            event(new EventPedido());
            DB::commit();
            
            
            
            //enviar notificacion cuando llegue un pedido
            
            $apiKey = 'AAAAsP7pBq0:APA91bFN-LdeTc7KQD1OE496r33rGQxRPSyYr6A8z9Q4vYTP-e9G-J_sfjfoK-fIuvWiraozYo8Ymhn_EnTDF30p31vVtIA_3b16igdSf3QgklgxxqYAYgZqcxquxMKicHRh-Qo9TqaQ';
            $data = array(
                        'title' => 'Nuevo Pedido',
                        'body' => 'Tiene un nuevo pedido'
                    );
                    
            $usu = User::where('username','admin@pyrushd.com')->first();
            
            $token = $usu->id_celular;
            
            $fields = array(
                       'to' => $token,
                       'notification' => $data
                    );
                    
            $headers = array(
                        'Authorization: key='.$apiKey,
                        'Content-Type: application/json'
                    );
            
            $url = 'https://fcm.googleapis.com/fcm/send';
            
            $ch = curl_init();
            curl_setopt( $ch, CURLOPT_URL, $url);
            curl_setopt( $ch, CURLOPT_POST, true);
            curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            curl_close($ch);
           
            //*********************************************

            
            return response()->json($pedido);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

    }


    public function mostrarCliente($uid)
    {

        return response()->json(Cliente::mostrarCliente($uid));
    }


    public function allProducto()
    {
        return response()->json(Producto::get());
    }


    public function costoMinimo()
    {
        return response()->json(Costo::minimo()->precio);
    }


    public function zonas()
    {
        return response()->json(Zona::orderBy('zona','asc')->get());
    }

    public function getFactura($userID)
    {
        $cliente = Cliente::clienteExist($userID);

        return response()->json(Factura::where('cliente_id', $cliente->id)->first());
    }

    public function storeFactura(Request $request)
    {

        try {
            DB::beginTransaction();

            $data = $request->json()->all();

            $cliente = Cliente::find($data['cliente_id']);
            if ($cliente->factura) {
                $factura = Factura::find($cliente->factura->id);
                $factura->empresa = $data['empresa'];
                $factura->ruc = $data['ruc'];
                $factura->direccion = $data['direccion'];
                $factura->save();
            } else {
                $factura = new Factura();
                $factura->cliente_id = $cliente->id;
                $factura->empresa = $data['empresa'];
                $factura->ruc = $data['ruc'];
                $factura->direccion = $data['direccion'];
                $factura->save();
            }
            DB::commit();
            return response()->json(true);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

    }

    public function updateCliente(Request $request)
    {
        try {
            $data = $request->json()->all();
            $cliente = Cliente::find($data['id']);
            $cliente->nombres = $data['nombre'];
            $cliente->apellidos = $data['apellidos'];
            $cliente->email = $data['email'];
            $cliente->celular = $data['celular'];
            $cliente->save();

            if ($cliente->boleta) {
                $boleta = Boleta::find($cliente->boleta->id);
                $boleta->direccion = $data['direccion'];
                $boleta->dni = $data['dni'];
                $boleta->save();
            } else {
                $boleta = new Boleta();
                $boleta->cliente_id = $cliente->id;
                $boleta->direccion = $data['direccion'];
                $boleta->dni = $data['dni'];
                $boleta->save();
            }

            DB::commit();
            return response()->json(true);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

    }
    
    public function updatePedido(Request $request)
    {
        try {
            $data = $request->json()->all();
            $pedido = Pedido::find($data['id']);
            $pedido->estado_tarjeta = 1;
            $pedido->culqi_cargo_id = $data['cargo_id'];
            $pedido->update();

            DB::commit();
            return response()->json(true);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }

    }
}
