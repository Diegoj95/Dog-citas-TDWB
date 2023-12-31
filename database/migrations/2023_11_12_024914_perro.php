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
       

        Schema::create('perro', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('url_foto');
            $table->string('descripcion');
            $table->timestamps();
            $table->softDeletes();
        });
        //
     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('perro');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
