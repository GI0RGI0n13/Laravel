<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;



    public function verifications() //questa è la funzione da aggiungere
    {
        return $this->hasMany(Verification::class);
    }
}
