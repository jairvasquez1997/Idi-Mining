<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;

class Factura extends Model
{


    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

}
