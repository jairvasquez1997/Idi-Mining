<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_detalle extends Model
{
    protected $table = 'pedido_detalle';

    protected $fillable = [
        'pedido_id',
        'producto_id',
        'cantidad',
        'precio'
    ];

    public function pedido(){
        return  $this->belongsTo(Pedido::class);
    }
    public function producto(){
        return  $this->belongsTo(Producto::class);
    }

}
