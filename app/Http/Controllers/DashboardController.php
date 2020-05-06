<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Field;
use App\Carousel;
use App\Blog;
use App\User;
use PDF;

class DashboardController extends Controller
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
        $products = Product::orderBy('created_at','desc')->get();
        $fields = Field::all();
        $categories = Category::all();
        $carousels = Carousel::all();
        $blogs = Blog::all();
        return view('dashboard.index')->with(['products'=>$products,'fields'=>$fields,'categories'=>$categories,'carousels'=>$carousels,'blogs'=>$blogs]);
    }

    public function edit_prof($id){
        $user = User::find($id);
        // prevent the unauthorized user to edit the post
        if (auth()->user()->super !== 1) {
            return redirect('/dashboard')->with('error','Unauthorized Page');
        }
        return view("dashboard.edit_prof")->with('user',$user);
    }    
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_id = $request->input("category_id");
        $single_category = Category::find($category_id);

        // return view("index",compact("single_category"));
        return View::make('index', $single_category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_category = Category::find($id);

        return view("dashboard.index")->with(['single_category'=>$single_category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
        ]);

        if($request->hasfile('image'))
         {
            $this->validate($request, [
                'image' => ['required'],
                'image.*' => ['image|nullable|max:2048']
            ]);
            // get filename with the extension
            $name=$request->file('image')->getClientOriginalName();
                // get just filename
            $filename = pathinfo($name, PATHINFO_FILENAME);
            // get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // filename to store
            $fileNametoStore = $filename.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('image')->storeAs('public/users_images',$fileNametoStore);

         }

        // save
        $user =  User::find($id);
        $user->name = $request->input('name'); 
    
        if ($request->hasFile('image')) {
            $user->image = $fileNametoStore;
        }
        $user->save();

        return redirect('/dashboard')->with('success','Updated');
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

    // public function carousel(){
    //     $carousels = Carousel::all();
    //     $products = Product::all();

    //     return view('dashboard.carousel')->with(['carousels'=>$carousels,'products'=>$products]);
    // }

    public function product_pdf(){
      
        $data['title'] = 'Products List';
        $data['products'] =  Product::get();
        $data['fields'] = Field::get();
        $data['categories'] = Category::get();
    
        $pdf = PDF::loadView('dashboard.product_pdf', $data);   
      
        return $pdf->download('products.pdf');
    }

    public function user_pdf(){
      
        $data['title'] = 'Users List';
        $data['users'] =  User::get();
    
        $pdf = PDF::loadView('dashboard.user_pdf', $data);   
      
        return $pdf->download('users.pdf');
    }

}
