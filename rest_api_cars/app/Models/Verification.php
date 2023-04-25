<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    use HasFactory;



    public function car() //questa è la funzione da aggiungere
    {
        return $this->belongsTo(Car::class);
    }
}
