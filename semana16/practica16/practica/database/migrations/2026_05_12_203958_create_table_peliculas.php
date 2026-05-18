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
        Schema::create('table_peliculas', function (Blueprint $table) {
            //$table->tipodedato('nombredelcampo');
        
            $table->id();
            $table->string('nombre');
            $table->integer('duracion');
            $table->string('categoria');
            $table->date('fechaestreno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_peliculas');
    }
};
