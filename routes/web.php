<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarAdController;

Route::get('/', function () {
    return redirect()->route('car-ads.index');
});

Route::get('/elanlar', [CarAdController::class, 'index'])->name('car-ads.index');
Route::get('/elanlar/yeni', [CarAdController::class, 'create'])->name('car-ads.create');
Route::post('/elanlar', [CarAdController::class, 'store'])->name('car-ads.store');
Route::get('/elanlar/{carAd}', [CarAdController::class, 'show'])->name('car-ads.show');
Route::delete('/elanlar/{carAd}', [CarAdController::class, 'destroy'])->name('car-ads.destroy');
?>