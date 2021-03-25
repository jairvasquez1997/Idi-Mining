<?php

namespace App\Http\Controllers\admin;

use App\CategoriaWeb;
use App\SubCategoriaWeb;
use App\Util\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaWebController extends Controller
{
    public function mostrar()
    {
        $categoriasweb = CategoriaWeb::where('estado',1)->get();
        return view('admin.web.categoria-web.index')
            ->with('categoriasweb',$categoriasweb);
    }
    public function getDataCategoriaWebVue($tipo)
    {
       return response()->json(CategoriaWeb::where('tipo',$tipo)->where('estado',1)->get());
    }
    public function create()
    {
        return view('admin.web.categoria-web.create');
    }
    public function store(Request $request)
    {
        try {
            $categoriaweb = new CategoriaWeb();
            $categoriaweb->nombre = $request->nombre;
            $categoriaweb->tipo = $request->tipo;
            if ($request->file('imagen')) {
                $file = $request->file('imagen');
                $name = 'categoriaweb_' . time() . rand(1, 200) . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/images/categoriaweb/';

                $file->move($path, $name);
                $categoriaweb->imagen = $name;

            }

            $categoriaweb->save();
            Mensaje::flashCreateSuccessImportant();
        } catch (\Exception $e) {
            Mensaje::flashCreateErrorImportant();
            return redirect()->back();
        }
        return redirect()->route('categoriaweb.mostrar');
    }

    public function edit($id)
    {
        $categoriaweb = CategoriaWeb::find($id);
        return view('admin.web.categoria-web.edit')->with('categoriaweb',$categoriaweb);
    }

    public function update(Request $request, $id)
    {
        try {
            $categoriaweb = CategoriaWeb::find($id);
            $categoriaweb->nombre = $request->nombre;
            $categoriaweb->tipo = $request->tipo;
            if ($request->file('imagen')) {
                $file = $request->file('imagen');
                $name = 'categoriaweb' . time() . rand(1, 200) . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/images/categoriaweb/';

                $file->move($path, $name);
                if ($categoriaweb->imagen){
                    if(file_exists( $path.$categoriaweb->imagen)){
                        unlink($path.$categoriaweb->imagen);
                    }
                }

                $categoriaweb->imagen = $name;

            }

            $categoriaweb->save();
            Mensaje::flashUpdateSuccessImportant();
        } catch (\Exception $e) {
            Mensaje::flashUpdateErrorImportant();
            return redirect()->back();
        }
        return redirect()->route('categoriaweb.mostrar');
    }

    public function delete($id)
    {
        $categoriaweb = CategoriaWeb::find($id);
        $categoriaweb->estado = 0;
        $categoriaweb->save();

        return redirect()->route('categoriaweb.mostrar');
    }
    public function mostrarSubCategoria()
    {
        $subcategoriasweb = SubCategoriaWeb::all();
        return view('admin.web.categoria-web.subCategoria-web.index')
            ->with('subcategoriasweb',$subcategoriasweb);
    }

    public function createSubCategoria()
    {
        $categoriasweb = CategoriaWeb::where('estado',1)->get();
        return view('admin.web.categoria-web.subCategoria-web.create')
        ->with('categoriasweb',$categoriasweb);
    }

    public function getDataSubCategoriaWeb($idCategoria)
    {
       return response()->json(SubCategoriaWeb::where('categoriaweb_id',$idCategoria)->get());
    }

    public function storeSubCategoria(Request $request)
    {
        try {
            $subcategoriaweb = new SubCategoriaWeb();
            $subcategoriaweb->nombre = $request->nombre;
            $subcategoriaweb->categoriaweb_id = $request->categoriaweb_id;
            $subcategoriaweb->save();
            Mensaje::flashCreateSuccessImportant();
        } catch (\Exception $e) {
            Mensaje::flashCreateErrorImportant();
            return redirect()->back();
        }
        return redirect()->route('subcategoriaweb.mostrar');
    }
}
