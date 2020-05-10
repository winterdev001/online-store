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
// Route::get('home/product_details/{id}','HomePageController@product_details')->name('details');
Route::get('home/removed','HomePageController@deleted_products')->name('d_products');
Route::match(['get', 'post'],'home/product_details/{id}', function($id){
    if (App\Product::find($id) === null)
    {
        // return abort(404);
        // return back();
        return redirect()->route('d_products');
    } else {
        $products = App\Product::all();
        $fields = App\Field::all();
        $categories = App\Category::all();
        $product = App\Product::find($id);
        $comments = App\Comment::all();

        return view("homepages.product_details")->with(['products'=>$products,'categories'=>$categories,'fields'=>$fields,'product'=>$product,'comments'=>$comments]);
    }
});
// Route::match(['get', 'post'],'home/product_details/{id}','HomePageController@product_details');
Route::match(['get', 'post'],'homepages/all_blogs','HomePageController@blog_by_cat');

Route::resource('dashboard','DashboardController');
Route::match(['get', 'post'],'dashboard/edit_prof/{id}','DashboardController@edit_prof');
Route::match(['get', 'post','put'],'dashboard/edit_profile','DashboardController@edit_profile');
Route::match(['get', 'post'],'dashboard/users_post','DashboardController@users_posts');
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

Route::get('/home/test', 'HomePageController@test');

Route::resource('users','UsersController');

// pdf
Route::get('product_pdf', 'DashboardController@product_pdf');
Route::get('user_pdf', 'DashboardController@user_pdf');
