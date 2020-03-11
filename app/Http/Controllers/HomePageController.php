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
        return view("homepages.product");
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
}
