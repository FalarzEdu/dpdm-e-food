<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopListController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;

// :: UNPROTECTED ROUTES :::: ---- :::: ---- :::: ---- :::: ---- :::: ---- :::: ---- :::: ||

// :: GET ROUTES --------------------------------------------------------------------- :: ||
Route::get(uri: '/', action: [HomeController::class, 'index'])->name(name: 'home');
Route::get(uri: '/login', action: [LoginController::class, 'index'])->name(name: 'login');
Route::get(uri: '/shops-list', action: [ShopListController::class, 'index'])->name(name: 'shops-list');
Route::get(uri: '/logout', action: [LoginController::class, 'logout'])->name(name: 'logout');

// :: POST ROUTES -------------------------------------------------------------------- :: ||
Route::post(uri: '/login', action: [LoginController::class, 'authenticate'])->name(name: 'authenticate');

// :: PROTECTED ROUTES - :::: ---- :::: ---- :::: ---- :::: ---- :::: ---- :::: ---- :::: ||

Route::middleware(AdminAuth::class)->group(function() {
// :: GET ROUTES --------------------------------------------------------------------- :: ||
    Route::get(uri: '/dashboard', action: [AdminDashboardController::class, 'index'])->name(name: 'dashboard');
    Route::get(uri: '/new-shop', action: [AdminDashboardController::class, 'newShop'])->name(name: 'newShop');
    Route::get(uri: '/switch-status', action: [AdminDashboardController::class, 'switchStatus'])->name(name: 'switchStatus');

// :: POST ROUTES -------------------------------------------------------------------- :: ||
    Route::post(uri: '/store-shop', action: [AdminDashboardController::class, 'storeShop'])->name(name: 'storeShop');
});
