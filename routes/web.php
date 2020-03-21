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


Route::match(['get', 'post','head'],'/','HomePageController@index');
Route::match(['get', 'post'],'home/product','HomePageController@product');
Route::get('home/about','HomePageController@about');
Route::get('home/contact','HomePageController@contact');
Route::match(['get', 'post'],'homepages/result','HomePageController@result');
Route::match(['get', 'post'],'homepages/product_result','HomePageController@home_search');
Route::match(['get', 'post'],'homepages/shop_result','HomePageController@shop_search');
Route::match(['get', 'post'],'homepages/products_by_cat','HomePageController@products_by_cat');
Route::match(['get', 'post'],'home/blog/{id}','HomePageController@blog');
Route::match(['get', 'post'],'homepages/all_blogs','HomePageController@blog_by_cat');

Route::resource('dashboard','DashboardController');
Route::get('carousells','CarouselsController@carousel');

Route::resource('carousel','CarouselsController');

Route::resource('blogs','BlogsController');

Route::resource('comments','CommentsController');

Route::resource('messages','MessagesController');

Route::resource('blogcategories','BlogCategoriesController');


Route::resource('products','ProductsController');

Route::resource('categories','CategoriesController');

Route::resource('fields','FieldsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UsersController');
