<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;

class Categoria extends Model
{
    protected $table = 'categoria';

    protected $fillable = [
        'nombre'
    ];

    public function producto(){
        return $this->hasMany(Producto::class);
    }

    public static function mostrarTodo(){
        return Categoria::where('estado', Constants::ESTADO_ACTIVO)->get();
    }
    /*public function sliderWeb()
    {
        return $this->hasMany(SlidersWeb::class);
    }*/
}
