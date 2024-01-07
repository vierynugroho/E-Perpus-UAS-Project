<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\{Route, Auth};

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


Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
