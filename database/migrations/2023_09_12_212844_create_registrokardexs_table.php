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
        Schema::create('registrokardexs', function (Blueprint $table) {
            $table->id();

            $table->string("profesion");
            $table->boolean("libreta_militar");
            $table->boolean("ley_1178");
            $table->boolean("ley_mqsc");
            $table->string("otros");
            $table->boolean("normas_mun");
            $table->boolean("c_i");
            $table->boolean("declaracion_jur");
            $table->boolean("ficha_kardex");
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
        Schema::dropIfExists('registrokardexs');
    }
};
