<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ComparisonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminPropertyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\OrderAdminController;

Route::resource('/', HomeController::class)->only(['index']);
Route::resource('/search', SearchController::class)->only(['index', 'store']);

Route::resource("/register", RegisterController::class)->only(['index', 'create', 'store']);
Route::resource("/login", LoginController::class)->only(['index', 'store']);
Route::resource("/logout", LogoutController::class)->only(['index', 'store']);

Route::resource('/properties', PropertyController::class)->only(['index', "show"]);
Route::resource('/properties/compare', PropertyController::class)->only(['index', "show"]);
Route::resource('/news', NewsController::class)->only(['index', "show"]);

Route::resource('/comparisons', ComparisonController::class);
Route::resource('/cart', CartController::class)->only(['index', 'store', 'destroy']);
Route::resource('/orders', OrderController::class)->only(['index', 'show', 'store']);
Route::resource('/profile', ProfileController::class)->only(['index', 'show', 'update']);
Route::resource('/dashboard/users', UsersController::class)->only(['index']);
Route::resource('/dashboard/users/orders', OrderAdminController::class)->only(['index', 'show']);
Route::middleware(['role:admin'])->group(function () {
    Route::resource('/dashboard', DashboardController::class)->only(['index']);
    Route::resource('/dashboard/news', AdminNewsController::class)->only(['index', "create", "store", "edit", "update", "destroy"]);
    Route::resource('/dashboard/properties', AdminPropertyController::class)->only(['index', "create", "store", "edit", "update", "destroy"]);
});
