<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Field;

class CategoriesController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'image' => 'required',
            'image.*' => 'image|nullable|max:2048'
        ]);
        if($request->hasfile('image'))
         {
            // get filename with the extension
            $name=$request->file('image')->getClientOriginalName();
                // get just filename
            $filename = pathinfo($name, PATHINFO_FILENAME);
            // get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // filename to store
            $fileNametoStore = $filename.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('image')->storeAs('public/categories_images',$fileNametoStore);

         }else {
            $fileNametoStore = 'noimage.jpg';
        }

        // save
        $category = new Category;
        $category->category_name = ucfirst($request->input('category_name'));
        $category->image = $fileNametoStore;
        $category->save();

        return redirect('/dashboard')->with('success','Category Added Successfully');
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

        $category = Category::find($id);

        return view('categories.show')->with(['categories'=>$categories,'category'=>$category]);
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
        $category = Category::find($id);
        return view('categories.edit')->with(['category'=>$category]);
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
            'category_name' => 'required',
        ]);
        if($request->hasfile('image'))
         {

            // get filename with the extension
            $name=$request->file('image')->getClientOriginalName();
                // get just filename
            $filename = pathinfo($name, PATHINFO_FILENAME);
            // get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // filename to store
            $fileNametoStore = $filename.'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('image')->storeAs('public/categories_images',$fileNametoStore);

         }

        // save
        $category = Category::find($id);
        $category->category_name = ucfirst($request->input('category_name'));
        if ($request->hasFile('image')) {
            $category->image = $fileNametoStore;
        }
        $category->save();

        return redirect('/dashboard')->with('success','Category Updated Successfully');
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
        $category = Category::find($id);

        $category->delete();
        return redirect('/dashboard')->with('success','Category Removed');
    }

}
