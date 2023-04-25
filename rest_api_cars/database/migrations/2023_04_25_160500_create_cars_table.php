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
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); //id come richiesto in cosegna
            $table->string('targa', 50);  //targa VARCHAR(50) come richiesto in cosegna
            $table->integer('chilometraggio'); //chilometraggio INTEGER come richiesto in cosegna
            $table->timestamps(); //già presente di default, non si tocca
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
