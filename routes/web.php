<?php

declare(strict_types=1);

use App\Http\Controllers\LyricsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LyricsController::class, 'index'])->name('form');

Route::get('/completed', [LyricsController::class, 'completed'])->name('completed');
