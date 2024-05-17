<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    use HasFactory;
    public $table = "cargo_salario";

    // protected $fillable = array("*");

    protected $fillable = [
        'cod_ide','direccion','unidad','puesto',
        'haber_basico','nivel'
    ];
}
