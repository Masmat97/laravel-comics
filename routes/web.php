<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    $data = [
        'Card 1: Matteo',
        'Card 2: Mascio',
        'Card 3: matteo.mascio@libero.it'
    ];
    return view('home', ['cards' => $data]);
});

Route::get('/home', function () {
    $data = [
        'Card 1: Matteo',
        'Card 2: Mascio',
        'Card 3: matteo.mascio@libero.it'
    ];
    return view('home', ['cards' => $data]);
    
});