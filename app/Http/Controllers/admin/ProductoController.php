<?php

namespace App\Http\Controllers\admin;

use App\Categoria;
use App\Producto;
use App\Util\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{

    public function index()
    {
        return view('admin.producto.index')
            ->with(['productos' => Producto::get()]);
    }


    public function create()
    {

        return view('admin.producto.create')
            ->with(['categorias' => Categoria::get()]);
    }

    public function show()
    {
        
    }


    public function nuevo(Request $request)
    {

        try {
            $producto = new Producto();
            $producto->categoria_id = $request->categoria_id;
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->precio = $request->precio;
            if ($request->file('imagen')) {
                $file = $request->file('imagen');
                $name = 'producto_' . time() . rand(1, 200) . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/images/producto/';

                $file->move($path, $name);
                $producto->imagen = $name;

            }
            $producto->save();
            Mensaje::flashCreateSuccessImportant();
        } catch (\Exception $e) {
            Mensaje::flashCreateErrorImportant();
            return redirect()->back();
        }
        
            
        return redirect()->route('producto.index');
        
    }


    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('admin.producto.edit')
            ->with(['producto' => $producto])
            ->with(['categorias' => Categoria::mostrarTodo()->pluck('nombre','id')]);
    }


    public function update(Request $request, $id)
    {
        try {
            $producto = Producto::find($id);
            $producto->categoria_id = $request->categoria_id;
            $producto->nombre = $request->nombre;
            $producto->precio = $request->precio;
            $producto->descripcion = $request->descripcion;
            if ($request->file('imagen')) {
                $file = $request->file('imagen');
                $name = 'producto_' . time() . rand(1, 200) . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/images/producto/';

                $file->move($path, $name);
                if ($producto->imagen){
                    if(file_exists( $path.$producto->imagen)){
                        unlink($path.$producto->imagen);
                    }
                }
                $producto->imagen = $name;
            }

            $producto->save();
            flash('El producto fue editado correctamente')->success()->important();
        } catch (\Exception $e) {
            flash('No se pudo editar el producto')->error()->important();
      
            return redirect()->back();
        }
        return redirect()->route('producto.index');
        
        
    }



    public function delete($id)
    {
        $producto = Producto::find($id);
        
        try {
            if ($producto->pedidoDetalle->count() > 0){
                return response()->json(false);
            }else{
                $producto->delete();
                return response()->json(true);
            }

        } catch (QueryException $e) {
            return response()->json(false);
        }
        
    }
}
