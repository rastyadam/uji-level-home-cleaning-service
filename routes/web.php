<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Service_transactionsController;


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/pemesanan', [Service_transactionsController::class, 'create'])
    ->name('pemesanan.create');

Route::post('/pemesanan/store', [Service_transactionsController::class, 'store'])
    ->name('pemesanan.store');


