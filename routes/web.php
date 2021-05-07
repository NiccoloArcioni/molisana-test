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
    return view('home');
})->name('pagina-home');

Route::get('/prodotti', function () {
    $pasta = config('pasta');
    $data = [
        'paste' => $pasta
    ];
    return view('prodotti', $data);
})->name('pagina-prodotti');

Route::get('/news', function () {
    return view('news');
})->name('pagina-news');

Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');
    $data = [
        'pasta' => $pasta[$id],
        'id' => $id
    ];
    return view('dettaglio', $data);
})->name('pagina-dettaglio');
