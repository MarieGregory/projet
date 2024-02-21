<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\TwoFactorController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'twofactor'   /*'verified'*/])->name('dashboard');

Route::middleware(['auth', 'twofactor'])->group(function () {
    Route::get('verify/resend', [TwoFactorController::class, 'resend'])->name('verify.resend');
    Route::resource('verify', TwoFactorController::class)->only(['index', 'store']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(SalonController::class)->prefix('salon')->group(function () {
    Route::get('', 'index')->name('salon');
    Route::get('/create_salon', 'create')->name('salon.create_salon');
    Route::post('create', 'store')->name('salon.store');
    Route::get('show/{id}', 'show')->name('salon.show');
    Route::get('edit/{id}', 'edit')->name('salon.edit');
    Route::put('edit/{id}', 'update')->name('salon.update');
    Route::delete('destroy/{id}', 'destroy')->name('salon.destroy');
});

require __DIR__.'/auth.php';
