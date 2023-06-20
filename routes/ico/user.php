<?php

use App\Http\Controllers\Extensions\Ico\IcoController;
use Illuminate\Support\Facades\Route;

Route::post('/fetch/ico', [IcoController::class, 'fetch_info'])->middleware('checkKYC')->name('fetch.ico');
Route::post('/fetch/ico/{symbol}', [IcoController::class, 'fetch_ico_info'])->middleware('checkKYC')->name('fetch.ico.info');
Route::post('/store/ico', [IcoController::class, 'store'])->middleware('checkKYC')->name('store.ico');
Route::post('/store/ico/rec_wallet', [IcoController::class, 'store_rec_wallet'])->middleware('checkKYC')->name('store.ico.rec_wallet');
