<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contacto', function () {
    return "Hola desde la página de contacto";
});

//Parametro obligatorio: en la uri que se recibe por la función anónima
Route::get('saludo/{nombre}', function ($nombre) {
    return "Saludos ". $nombre;
});

//Parametro opcional: en la uri que se recibi por la función anónima
Route::get('saludo/{nombre?}', function ($nombre = "Invitado, nombre no obligatorio") {
    return "Saludos ". $nombre;
});

Route::get('contactame', function () {
    return "Sección de contactos";
})->name('contactos');

Route::get('/', function () {
    echo "<a href=". route('contactos') ."> Contacto 1</a><br>";
    echo "<a href=". route('contactos') ."> Contacto 2</a><br>";
    echo "<a href=". route('contactos') ."> Contacto 3</a><br>";
    echo "<a href=". route('contactos') ."> Contacto 4</a><br>";
    echo "<a href=". route('contactos') ."> Contacto 5</a><br>";
});

/*
Route::get('/', function () {
    $nombre = "Ingenieria de Software II";
    return view('home')->with('nombre', $nombre);
})->name('home');
*/
/*
Route::get('/', function () {
    $nombre = "Ingenieria de Software II";
    return view('home', compact('nombre'));
})->name('home');
*/

Route::view('/', 'home', 
['nombre'=>'Ingenieria de software II'])->name('home');

Route::view('about', 'about')->name('about');
Route::get('portfolio', 'portfolioController@index')->name('portfolio');
Route::view('contact', 'contact')->name('contact');
