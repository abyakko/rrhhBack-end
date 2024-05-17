<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string("password");
            $table->rememberToken();

            $table->unsignedBigInteger("persona_id");
            $table->foreign("persona_id")->references("id")->on("personals")->onUpdate("cascade")->onDelete("cascade");

            $table->unsignedBigInteger("nivel_id");
            $table->foreign("nivel_id")->references("id")->on("nivels")->onUpdate("cascade")->onDelete("cascade");

            /*$table->unsignedBigInteger("extension_id");
            $table->foreign("extension_id")->references("id")->on("extensions")->onUpdate("cascade")->onDelete("cascade");

            $table->unsignedBigInteger("carrera_id");
            $table->foreign("carrera_id")->references("id")->on("carreras")->onDelete("cascade");


            $table->unsignedBigInteger("uniins_id");
            $table->foreign("uniins_id")->references("id")->on("uniins")->onDelete("cascade");


            $table->unsignedBigInteger("tipousuario_id");
            $table->foreign("tipousuario_id")->references("id")->on("tipousuarios")->onDelete("cascade");

            $table->unsignedBigInteger("area_id");
            $table->foreign("area_id")->references("id")->on("areas")->onDelete("cascade");

            $table->unsignedBigInteger("generacion_id");
            $table->foreign("generacion_id")->references("id")->on("generacions")->onDelete("cascade");
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
