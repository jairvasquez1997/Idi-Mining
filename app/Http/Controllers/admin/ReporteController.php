<?php

namespace App\Http\Controllers\admin;

use App\Boleta;
use App\Factura;
use App\Pedido;
use App\Persona;
use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReporteController extends Controller
{
    public function reporte()
    {
        return view('admin.reporte.index');
    }

    public function filtrarReporteEmpleados($date)
    {
        try {
            $ano = substr("$date", 0, 4);
            $mes = substr("$date", 5, 2);
            $personas = Persona::join('users', 'users.persona_id', 'personas.id')
                ->where('users.rol', 'delivery')
                ->select('personas.id', 'personas.nombres', 'personas.apellidos')
                ->get();
            $pedidos_count = array();
            $empleados = array();

            foreach ($personas as $i => $persona) {
                $numero = Pedido::where('persona_id', $persona->id)
                    ->whereYear('created_at', $ano)
                    ->whereMonth('created_at', $mes)
                    ->count();
                array_push($empleados, $persona->nombres . ' ' . $persona->apellidos);
                array_push($pedidos_count, $numero);
            }
            return response()->json(array('empleados' => $empleados, 'n_pedidos' => $pedidos_count));

        } catch (QueryException $e) {
            return response()->json(false);
        }

    }

    public function filtrarReporteMensual($date)
    {
        try {
            $ano = substr("$date", 0, 4);

            $pedidos_count = array();
            for ($i = 0; $i < 12; $i++) {
                $numero = Pedido::whereYear('created_at', $ano)
                    ->whereMonth('created_at', "0".$i+1)
                    ->count();
                array_push($pedidos_count, $numero);
            }
            return response()->json($pedidos_count);

        } catch (QueryException $e) {
            return response()->json(false);
        }

    }

    public function reporteCliente()
    {
        return view('admin.reporte.cliente');
    }

    public function getClientes()
    {
        $clientes = Cliente::get();
        return response()->json($clientes);
       

    }

}
