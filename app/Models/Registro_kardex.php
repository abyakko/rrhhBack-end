<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    public $table = "archivo";

    // protected $fillable = array("*");

    protected $fillable = [
        'cod_ide','fecha_ing_doc',
        'num_decla_jurada','tipo_document',
        'monto_total','observaciones'
    ];
}
