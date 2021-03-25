<?php

namespace App\Http\Controllers\admin;

use App\Models\Actualizacion;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str as Str;

class ActualizacionController extends Controller
{

    public function index()
    {
        $actualizaciones = Actualizacion::get();
        return view('admin.actualizacion.index', compact('actualizaciones'));
    }

    public function create()
    {
        return view('admin.actualizacion.create');
    }

    public function store(Request $request)
    {
        try {

            Actualizacion::create($request->all());
            return redirect()->route('actualizaciones.index');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $actualizacion = Actualizacion::find($id);

        return view('admin.actualizacion.edit', compact('actualizacion'));
    }

    public function update(Request $request, $id)
    {

        try {
            $actualizacion = Actualizacion::find($id);
            $actualizacion->title = $request->title;
            $actualizacion->description = $request->description;
            if ($request->file('imagen')) {
                $actualizacion->uploadImage(request()->file('image'));
            }
            if ($request->file('pdf')) {
                $actualizacion->uploadFile(request()->file('pdf'));
            }
            $actualizacion->save();
            return redirect()->route('actualizaciones.index');
        } catch (\Exception $e) {
            return redirect()->back();
        }

    }

    public function delete($id)
    {

        try {
            $actualizacion = Actualizacion::find($id);
            $actualizacion->delete();

            return redirect()->route('actualizaciones.index');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
