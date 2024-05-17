<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;

    public $table = "baja_cns";

    // protected $fillable = array("*");

    protected $fillable = [
        'cod_ide','cod_baja','num_aseg',
        'fecha_baja','motivo_baja',
        'cod_salario','entidad'
    ];

}
