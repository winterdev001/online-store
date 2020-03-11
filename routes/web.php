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


Route::get('/','HomePageController@index');
Route::get('home/product','HomePageController@product');
Route::get('home/about','HomePageController@about');
Route::get('home/contact','HomePageController@contact');

Route::resource('dashboard','DashboardController');


Route::resource('products','ProductsController');

Route::resource('categories','CategoriesController');
// Route::get('categories', 'CategoriesController@index');
// Route::get('categories/{id}/edit', 'CategoriesController@edit');
// Route::post('categories/store', 'CategoriesController@store');
// Route::get('categories/delete/{id}', 'CategoriesController@destroy');
// Route::match(['put', 'patch'], '/categories/update/{id}','CategoriesController@update');

Route::resource('fields','FieldsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
