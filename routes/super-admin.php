<?php

use App\Http\Controllers\SuperAdmin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SuperAdmin\Auth\PasswordController;
use App\Http\Controllers\SuperAdmin\ProfileController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('super-admin')->name('super-admin.')->group(function () {

    Route::middleware('guest:superadmin')->group(function () {

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    });

    Route::middleware('auth:superadmin')->group(function () {
        Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });
});
