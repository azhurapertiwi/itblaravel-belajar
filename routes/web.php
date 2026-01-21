<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function () {
    return view('dosen');
});

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// Route::get('/mata_kuliah', function () {
//     return view('mata_kuliah');
// });

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen')->Middleware('admin');

Route::get('/form_dosen', [DosenController::class, 'create'])->name('form_dosen')->Middleware('admin');

Route::post('/storeDosen', [DosenController::class, 'store'])->Middleware('admin');

Route::get('/destroydosen/{id}', [DosenController::class, 'destroy'])->Middleware('admin'); 

Route::get('/editdosen/{id}', [DosenController::class, 'edit'])->Middleware('admin'); 

Route::post('/DosenUpdate/{id}', [DosenController::class,'update'])->Middleware('admin');


// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login', [LoginController::class, 'form']);

Route::post('/proses_login', [LoginController::class, 'login']);

Route::post('/logout', function() {
    Auth::logout();
    request()->session()->invalidate();

    request()->session()->regenerateToken();
    return redirect('/login');
})->Middleware('admin');