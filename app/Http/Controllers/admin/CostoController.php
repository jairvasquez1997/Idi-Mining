<?php

namespace App\Http\Controllers\admin;

use App\Costo;
use App\Util\Mensaje;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CostoController extends Controller
{

    public function index()
    {
        return Response()->json(Costo::minimo());
    }


    public function store(Request $request)
    {
        try {
            $costo = Costo::find($request->id);
            $costo->precio = $request->precio;
            $costo->save();
            return response()->json(true);
        } catch (\Exception $e) {
            return response()->json(false);
        }

    }


}
