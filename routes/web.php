<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InviteController;
use App\Http\Controllers\LinkController;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
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


Route::get('/{url_id}', [LinkController::class, 'redirectShortUrl'])->name('short.url');


require __DIR__.'/auth.php';
