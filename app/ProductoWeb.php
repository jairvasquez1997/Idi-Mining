<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductoWeb extends Model
{
    use SoftDeletes;

    protected $table = 'productos-web';
    protected $fillable = [
        'nombre',
        'categoriaweb_id',
        'descripcion',
        'precio',
    ];

    public function categoriaWeb()
    {
        return $this->belongsTo(CategoriaWeb::class,'categoriaweb_id');
    }

}