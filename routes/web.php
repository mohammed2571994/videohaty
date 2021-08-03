<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\VideoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('layouts.main');
})->name('dashboard');

Route::get('/videos/search', [VideoController::class, 'search'])->name('videos.search');
Route::post('/views', [VideoController::class, 'incrementViews'])->name('incrementViews');
Route::resource('/videos', VideoController::class);

Route::post('/likes', [LikeController::class, 'likeVideo'])->name('likes');
