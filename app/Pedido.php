<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'pedido';
    protected $fillable = [
        'persona_id',
        'cliente_id',
        'zona_id',
        'direccion',
        'referencia',
        'tipo_pago',
        'igv',
        'estado_pago',
        'estado_pedido',
        'total',
        'documento',
        'estado_tarjeta',
        'cuanto_pagar',
	'culqi_cargo_id'
    ];



    public function zona(){
        return $this->belongsTo(Zona::class);
    }
    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function pedidoDetalle(){
        return $this->hasMany(Pedido_detalle::class);
    }
    public function comprobante(){
        return $this->hasOne(Comprobante::class);
    }
}
