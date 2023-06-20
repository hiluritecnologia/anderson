<?php

use App\Http\Controllers\Extensions\Forex\ForexController;
use Illuminate\Support\Facades\Route;

Route::post('/fetch/forex', [ForexController::class, 'fetch_info'])->middleware('checkKYC')->name('fetch.forex');
Route::group(['middleware' => 'checkKYC', 'prefix' => 'forex', 'as' => 'forex.'], function () {
    Route::post('/create', [ForexController::class, 'create'])->name('create');
    Route::post('/store', [ForexController::class, 'store'])->name('store');
    Route::post('/withdraw', [ForexController::class, 'withdraw'])->name('withdraw');
    Route::post('/deposit', [ForexController::class, 'deposit'])->name('deposit');
});
