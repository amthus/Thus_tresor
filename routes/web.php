<?php

use App\Http\Controllers\OeuvreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return('welcome');
});

Route::get('/oeuvres', [OeuvreController::class, 'index'])->name('oeuvres.index');
Route::get('/oeuvres/create', [OeuvreController::class, 'create'])->name('oeuvres.create');
Route::post('/oeuvres', [OeuvreController::class, 'store'])->name('oeuvres.store');
Route::get('/oeuvres/{oeuvre}/edit', [OeuvreController::class, 'edit'])->name('oeuvres.edit');
Route::put('/oeuvres/{oeuvre}', [OeuvreController::class, 'update'])->name('oeuvres.update');
Route::delete('/oeuvres/{oeuvre}', [OeuvreController::class, 'destroy'])->name('oeuvres.destroy');