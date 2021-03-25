<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;
use Illuminate\Database\Eloquent\SoftDeletes;

class SlidersWeb extends Model
{
    use SoftDeletes;

    protected $table = 'sliders-web';
    protected $fillable = [
        'nombre',
        'categoriaweb_id',
        'grupo',
        'imagen' ];

    public function categoriaWeb()
    {
        return $this->belongsTo(Categoria::class,'categoriaweb_id');
    }

}