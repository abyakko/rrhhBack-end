<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;
    public $table = "accidente_trabajo";

    // protected $fillable = array("*");

    protected $fillable = [
        'cod_ide','cod_afi','num_acc','fecha_acc',
        'motivo','dias_permiso','observaciones',
        'clinica'
    ];
}
