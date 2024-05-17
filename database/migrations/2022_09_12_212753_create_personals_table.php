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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string("cod_ide");
            $table->string("ap_paterno");
            $table->string("ap_materno");
            $table->string("nombres");
            $table->date("fecha_nac");
            $table->string("nacionalidad");
            $table->string("domicilio");
            $table->string("sexo");
            $table->unsignedBigInteger("ciudad_id");
            $table->foreign("ciudad_id")->references("id")->on("ciudads")->onDelete("cascade");
            $table->unsignedBigInteger("extension_id");
            $table->foreign("extension_id")->references("id")->on("extensions")->onDelete("cascade");
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
