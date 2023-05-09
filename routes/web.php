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

    $nome = "Michele";
    $cognome = "Giovagnoli";
    $eta = 22;

    $data = [
        'nome'=>$nome,
        'cognome'=>$cognome,
        'eta'=>$eta,
        'passioni'=> [
            'Programmazione',
            'Natura',
            'Musica',
            'Libri'
        ]
    ];
    return view('home',$data);
})->name('home');

Route::get('about', function (){
    return view('about');
})->name('about');
