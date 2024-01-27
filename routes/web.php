<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController; // Make sure to import the TestController at the top

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
})->name('home');

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');

//Route::get('/daftar', [TestController::class, 'daftar']);
//Route::post('/kirim', [TestController::class, 'kirim']);
