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
        Schema::create('mellamadaatencions', function (Blueprint $table) {
            $table->id();
            $table->integer("num_memo");
            $table->date("fecha_memo");
            $table->string("solicitado_por");
            $table->string("motivo");
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
        Schema::dropIfExists('mellamadaatencions');
    }
};
