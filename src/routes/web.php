<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Recurring;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('recurring')->group(function () {
    Route::get('/index', Recurring\IndexController::class)->name('recurring_index');
    Route::get('/store', Recurring\StoreController::class)->name('recurring_store');
    Route::post('/create', Recurring\CreateController::class)->name('recurring_create');
});
