<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimoController; //questo codice mi serve per dire a Laravel che andrà a cercare il controller di cui ho bisogno




/*risponde alle chiamate get usando / e restituisce la vista chiamata "welcome", si trova in resuorces/views*/
Route::get('/', function () {
    return view('welcome'); //welcome è il nome del file
});


//! vista che restituisce una stringa
//scrivendo nella barra degli indirizzi http://127.0.0.1:8000/hello apparirà la stringa
Route::get('/hello/', function () {
    return "Hello world!!";
});


//! vista che restituisce un valore dinamico
//scrivendo nella barra degli indirizzi http://127.0.0.1:8000/param/param (al posto di param, quello che vogliamo) apparirà il parametro insieme alla stringa messa in return
Route::get('/{param}/{param2}', function ($param, $param2) {
    return "parametro: " . $param . $param2;
});


//! creazione di una rotta che mi restituisca una view creata da me
Route::get('/pagina_pizzeria', function () {
    return view('pagina_pizzeria');
});
//dopo aver creato la rotta, vado in resuorces/views e creo un nuovo file chiamato "pagina_pizzeria.blade.php"


//! creazione di una view, a cui vado a passare dei parametri
Route::get('/esempio1', function () {

    $modelli = [
        "param1" => "primo parametro",      //array associativo con due chiavi e due valori
        "param2" => "secondo parametro"
    ];

    return view('esempio1', $modelli);  //nel return, oltre a metterci il nome del file, ci metto l'array creato prima
});


//!Creazione della root per il controller
Route::get('/primo_controller', [PrimoController::class, 'index']);
/*questa volta non uso una funzione, ma dopo aver inserito il nome dell'url, comer secondo parametro ci metto la sintassi
per accedere al controller che mi serve.
All'inizio del file, per permettere a laravel di cercare il controller ho scritto use App\Http\Controllers\PrimoController;*/
//vado poi a modificare il controller, per aver un output
//Anche nei controller possiamo passare dei parametri dinamici, esattamente come fatto prima
