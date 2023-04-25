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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('url', 100); //aggiunge una colonna di tipo stringa con una lunghezza massima specificata nel secondo parametro
            $table->integer('age'); //aggiunge una colonna di tipo intero
            $table->text('description'); //aggiunge una colonna di tipo testo con un numero massimo di caratteri di 65.535.
            $table->boolean('is_active'); //aggiunge una colonna di tipo booleano.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
