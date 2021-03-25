<?php

namespace App\Http\Controllers\admin;

use App\Categoria;
use App\SubCategoriaWeb;
use App\Util\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{

    public function index()
    {
        return view('admin.categoria.index')
            ->with(['categorias' => Categoria::mostrarTodo()]);
    }
    public function getData()
    {
       return response()->json(Categoria::where('estado',1)->get());
       
    }

    public function create()
    {
        return view('admin.categoria.create');
    }

    public function show()
    {
        
    }


    public function store(Request $request)
    {
        try {
            $categoria = new Categoria();
            $categoria->nombre = $request->nombre;
            

            $categoria->save();
            Mensaje::flashCreateSuccessImportant();
        } catch (\Exception $e) {
            Mensaje::flashCreateErrorImportant();
            return redirect()->back();
        }
        return redirect()->route('categoria.index');
    }


    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.categoria.edit')
            ->with(['categoria' => $categoria]);
    }

    public function update(Request $request, $id)
    {
        try {
            $categoria = Categoria::find($id);
            $categoria->nombre = $request->nombre;
            $categoria->save();
            Mensaje::flashUpdateSuccessImportant();
        } catch (\Exception $e) {
            Mensaje::flashUpdateErrorImportant();
            return redirect()->back();
        }
        return redirect()->route('categoria.index');
    }

    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $categoria->estado = 0;
        $categoria->save();

        return redirect()->route('categoria.index');
    }
    
}
