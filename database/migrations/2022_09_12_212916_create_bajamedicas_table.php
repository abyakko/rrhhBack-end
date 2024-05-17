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
        Schema::create('bajamedicas', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_remi");
            $table->date("fecha_ini");
            $table->date("fecha_final");
            $table->string("dias_incap");
            $table->string("motivo");
            $table->string("observacion");
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
        Schema::dropIfExists('bajamedicas');
    }
};
