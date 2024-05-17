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
        Schema::create('accidentetrabajos', function (Blueprint $table) {
            $table->id();
            $table->string("cod_afi");
            $table->integer("num_acc");
            $table->date("fecha_acc");
            $table->string("motivo");
            $table->string("dias_permiso");
            $table->string("observaciones");
            $table->string("clinica");
            $table->unsignedBigInteger("personal_id");
            $table->foreign("personal_id")->references("id")->on("personals")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidentetrabajos');
    }
};
