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

// Rotta per far funzionale la logica della web app application
Route::get('/{any}', function () {
    return view('home');
})->where('any', '.*');

/*
Route::get('/', function () {
    // Da inserire nel controller
    $comicBooks = config('db_factory');
    return view('home', compact('comicBooks'));
})->name('home');
*/
