<?php

use App\Http\Controllers\{HistoryController, HomeController, LiterasiController, PinjamController, RankController, UserController};
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
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('/dashboard/pinjam', PinjamController::class);
    Route::resource('/dashboard/history', HistoryController::class);
    Route::resource('/dashboard/literasi', LiterasiController::class);
    Route::resource('/dashboard/leaderboard', RankController::class);
    Route::resource('/dashboard/settings', UserController::class);
});
