<?php

namespace App\Http\Controllers\admin;

use App\Persona;
use App\User;
use App\Util\Mensaje;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{
    public function view()
    {
        return view('admin.empleados.index');
    }

    public function index()
    {
        return Response()->json(Persona::mostrarTodos());
    }


    public function create()
    {
        return view('admin.categoria.create');
    }


    public function store(Request $request)
    {
        try {
            $persona = new Persona();
            $persona->dni = $request->dni;
            $persona->nombres = $request->nombres;
            $persona->apellidos = $request->apellidos;
            $persona->celular = $request->celular;
            $persona->save();

            $user = new User();
            $user->persona_id = $persona->id;
            $user->rol = 'delivery';
            $user->username = $persona->dni;
            $user->password = Hash::make($persona->dni);
            $user->save();

            return Response()->json(true);
        } catch (\Exception $e) {
            return Response()->json(false);
        }

    }


    public function update(Request $request, $id)
    {
        try {
            $persona = Persona::find($id);
            $persona->nombres = $request->nombres;
            $persona->apellidos = $request->apellidos;
            $persona->celular = $request->celular;
            $persona->save();

            return Response()->json(true);
        } catch (\Exception $e) {
            return Response()->json(false);
        }
    }

    public function destroy($id)
    {
        try {
            $persona = Persona::find($id);
            $persona->delete();
            return response()->json(true);


        } catch (QueryException $e) {
            return response()->json(false);
        }
    }

    public function getDataRepartidores()
    {
       return Persona::join('users','personas.id','users.persona_id')->select('personas.*')->where('users.rol','delivery')->get();
    }
}
