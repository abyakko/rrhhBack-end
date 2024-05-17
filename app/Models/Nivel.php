<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;


    public $table = "nivels";

    // protected $fillable = array("*");

    protected $fillable = [
        'nivel','cod_nivel'

    ];

}
