<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\NewsController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');

Route::get('/properties/{property}', [PropertyController::class, 'edit'])->name('properties.edit');
Route::put('/properties/{property}', [PropertyController::class, 'update'])->name('properties.update');


Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');

/* Route::middleware(['role:admin'])->group(function () { */
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    Route::get('/news/{news}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');
/* }); */

Route::post('/properties/upload', 'PropertyController@uploadProperties')->name('properties.upload');