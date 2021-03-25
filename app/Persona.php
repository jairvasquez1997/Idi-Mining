<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function pedido(){
        return $this->hasMany(Pedido::class);
    }
    public static function mostrarTodos()
    {
        return Persona::where('id','!=',1)->orderBy('id','desc')->get();
    }
}
