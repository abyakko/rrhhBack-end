<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    public $table = "personals";

    // protected $fillable = array("*");

     protected $fillable = [
         'cod_ide',
         'extension_id',
         'ap_paterno',
         'ap_materno',
         'nombres',
         'fecha_nac',
         'nacionalidad',
         'domicilio',
         'ciudad_id',
         'sexo'
     ];
     public function ciudads()
     {
         return $this->belongsTo(Ciudad::class, 'ciudad_id');
     }
     public function extensions()
     {
         return $this->belongsTo(Extension::class, 'extension_id');
     }
     public function items()
     {
         return $this->hasMany(Item::class, 'personal_id');
     }
     public function contratos()
     {
         return $this->hasMany(Contrato::class, 'personal_id');
     }
     public function vacaciones()
     {
         return $this->hasMany(Vacacione::class, 'personal_id');
     }
}
