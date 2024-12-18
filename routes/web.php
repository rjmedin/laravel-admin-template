<?php

use App\Http\Controllers\ChangelogController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Benchmark;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/changelog', [ChangelogController::class, 'show'])->name('changelog.show');

Route::get('/debug-sentry', function () {
    $message = 'Error message '.date('Y-m-d H:i:s');
    throw new Exception($message);
});

Route::get('/debug-cache', function () {
    Benchmark::dd([
        'Without Cache' => function () {
            return User::all();
        },
        'With Cache' => function () {
            return Cache::remember('users', 60, function () {
                return User::all();
            });
        },
    ]);
});

require __DIR__.'/auth.php';
