<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generacion extends Model
{
    use HasFactory;

    public $table = "registro_kardex";

    // protected $fillable = array("*");

    protected $fillable = [
        'cod_ide','profesion','libreta_militar',
        'ley_1178','ley_mqsc','otros','normas_mun',
        'c_i','declaracion_jur','ficha_kardex'
    ];
}
