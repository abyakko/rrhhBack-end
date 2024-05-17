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
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_sol");
            $table->date("fecha_salida");
            $table->date("fecha_llegada");
            $table->string("dias");
            $table->string("dependencia");
            $table->string("observaciones");
            $table->unsignedBigInteger("personal_id");
            $table->foreign("personal_id")->references("id")->on("personals")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacaciones');
    }
};
