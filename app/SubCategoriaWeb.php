<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;

class SubCategoriaWeb extends Model
{
    protected $table = 'subcategoria_web';

    protected $fillable = [
        'nombre','categoriaweb_id'
    ];

    public function productoWeb(){
        return $this->hasMany(Producto::class);
    }
    public function categoriaWeb()
    {
        return $this->belongsTo(Categoria::class,'categoriaweb_id');
    }
}