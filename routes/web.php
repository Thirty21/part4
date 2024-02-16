<?php

use App\Http\Controllers\admin2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeminjamanController;

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


// admin
Route::get('admin', [AdminController::class, 'index']);
Route::resource('admin', AdminController::class);

// home
Route::get('home', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'search'])->name('search');

// peminjaman
Route::get('peminjaman', [PeminjamanController::class, 'index']);
Route::resource('peminjaman', PeminjamanController::class);

// admin Peminjaman
Route::get('adminpeminjaman', [admin2Controller::class, 'index']);
Route::resource('adminpeminjaman', admin2Controller::class);
