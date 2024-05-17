<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\Carrera;
use App\Models\Extension;
use App\Models\Generacion;
use App\Models\Tarjeta;
use App\Models\Tipousuario;
use App\Models\Ciudad;
use App\Models\Usuario;
use App\Models\Personal;
use App\Models\Nivel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Extension::create([
            'nombre_extension' => 'LA PAZ',
        ]);
        Ciudad::create([
            'nombre_ciudad' => 'LA PAZ',
        ]);
        Nivel::create([
            'nivel'=>'admi',
            'cod_nivel' => 1,
        ]);
        Personal::create([
            'cod_ide'=>'12345',
            'extension_id'=>1,
            'ap_paterno'=>'RICHARD1',
            'ap_materno'=>'RICHARD2',
            'nombres'=>'RICHARD',
            'fecha_nac'=>'1997-02-12',
            'nacionalidad'=>'BOLIVIANA',
            'domicilio'=>'ZONA MUNAYPATA',
            'ciudad_id'=>1,
            'sexo'=>'M',

        ]);
        Usuario::create([
            'email'=>'richard@gmail.com',
            'password'=> Hash::make(trim('richard12345?')),
            'persona_id'=> '1',
            'nivel_id' => '1',
        ]);
    }
}
