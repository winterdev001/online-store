<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Field;
use DB;
// use SweetAlert;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all products order by data created
        $products = Product::orderBy('created_at','desc')->paginate(10);
        // $products = Product::all();
        $categories = Category::all();
        $fields = Field::all();

        // total
        $total = DB::table("products")->get()->sum("total");



        return view('products.index')->with(['products'=>$products,'categories'=>$categories,'fields'=>$fields,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $select_cat = Category::pluck('category_name', 'id');
        // fetch all fields
        $fields = Field::all();
        $select_fld = Field::pluck('field_name', 'id');

        $categories = DB::table('categories')->pluck('id', 'category_name');
        return view('products.create')->with(['categories'=>$categories,'fields'=>$fields,'categories'=>$categories,'select_fld'=>$select_fld,'select_cat'=>$select_cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // fetch all categories
        $categories = Category::all();
        // fetch all fields
        $fields = Field::all();
        //validation
        $this->validate($request, [
            'product_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'filename' => 'required',
            'filename.*' => 'image|nullable|max:2048'

        ]);
        // 'cover_image' => 'image|nullable|max:1999'
        // if ($request->has('product_images'))
        // {
        //     //Handle File Upload

        //     $product_images = [];
        //     foreach ($request->file('product_images') as $key => $file)
        //     {
        //         // Get FileName
        //         $filenameWithExt = $file->getClientOriginalName();
        //         //Get just filename
        //         $filename = pathinfo( $filenameWithExt, PATHINFO_FILENAME);
        //         //Get just extension
        //         $extension = $file->getClientOriginalExtension();
        //         //Filename to Store
        //         $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //         //Upload Image
        //         $path = $file->storeAs('public/product_images',$fileNameToStore);

        //         array_push($product_images, $fileNameToStore);
        //     }

        //     $fileNameToStore = serialize($product_images);
        // }
        // else
        // {
        //     $fileNameToStore='noimage.jpg';
        // }
        // handle file upload
        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                // get filename with the extension
                $name=$image->getClientOriginalName();
                 // get just filename
                $filename = pathinfo($name, PATHINFO_FILENAME);
                // get just ext
                $extension = $image->getClientOriginalExtension();
                // filename to store
                $fileNametoStore = $filename.'_'.time().'.'.$extension;
                // upload image
                $path = $image->storeAs('public/cover_images',$fileNametoStore);

                // $image->move(public_path().'/images/', $name);
                $data[] = $fileNametoStore;

            }
         }else {
            $fileNametoStore = 'noimage.jpg';
            $data[] = $fileNametoStore;
        }

        // save pproduct
        $product = new Product;
        $product->product_name = $request->input('product_name');
        $product->field_id = $request->input('field_id');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->total = $product->price * $product->quantity;
        $product->description = $request->input('description');
        $product->status = 0;
        $product->seller_phone = $request->input('seller_phone');
        $product->seller_email = $request->input('seller_email');
        $product->product_images = json_encode($data);;
        $product->user_id = auth()->user()->id;
        $product->save();


        return redirect('/dashboard')->with('success', 'Product Registered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $fields = Field::all();

        $product = Product::find($id);
        return view('products.show')->with(['product'=>$product,'fields'=>$fields,'categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->super !== 1) {
            return redirect('/dashboard')->with('error','Unauthorized Page');
        }
        // fetch all categories
        $categories = Category::all();
        $select_cat = Category::pluck('category_name', 'id');
        // fetch all fields
        $fields = Field::all();
        $select_fld = Field::pluck('field_name', 'id');
        $product = Product::find($id);

        return view('products.edit')->with(['product'=>$product,'fields'=>$fields,'categories'=>$categories,'select_fld'=>$select_fld,'select_cat'=>$select_cat]);
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
        // fetch all categories
        $categories = Category::all();
        // fetch all fields
        $fields = Field::all();
        //validation
        $this->validate($request, [
            'product_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',


        ]);
        // 'filename' => 'required',
        // 'filename.*' => 'image|nullable|max:2048'

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                // get filename with the extension
                $name=$image->getClientOriginalName();
                 // get just filename
                $filename = pathinfo($name, PATHINFO_FILENAME);
                // get just ext
                $extension = $image->getClientOriginalExtension();
                // filename to store
                $fileNametoStore = $filename.'_'.time().'.'.$extension;
                // upload image
                $path = $image->storeAs('public/cover_images',$fileNametoStore);

                // $image->move(public_path().'/images/', $name);
                $data[] = $fileNametoStore;

            }
         }


        // save pproduct
        $product = Product::find($id);
        $product->product_name = $request->input('product_name');
        $product->field_id = $request->input('field_id');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->total = $product->price * $product->quantity;
        $product->description = $request->input('description');
        $product->status = 0;
        $product->seller_phone = $request->input('seller_phone');
        $product->seller_email = $request->input('seller_email');
        if ($request->hasFile('filename')) {
            $product->product_images = json_encode($data);
        }
        $product->user_id = auth()->user()->id;
        $product->save();

        return redirect('/dashboard')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->super !== 1){
            return redirect('/dashboard')->with('error','You can not delete this item');
        }
        $product = Product::find($id);

        $product->delete();
        return redirect('/dashboard')->with('success','product Removed');
    }
}
