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
    return view('index');
});

Route::view('/dashboard','dashboard');

Route::view('/sec', 'section');

Route::view('/ext', 'extra');

Route::view('/cpanel','cpan.admin-dashboard');

Route::get('/signin', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('register');
});

Route::post('/resultl', function () {
    return ('You logedin');
});
Route::post('/resultr', function () {
    return ('Your information stored');
});