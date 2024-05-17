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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();

            $table->integer("num_cont");
            $table->string("cite");
            $table->date("fecha_inicio");
            $table->date("fecha_fin_contrato");
            $table->string("monto_total");
            $table->string("monto_total_literal");
            $table->string("pagos");
            $table->string("observaciones");
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
        Schema::dropIfExists('contratos');
    }
};
