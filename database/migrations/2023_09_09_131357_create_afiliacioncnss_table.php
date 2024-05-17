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
        Schema::create('afiliacioncnss', function (Blueprint $table) {
            $table->id();
            $table->date("num_asegurado");
            $table->date("fecha_afi");
            $table->string("hospital");
            $table->string("cod_salario");
            $table->string("entidad");
            $table->string("estado");
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
        Schema::dropIfExists('afiliacioncnss');
    }
};
