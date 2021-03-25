<?php

namespace App\Http\Controllers\admin;

use App\CategoriaWeb;
use App\ProductoWeb;
use App\Util\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoWebController extends Controller
{
    public function mostrar()
    {
        $productosweb=ProductoWeb::all();
        $productosweb->load('categoriaWeb');
        return view('admin.web.producto-web.index')
            ->with('productosweb',$productosweb);
    }

    public function create()
    {
        $categoriasweb=CategoriaWeb::where('estado',1)->get();
        return view('admin.web.producto-web.create')
            ->with('categoriasweb',$categoriasweb );
    }

    public function store(Request $request)
    {
        try {
            $productoweb = new ProductoWeb($request->all());
            $productoweb->save();
        } catch (\Exception $e) {
            Mensaje::flashCreateErrorImportant();
            return redirect()->back();
        }
        return redirect()->route('productoweb.mostrar');   
    }
}
