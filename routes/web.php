<?php

use App\Http\Controllers\ThreadController;
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

Route::get('/', \App\Livewire\ShowThreads::class)
    ->middleware('auth')
    ->name('dashboard');

Route::get('/thread/{thread}', \App\Livewire\ShowThread::class)
    ->middleware('auth')
    ->name('thread');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');
Route::middleware('auth')->group(function () {
    Route::resource('threads', ThreadController::class)->except([
        'show', 'index', 'destroy',
    ]);
});
require __DIR__ . '/auth.php';
