<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/mata_kuliah', function () {
    return view('mata_kuliah');
});

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');

Route::get('/form_dosen', [DosenController::class, 'create'])->name('form_dosen');

Route::post('/storeDosen', [DosenController::class, 'store']);

Route::get('/destroydosen/{id}', [DosenController::class, 'destroy']); 