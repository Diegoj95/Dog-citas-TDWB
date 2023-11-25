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
        Schema::create('interaccion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perro_interesado');
            $table->unsignedBigInteger('perro_candidato');
            $table->enum('preferencia', ['aceptado', 'rechazado']);
            $table->timestamps();

            $table->foreign('perro_interesado')->references('id')->on('perro');
            $table->foreign('perro_candidato')->references('id')->on('perro');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('interaccion');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
