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

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/items', 'ItemsController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/users', 'UsersController');
    Route::resource('/orders', 'OrdersController');
});
