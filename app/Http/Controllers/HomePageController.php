<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Field;
use App\Carousel;
use App\Blog;
use App\Comment;
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
        $carousels = Carousel::all();
        $comments = Comment::all();
        $home_blogs = Blog::orderBy('created_at', 'desc')->skip(0)->take(3)->get();
        $home_categories = Category::orderBy('created_at', 'desc')->skip(0)->take(3)->get();
        $popular_products = Product::orderBy('created_at', 'asc')->skip(0)->take(8)->get();
        $recent_products = Product::orderBy('created_at', 'desc')->skip(0)->take(5)->get();

        if(isset($_POST['view_comments'])){
            $product_id =$_POST['data1'];
            $that_product = Product::find($product_id);
        }else{
            $that_product = Product::find(1);
        }


        foreach ($products as $product) {
            $product_images = $product->product_images;
        }
        return view('homepages.index')->with(['products'=>$products,'fields'=>$fields,'categories'=>$categories,
                                              'home_categories'=>$home_categories,'recent_products'=>$recent_products,'popular_products'=>$popular_products,
                                              'carousels'=>$carousels,'home_blogs'=>$home_blogs,'comments'=>$comments,'that_product'=>$that_product]);
    }

    public function product()
    {
        if(isset($_POST['find'])){
            if (!empty($_POST['cat_id'])) {
                $cat_id = $_POST['cat_id'];
            }else{
                $cat_id = null;
            }

            if (!empty($_POST['price'])) {
                $price = $_POST['price'];
            }else{
                $price = null;
            }
            
            // $price = $_POST['price'];
            $changed_price = explode("-",$price);
            $start_p = $changed_price[0];
            $last_p = $changed_price[1];
            if (!empty($cat_id) && !empty($price )) {
                // $products = DB::select("SELECT * FROM products
                // WHERE (category_id = $cat_id) AND (price BETWEEN $start_p AND $last_p ) ");
                $products = Product::where('category_id', '=', $cat_id)->whereBetween('price', [$start_p, $last_p])->paginate(12);
            } 
            else{
                // $products = DB::select("SELECT * FROM products
                // WHERE (category_id = $cat_id) OR (price BETWEEN $start_p AND $last_p ) ");
                $products = Product::where('category_id', '=', $cat_id)->orWhereBetween('price', [$start_p, $last_p])->paginate(12);
            }
           
        }else{
            $products = Product::orderBy('created_at', 'desc')->paginate(12);
        }

        // filter by category
        if(isset($_POST['filter_by_cat'])){
            $id = $_POST['category_id'];
            // $category = $_GET['category'];
    
            $products = \App\Product::where('category_id', $id )->paginate(12);  
        }

        // filter by field
        if(isset($_POST['filter_by_field'])){
            $id = $_POST['field_id'];
    
            $products = \App\Product::where('field_id',$id)->paginate(12);  
        }
        // $products = Product::orderBy('created_at', 'desc')->paginate(12);
        $categories = Category::all();
        $fields = Field::all();

        foreach ($fields as $key => $fld) {
            
        }

        foreach ($products as $key => $item) {
            if ($fld->id == $item->field_id) {
                $cat_child = $fld->field_name;
            }
        }


        return view("homepages.product")->with(['products'=>$products,'categories'=>$categories,'fields'=>$fields]);
    }

    public function about()
    {
        return view("homepages.about");
    }

    public function contact()
    {
        return view("homepages.contact");
    }

    public function test()
    {
        return view("homepages.test");
    }

    public function blog($id)
    {
        $blog = Blog::find($id);
        $recent_products = Product::orderBy('created_at', 'desc')->skip(0)->take(3)->get();
        $comments = Comment::all();

        return view("homepages.blog")->with(['blog'=>$blog,'comments'=>$comments]);
    }

    public function blog_by_cat(){

        if (isset($_POST['blog'])) {
            $id = $_POST['category_id'];
            // $category = $_GET['category'];
            $cat_name = DB::table('blog_categories')->where('id', $id)->value('category_name');
            $blogs = \App\Blog::where([
                ['category_id', 'LIKE', '%' . $id . '%']

            ])->get();
        } else {
            $blogs = Blog::orderBy('created_at','desc')->paginate(20);
        }



        return view('homepages.all_blogs', compact('blogs','cat_name'));
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
