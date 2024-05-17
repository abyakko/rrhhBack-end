<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    public $table = "acta_cumplimiento";

    protected $fillable = [
        'cod_file','fecha_entrega','entrega_confor'
    ];

}
