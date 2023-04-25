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
        Schema::create('verifications', function (Blueprint $table) {
            $table->id(); //id come richiesto in consegna
            $table->unsignedBigInteger('car_id'); //- car_id UNSIGNED BIG INTEGER, Foreign Key su tabella cars
            $table->date('check_date'); //- check_date DATE
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars'); //La parte della consegna che dice: Per la tipologia DATE fare riferimento alla documentazione online di Laravel per l'apposito datatype sulle migrazioni e sull'apposita regola di validazione.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifications');
    }
};
