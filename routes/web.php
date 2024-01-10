<?php

use App\Http\Controllers\{BukuController, CategoryController, DaftarHistoryPinjamController, DaftarLiterasiController, DaftarPinjamController, HistoryController, HomeController, LiterasiController, PinjamController, RankController, UserController};
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
    // homepage
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
    Route::get('/homebycategory/{id}', [HomeController::class, 'homeByCategory'])->name('homeByCategory');

    // search
    Route::get('/caribuku/{cari_buku}', [HomeController::class, 'index'])->name('cari_buku');
    Route::get('/caribuku/{id}/{cari_buku}', [HomeController::class, 'homeByCategory'])->name('cari_buku_perkategori');

    // Dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('/dashboard/leaderboard', RankController::class);
    Route::resource('/dashboard/settings', UserController::class);

    // user
    Route::resource('/dashboard/pinjam', PinjamController::class);
    Route::resource('/dashboard/history', HistoryController::class);
    Route::resource('/dashboard/literasi', LiterasiController::class);

    // admin
    Route::resource('/dashboard/daftarbuku', BukuController::class)->middleware('is_admin');
    Route::resource('/dashboard/daftarpinjam', DaftarPinjamController::class)->middleware('is_admin');
    Route::resource('/dashboard/daftarhistoripinjam', DaftarHistoryPinjamController::class)->middleware('is_admin');
    Route::resource('/dashboard/kategori', CategoryController::class)->middleware('is_admin');
    Route::resource('/dashboard/daftarliterasi', DaftarLiterasiController::class)->middleware('is_admin');
});
