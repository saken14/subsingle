<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\IndexController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
});

Route::get('/cache', function () {
    Artisan::call('config:cache');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
    Route::post('/login_process', 'App\Http\Controllers\AuthController@login_process')->name('login_process');

    Route::get('/register', 'App\Http\Controllers\AuthController@showRegisterForm')->name('register');
    Route::post('/register_process', 'App\Http\Controllers\AuthController@register_process')->name('register_process');
});

Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('/categories/{symbol_code}', 'App\Http\Controllers\CategoryController@show_categories')->name('subcategories.show');
Route::get('/categories/{symbol_code}/{id}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');

Route::get('/educenter/{id}', 'App\Http\Controllers\EducenterController@show')->name('educenters.show');

