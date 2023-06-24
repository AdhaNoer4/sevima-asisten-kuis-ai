<?php

use App\Http\Controllers\HomeController;
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


//  Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman About
Route::get('/about', [HomeController::class, 'index']);

// Halaman Category
Route::get('/categories', [HomeController::class, 'index']);

// Halaman Login
Route::get('/login', function () {
    return view('login');
});
