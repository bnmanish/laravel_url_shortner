<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InviteController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\DashboardController;





Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // invite routes
    Route::middleware(['role:Super Admin,Admin'])->group(function () {
        Route::get('/invite', [InviteController::class, 'index'])->name('invite.index');
        Route::post('/invite-store', [InviteController::class, 'store'])->name('invite.store');
    });

    Route::middleware(['role:Admin,Member'])->group(function () {
        Route::get('/link', [LinkController::class, 'index'])->name('create.link');
        Route::post('/store-link', [LinkController::class, 'store'])->name('store.link');

    });
});

require __DIR__.'/auth.php';

Route::get('/{url_id}', [LinkController::class, 'redirectShortUrl'])->name('short.url');


