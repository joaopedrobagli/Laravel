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


Route::get('/empresa', function () {
    return view( view: 'empresa');
})->name('empresa');
 
Route::get('/candidato', function () {
    return view( view: 'candidato');
})->name('candidato');

Route::get('/vaga', function () {
    return view( view: 'vaga');
})->name('vaga');

Route::get('/home', function () {
    return view( view: 'home');
})->name('home');
Route::get('/sobre', function () {
    return view( view: 'sobre');
})->name('sobre');

