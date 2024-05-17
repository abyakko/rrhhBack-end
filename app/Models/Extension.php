<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;

    public $table = "extensions";

    protected $fillable = [
        'nombre_ciudad'
    ];
}
