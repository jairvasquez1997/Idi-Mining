<?php

namespace App\Http\Controllers\admin;

use App\Zona;
use App\Util\Mensaje;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ZonasController extends Controller
{

    public function view()
    {
        return view('admin.zonas.index');
    }

    public function index()
    {
        
        $zona = DB::table('zonas')->orderBy('id', 'DESC')->get();
        return response()->json($zona);
    }



    public function store(Request $request)
    {
        
        try {
            $zona = new Zona();
            $zona->zona= $request->zona;
            $zona->precio = $request->precio;
            $zona->save();
            return Response()->json(true);
        } catch (\Exception $e) {

            return Response()->json(false);
        }

    }


    public function update(Request $request, $id)
    {
        
        

    try {
        DB::table('zonas')
    ->where('id', $id)
    ->update(['zona' => $request->zona, 'precio' => $request->precio]);
        return Response()->json(true);
    } catch (\Exception $e) {

        return Response()->json(false);
    }

    }

    public function destroy($id)
    {

        
        
        $zona = DB::table('zonas')
     ->select('zonas.zona', 'zonas.precio')
     ->join('pedido', 'pedido.zona_id', '=', 'zonas.id')
     ->where('pedido.zona_id', $id)
     ->get();
     
        
        try {
            if (count($zona) > 0){
                return response()->json(false);
            }else{
                DB::table('zonas')->where('id', $id)->delete();
                return response()->json(true);
            }

        } catch (QueryException $e) {
            return response()->json(false);
        }
    }
}
