<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaranaPrasarananController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index']);
Route::resource('sarana_prasarana', SaranaPrasarananController::class);

// create route form for buku
Route::get('/buku', [BukuController::class, 'formIndex'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'formCreate'])->name('buku.create');
Route::get('/buku/edit/{id}', [BukuController::class, 'formEdit'])->name('buku.edit');