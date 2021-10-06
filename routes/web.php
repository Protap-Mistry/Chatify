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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile','ProfileController@index')->name('profile');
Route::put('profile-update','ProfileController@updateProfile')->name('profile.update');
Route::get('password','ProfileController@passwordIndex')->name('password');
Route::put('password-update','ProfileController@updatePassword')->name('password.update');
