<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;
    public $table = "discapacidad";

    protected $fillable = [
        'cod_ide','grado_disca','tipo_disca',
        'carnet_disca'.'tutor'
    ];
}
