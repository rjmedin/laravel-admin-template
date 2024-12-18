<?php

use App\Http\Controllers\ChangelogController;
use App\Http\Controllers\ProfileController;
use App\Jobs\DebugJob;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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

    return response()->json([
        'message' => 'DebugCache',
    ]);
});

Route::get('/debug-storage', function () {
    Storage::disk('local')->put('test_private.txt', 'Content of private storage');
    Storage::disk('public')->put('test_public.txt', 'Content of public storage');
    Storage::disk('s3')->put('test_s3.txt', 'Content of s3 storage');

    return response()->json([
        'private_content' => Storage::disk('local')->get('test_private.txt'),
        'public_content' => Storage::disk('public')->get('test_public.txt'),
        's3_content' => Storage::disk('s3')->get('test_s3.txt'),
    ]);
});

Route::get('/debug-log', function () {
    Log::info('DebugLog');

    return response()->json([
        'message' => 'DebugLog',
    ]);
});

Route::get('/debug-job', function () {
    DebugJob::dispatch();

    return response()->json([
        'message' => 'DebugJob',
    ]);
});

require __DIR__.'/auth.php';
