<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

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



Route::get('/', [PropertyController::class, 'popularProperties'])->name('index');

Route::get('/search', [SearchController::class, 'index']);
Route::post('/search', [SearchController::class, 'search']);

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.index');

/* Route::middleware(['role:admin'])->group(function () { */
Route::get('/dashboard/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/dashboard/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/dashboard/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/dashboard/properties/{property}', [PropertyController::class, 'edit'])->name('properties.edit');
Route::put('/dashboard/properties/{property}', [PropertyController::class, 'update'])->name('properties.update');
Route::delete('/dashboard/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');

Route::get('/upload-csv', [PropertyController::class, 'uploadCSV'])->name('properties.uploadCSV');

Route::get('/dashboard/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/dashboard/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/dashboard/news', [NewsController::class, 'store'])->name('news.store');
Route::delete('/dashboard/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
Route::get('/dashboard/news/{news}', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/dashboard/news/{news}', [NewsController::class, 'update'])->name('news.update');

/* }); */


Route::get('/properties', [PropertyController::class, 'indexPublic'])->name('properties.index');
Route::get('/properties/{id}', [PropertyController::class, 'getProperty'])->name('properties.single');

Route::get('/news', [NewsController::class, 'indexPublic'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'getNews'])->name('news.single');