<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    use HasFactory;

    public $table = "tipousuarios";

    // protected $fillable = array("*");
 
     protected $fillable = [
         'tipousuario'
     ];
}
