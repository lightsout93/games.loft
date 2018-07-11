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

Route::get('/', 'HomeController@index')->name('/');
Route::get('about', 'HomeController@about')->name('about');
Route::get('item/{id}', 'HomeController@show')->name('item.show');
Route::get('category/{id}', 'HomeController@category')->name('category.show');
Route::get('/order', 'HomeController@order')->name('order');
Route::post('/mail', 'ProfileController@mail');

Route::group(['middleware'	=>	'auth'], function(){
    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile', 'ProfileController@store');
    Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware'	=>	'guest'], function(){
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register');
    Route::get('/login','AuthController@loginForm')->name('login');
    Route::post('/login', 'AuthController@login');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'	=>	'admin'], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/items', 'ItemsController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/users', 'UsersController');
    Route::resource('/orders', 'OrdersController');
});
