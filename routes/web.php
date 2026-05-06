<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

if (!function_exists('isCmsAuthenticated')) {
    function isCmsAuthenticated() {
        return Cookie::get('cms_auth') === 'authenticated';
    }
}

Route::get('/', [ProductController::class, 'index']);
Route::get('/cms', [ContentController::class, 'index'])->name('cms');
Route::post('/cms', [ContentController::class, 'store'])->name('cms.store');
Route::put('/cms/{product}', [ContentController::class, 'update'])->name('cms.update');
Route::delete('/cms/{product}', [ContentController::class, 'destroy'])->name('cms.destroy');
Route::put('/cms/orders/{order}/status', [ContentController::class, 'updateOrder'])->name('cms.orders.update');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::post('/payment/create', [PaymentController::class, 'createOrder']);
Route::post('/payment/verify', [PaymentController::class, 'verifyPayment']);
