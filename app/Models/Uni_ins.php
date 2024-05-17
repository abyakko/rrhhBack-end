<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uni_ins extends Model
{
    use HasFactory;

    public $table = "uniins";

    // protected $fillable = array("*");
 
     protected $fillable = [
         'nombre_uniins'
     ];
}
