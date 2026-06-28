<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/login');
});


Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware(['auth'])
->name('dashboard');

// ROUTE ADMIN DISINI
Route::middleware(['auth','role:admin'])->group(function(){

    Route::resource('dosen', DosenController::class);
        Route::get('/dosen', [DosenController::class,'index'])->name('dosen.index');
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('matakuliah', MatakuliahController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

    Route::resource('krs', KrsController::class);
        Route::get('/krs-export', [KrsController::class, 'exportPdf'])
        ->name('krs.export');

});



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');

});


require __DIR__.'/auth.php';