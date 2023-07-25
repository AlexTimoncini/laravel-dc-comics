<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('guest.home');
Route::get('/comic/create', [HomeController::class, 'create'])->name('guest.create');
Route::post('/comic', [HomeController::class, 'store'])->name('guest.store');
Route::get('/comic/{id}', [HomeController::class, 'show'])->name('guest.show');
