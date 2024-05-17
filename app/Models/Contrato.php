<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;


    public $table = "contratos";

    // protected $fillable = array("*");

    protected $fillable = [
        'num_cont','personal_id','cite','fecha_inicio',
        'fecha_fin_contrato','monto_total',
        'monto_total_literal','pagos',
        'observaciones'

    ];

}
