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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::get('home/product','HomeController@product');
Route::get('home/about','HomeController@about');

Route::resource('products','ProductsController');

Route::resource('categories','CategoriesController');

Route::resource('fields','FieldsController');
