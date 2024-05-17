<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;


    public $table = "afiliacion_cns";

    protected $fillable = [
        'cod_ide','num_asegurado','fecha_afi',
        'hospital','cod_salario','entidad','estado'
    ];

}
