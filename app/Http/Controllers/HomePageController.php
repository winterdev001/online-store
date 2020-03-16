<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Field;
use DB;

class HomePageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::all();
        $fields = Field::all();
        $categories = Category::all();
        $home_categories = Category::orderBy('created_at', 'desc')->skip(0)->take(3)->get();
        $popular_products = Product::orderBy('created_at', 'asc')->skip(0)->take(8)->get();
        $recent_products = Product::orderBy('created_at', 'desc')->skip(0)->take(5)->get();
        foreach ($products as $product) {
            $product_images = $product->product_images;
        }
        return view('homepages.index')->with(['products'=>$products,'fields'=>$fields,'categories'=>$categories,'home_categories'=>$home_categories,'product_images'=>$product_images,'recent_products'=>$recent_products,'popular_products'=>$popular_products]);
    }

    public function product()
    {
        if(isset($_POST['find'])){
            $cat_id = $_POST['cat_id'];
            $price = $_POST['price'];
            $changed_price = explode("-",$price);
            $start_p = $changed_price[0];
            $last_p = $changed_price[1];
            if (!empty($cat_id) && !empty($price )) {
                $products = DB::select("SELECT * FROM products
                WHERE (category_id = $cat_id) AND (price BETWEEN $start_p AND $last_p ) ");
            } else{
                $products = DB::select("SELECT * FROM products
                WHERE (category_id = $cat_id) OR (price BETWEEN $start_p AND $last_p ) ");
            }
        }else{
            $products = Product::orderBy('created_at', 'desc')->get();
        }


        return view("homepages.product")->with(['products'=>$products]);
    }

    public function about()
    {
        return view("homepages.about");
    }

    public function contact()
    {
        return view("homepages.contact");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function category(){
        $all_categories = category::all();

        return view("homepages.category")->with(['all_categories'=>$all_categories]);
    }

    public function result(){
        $id = $_POST['category_id'];
        // $category = $_GET['category'];

        $items = \App\Product::where([
            ['category_id', 'LIKE', '%' . $id . '%']

        ])->get();



        return view('homepages.result', compact('items'));
    }

    public function products_by_cat(){
        $id = $_POST['category_id'];
        // $category = $_GET['category'];
        $cat_name = DB::table('categories')->where('id', $id)->value('category_name');
        $items = \App\Product::where([
            ['category_id', 'LIKE', '%' . $id . '%']

        ])->get();

        return view('homepages.products_by_cat', compact('items','cat_name'));
    }

    public function home_search(){
        $query = $_POST['home-search'];
        $changed_query = ucfirst($query);
        // $category = $_GET['category'];
        $cat_id = DB::table('categories')->where('category_name', $changed_query)->value('id');
        $field_id = DB::table('fields')->where('field_name', $changed_query)->value('id');

        if (count($cat_id) > 0 ) {

            $items = DB::select("SELECT * FROM products
            WHERE (`product_name` LIKE '%".$query."%') OR (`category_id` LIKE '%".$cat_id."%') ");

        } elseif(count($field_id) > 0 ){
            $items = DB::select("SELECT * FROM products
            WHERE (`product_name` LIKE '%".$query."%') OR (`field_id` LIKE '%".$field_id."%')");
        } else {
            $items = \App\Product::where([
                ['product_name', 'LIKE', '%' . $query . '%']

            ])->get();
        }

        return view('homepages.product_result', compact('items'));
    }

    public function shop_search(){
        $query = $_POST['shop_search'];
        $changed_query = ucfirst($query);
        // $category = $_GET['category'];
        $cat_id = DB::table('categories')->where('category_name', $changed_query)->value('id');
        $field_id = DB::table('fields')->where('field_name', $changed_query)->value('id');

        if (count($cat_id) > 0 ) {

            $items = DB::select("SELECT * FROM products
            WHERE (`product_name` LIKE '%".$query."%') OR (`category_id` LIKE '%".$cat_id."%') ");

        } elseif(count($field_id) > 0 ){
            $items = DB::select("SELECT * FROM products
            WHERE (`product_name` LIKE '%".$query."%') OR (`field_id` LIKE '%".$field_id."%')");
        } else {
            $items = \App\Product::where([
                ['product_name', 'LIKE', '%' . $query . '%']

            ])->get();
        }

        return view('homepages.shop_result', compact('items'));
    }
}
