<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\DashboardController;




Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logedin', [LoginController::class, 'logedin'])->name('logedin');
Route::get('/signup', [LoginController::class, 'signup'])->name('signup');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/features', [HomeController::class, 'features'])->name('features');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-and-conditions', [HomeController::class, 'termsAndConditions'])->name('terms.conditions');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');



Route::middleware('auth')->group(function () {
	Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
	Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');
	Route::get('/qrcode', [DashboardController::class, 'qrcode'])->name('qrcode');
	Route::get('/bio', [DashboardController::class, 'bio'])->name('bio');
	Route::get('/team', [DashboardController::class, 'team'])->name('team');
	Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');
	Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
});