<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
//
//Route::get('/dashboard', function () {
//    return Inertia::render('Welcome');
//});

Route::get('/', [\App\Http\Controllers\TweetController::class, 'index'])->name('tweets.index');
Route::post('/tweets', [\App\Http\Controllers\TweetController::class, 'store'])->name('tweets.store');
Route::delete('/tweets/{id}', [\App\Http\Controllers\TweetController::class, 'destroy'])->name('tweets.destroy');

require __DIR__.'/auth.php';
