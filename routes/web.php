<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('index', [UserController::class, 'index'])->name('index');
    });
    Route::prefix('grade')->name('grade.')->group(function () {
        Route::get('index', [GradeController::class, 'index'])->name('index');
    });
});

require __DIR__.'/settings.php';
