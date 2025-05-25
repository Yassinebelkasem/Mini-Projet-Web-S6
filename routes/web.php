<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Voituercontroller;
use App\Http\Controllers\ConnexionController;


Route::get('/home', [Voituercontroller::class, 'index'])->name('home');
Route::get('/homea', [Voituercontroller::class, 'indexa'])->name('homea');
Route::post('/home/store', [Voituercontroller::class, 'store'])->name('store');
Route::get('/administarive', fn () => view('administarative'));
Route::get('/administarive/ajouter', [Voituercontroller::class, 'ajouter']);
Route::get('/administarive/modifier', fn () => view('modifier'));
Route::get('/contact', fn () => view('contacts'));
Route::get('/administarive', [ConnexionController::class, 'form'])->name('login.form');
Route::post('/administarive', [ConnexionController::class, 'login'])->name('login.attempt');
Route::get('/modifier', function () {
    return view('modifier');
});
Route::get('/home/{id}', [ Voituercontroller::class ,'show'])->name('show');
Route::delete('/home/{voituer}', [ Voituercontroller::class ,'destroy'])->name('supprimer');
Route::get('/home/{voituer}/edit', [ Voituercontroller::class ,'edit'])->name('edit');
Route::put('/home/{voituer}', [ Voituercontroller::class ,'update'])->name('modifier');