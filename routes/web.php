<?php

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

Route::get('/', function() {
    return redirect(route('login'));
});

Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
});
Route::get('/dashboard', 'DashboardController@home')->name('dashboard');
Route::get('/home', 'DashboardController@home')->name('home');
Route::get('/about', 'DashboardController@about')->name('about');
Route::get('/faq', 'DashboardController@faq')->name('faq');
Route::get('/contact', 'DashboardController@contact')->name('contact');
Route::get('/indekos', 'DashboardController@indekos')->name('indekos');
Route::get('/laptop', 'DashboardController@laptop')->name('laptop');
Route::get('/book', 'DashboardController@book')->name('book');
Route::get('/login', 'DashboardController@login')->name('login');
Route::get('/cart', 'DashboardController@cart')->name('cart');



