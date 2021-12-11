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
    return view('home');
});

Route::redirect('/home', '/');

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::view('/events', 'events');

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallary', function () {
    return view('gallary');
});

Route::get('/contact', function () {
    return view('contact');
});



// Admin Routes
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');