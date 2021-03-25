<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Util\Constants;

class Costo extends Model
{


    public static function minimo()
    {
        return Costo::where('tipo', 'Minimo')->first();

    }


}
