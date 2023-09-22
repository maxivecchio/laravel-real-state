<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\Message;
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
    return view('index');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/story', function () {
    return view('our-story');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::post('/contact', function (Request $request) {
    $data = request()->merge([
        'ip_address' => request()->ip()
    ])->toArray();
    Message::create($data);
    return redirect('/');
});
