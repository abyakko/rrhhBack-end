<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public $table = "baja_medica";

    //protected $fillable = array("*");

    //public $timestamps = true;

    protected $fillable = [
        'cod_ide','fecha_remi','fecha_ini',
        'fecha_final'.'dias_incap','motivo',
        'observacion'
    ];

}
