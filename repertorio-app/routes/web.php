<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MusicaController;
/*
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');
*/
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return redirect()->route('musicas.index'); // atalho [2]
});
Route::resource('musicas', MusicaController::class); // CRUD completo [1]

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
