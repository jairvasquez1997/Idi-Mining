<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $table = 'producto';
    protected $fillable = [
        'nombre',
        'categoria_id',
        
        'descripcion',
        'imagen',
        'precio',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    

    public function pedidoDetalle()
    {
        return $this->hasMany(Pedido_detalle::class);
    }

    public static function mostrarCategoria($id)
    {

        $productos= Producto::where('categoria_id', $id)
            ->get();
        $productos->load('categoria');

        return $productos;
    }


}
