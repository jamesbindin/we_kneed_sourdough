<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\UserSessionController;

Route::get('/', function () {
    return Inertia::render('App', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('usersIndex', [UserController::class, 'index']);
Route::match(['get', 'post'], 'users', [UserController::class, 'create']);
Route::match(['post'], 'users', [UserController::class, 'store']);
// Route::get('users{id}', [UserController::class, 'show']);
// Route::put('users{id}', [UserController::class, 'edit']);
// Route::delete('users{id}', [UserController::class, 'destroy']);

// Route::get('userSessionsIndex', [UserSessionController::class, 'index']);
Route::match(['get', 'post'], 'userSessions', [UserSessionController::class, 'create']);
// Route::get('userSessions{id}', [UserSessionController::class, 'show']);
// Route::put('userSessions{id}', [UserSessionController::class, 'edit']);
// Route::delete('userSessions{id}', [UserSessionController::class, 'destroy']);

Route::get('ordersIndex', [OrderController::class, 'index']);
Route::match(['get', 'post'], 'orders', [OrderController::class, 'create']);
// Route::get('orders{id}', [OrderController::class, 'show']);
// Route::put('orders{id}', [OrderController::class, 'edit']);
// Route::delete('orders{id}', [OrderController::class, 'destroy']);


require __DIR__.'/settings.php';
