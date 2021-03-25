<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use QCod\ImageUp\HasImageUploads;

class Actualizacion extends Model
{
    use SoftDeletes, HasImageUploads;
    protected $dates = ['deleted_at'];

    protected $imagesUploadDisk = 'web';
    protected $imagesUploadPath = 'actualizacion';
//    protected $autoUploadImages = false;

    protected $table = "actualizacion";
    protected $fillable = ['title','description','image','pdf'];

    protected static $imageFields = [
        'image' => ['rules' => 'image']
    ];
    protected static $fileFields = [
        'pdf'
    ];

}
