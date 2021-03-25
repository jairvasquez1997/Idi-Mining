<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;

class CategoriaWeb extends Model
{
    protected $table = 'categoria-web';

    protected $fillable = [
        'nombre','tipo','imagen','estado'
    ];
    public function productoWeb(){
        return $this->hasMany(ProductoWeb::class);
    }
    public function sliderWeb()
    {
        return $this->hasMany(SlidersWeb::class);
    }
}