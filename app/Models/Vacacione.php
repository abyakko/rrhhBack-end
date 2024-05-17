<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacacione extends Model
{
    use HasFactory;
    public $table = "vacaciones";

    // protected $fillable = array("*");

    protected $fillable = [
        'personal_id','fecha_sol','fecha_salida',
        'fecha_llegada','dias','dependencia',
        'observaciones'
    ];
}
