<?php

use App\Modules\Order\Http\Controllers\OrderController;
use App\Modules\Product\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dahsboard');
})->name('dashboard');

// Route::resource('product', ProductController::class);
// Route::resource('order', OrderController::class);

