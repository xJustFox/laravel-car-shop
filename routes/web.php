<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\OptionalController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])
        ->name('admin.')
        ->prefix('admin')
        ->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('/cars', CarController::class)->parameters(['cars' => 'car:slug']);
            Route::resource('/optionals', OptionalController::class)->parameters(['optionals' => 'optional:slug']);
            Route::resource('/brands', BrandController::class)->parameters(['brands' => 'brand:slug']);
        });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
