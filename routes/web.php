<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\DashboardController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/features', [HomeController::class, 'features'])->name('features');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-and-conditions', [HomeController::class, 'termsAndConditions'])->name('terms.conditions');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');




Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');
Route::get('/qrcode', [DashboardController::class, 'qrcode'])->name('qrcode');
Route::get('/bio', [DashboardController::class, 'bio'])->name('bio');
Route::get('/team', [DashboardController::class, 'team'])->name('team');
Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');



// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
//     // invite routes
//     Route::middleware(['role:Super Admin,Admin'])->group(function () {
//         Route::get('/invite', [InviteController::class, 'index'])->name('invite.index');
//         Route::post('/invite-store', [InviteController::class, 'store'])->name('invite.store');
//     });

//     Route::middleware(['role:Admin,Member'])->group(function () {
//         Route::get('/link', [LinkController::class, 'index'])->name('create.link');
//         Route::post('/store-link', [LinkController::class, 'store'])->name('store.link');

//     });
// });

// require __DIR__.'/auth.php';

// Route::get('/{url_id}', [LinkController::class, 'redirectShortUrl'])->name('short.url');


