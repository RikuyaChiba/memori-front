<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Recurring;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('recurring')->group(function () {
    Route::get('/index', Recurring\IndexController::class);
    Route::get('/store', Recurring\StoreController::class);
});
