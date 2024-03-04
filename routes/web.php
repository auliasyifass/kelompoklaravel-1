<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController; // Make sure to import the TestController at the top
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\PelajarController;

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

// Route untuk CRUD pelajar
Route::get('/pelajar', [PelajarController::class, 'index'])->name('pelajar.index');
Route::get('/pelajar/create', [PelajarController::class, 'create'])->name('pelajar.create');
Route::post('/pelajar', [PelajarController::class, 'store'])->name('pelajar.store');
Route::get('/pelajar/{id}/edit', [PelajarController::class, 'edit'])->name('pelajar.edit');
Route::put('/pelajar/{id}', [PelajarController::class, 'update'])->name('pelajar.update');
Route::delete('/pelajar/{id}', [PelajarController::class, 'destroy'])->name('pelajar.destroy');


Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/pelanggan', [PelangganController::class,'index']);
//Route::get('/daftar', [TestController::class, 'daftar']);
//Route::post('/kirim', [TestController::class, 'kirim']);
