<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zona extends Model
{
    
    use SoftDeletes;

    protected $table = 'zonas';
    protected $fillable = ['id', 'zona', 'precio'];  
    
    

    public function pedido(){
        return $this->hasMany(Pedido::class);
    }

    public static function mostrarTodos()
    {
      return Zona::orderBy('id','desc')->get();
    }

}
