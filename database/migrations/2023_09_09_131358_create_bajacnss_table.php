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
        Schema::create('bajacnss', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("personal_id");
            $table->string("cod_baja");
            $table->integer("num_aseg");
            $table->date("fecha_baja");
            $table->string("motivo_baja");
            $table->string("cod_salario");
            $table->string("entidad");

            $table->foreign("personal_id")->references("id")->on("personals")->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bajacnss');
    }
};
