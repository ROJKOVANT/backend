<?php

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

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');

Route::get('/news/create', [App\Http\Controllers\NewsController::class, 'create'])->name('news.create');

Route::post('/news/store', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
