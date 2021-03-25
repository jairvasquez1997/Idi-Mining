<?php

namespace App\Http\Controllers\admin;

use App\SlidersWeb;
use App\Categoria;
use App\Util\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlidersWebController extends Controller
{
    public function mostrar()
    {
        $slidersweb=SlidersWeb::all();
        $slidersweb->load('categoriaWeb');
        return view('admin.web.sliders-web.index')
            ->with('slidersweb',$slidersweb);
    }
    public function create()
    {
        $categoriasweb=Categoria::where('estado',1)->get();
        return view('admin.web.sliders-web.create')
            ->with('categoriasweb',$categoriasweb );
    }
    public function store(Request $request)
    {
        try {
            $slider = new SlidersWeb();
            $slider->nombre = $request->nombre;
            $slider->grupo = $request->grupo;
            $slider->categoriaweb_id = $request->categoriaweb_id;
            if ($request->file('imagen')) {
                $file = $request->file('imagen');
                $name = 'sliders_' . time() . rand(1, 200) . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/images/sliders/';

                $file->move($path, $name);
                $slider->imagen = $name;

            }
            $slider->save();
            Mensaje::flashCreateSuccessImportant();
        } catch (\Exception $e) {
            Mensaje::flashCreateErrorImportant();
            return redirect()->back();
        }
        return redirect()->route('slidersweb.mostrar');
            
    }
    public function edit($id)
    {
        $slider = SlidersWeb::find($id);
        return view('admin.web.sliders-web.edit')
            ->with(['slider' => $slider]);
    }

    public function update(Request $request, $id)
    {

        try {
            $slider = SlidersWeb::find($id);
            $slider->fill($request->all());
            $slider->save();
            Mensaje::flashUpdateSuccessImportant();
        } catch (\Exception $e) {
            Mensaje::flashUpdateErrorImportant();
            return redirect()->back();
        }
        return redirect()->route('slidersweb.mostrar');

    }

    public function delete($id)
    {
        SlidersWeb::destroy($id);

        return redirect()->route('slidersweb.mostrar');
    }

}