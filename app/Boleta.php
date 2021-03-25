<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;

class Boleta extends Model
{
    protected $table = 'boletas';

    protected $fillable = [
        'cliente_id','direccion','dni'
    ];


    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public static function mostrarTodo(){
        return Categoria::where('estado', Constants::ESTADO_ACTIVO)->get();
    }
}
