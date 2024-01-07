<?php

use App\Http\Controllers\{DiPinjam, History, HomeController, Literasi, Rank, User,};
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
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('/pinjam', DiPinjam::class);
    Route::resource('/history', History::class);
    Route::resource('/literasi', Literasi::class);
    Route::resource('/achievment', Rank::class);
    Route::resource('/user', User::class);
});