<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    use HasFactory;
    public $table = "informes";

    // protected $fillable = array("*");

    protected $fillable = [
        'cod_ide','num_cite','tipo_inf',
        'fecha_inf','dirigido','autorizado'
    ];
}
