<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\BlogCategory;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $blog_categories = BlogCategory::all();

        return view('blogs.index')->with(['blogs'=>$blogs,'blog_categories'=>$blog_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
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
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
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
            $path = $request->file('image')->storeAs('public/blogs_images',$fileNametoStore);

         }else {
            $fileNametoStore = 'noimage.jpg';
        }

        // save
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->category_id = $request->input('category_id');
        $blog->image = $fileNametoStore;
        $blog->save();

        return redirect('/blogs')->with('success','Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::all();

        $blog = Blog::find($id);

        return view('blogs.show')->with(['blogs'=>$blogs,'blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit')->with(['blog'=>$blog]);
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
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);
        if($request->hasfile('image'))
         {
             $this->validate($request,[
                'image' => 'required',
                'image.*' => 'image|nullable|max:2048'
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
            $path = $request->file('image')->storeAs('public/blogs_images',$fileNametoStore);

         }

        // save
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->category_id = $request->input('category_id');
        if ($request->hasFile('image')) {
            $blog->image = $fileNametoStore;
        }
        $blog->save();

        return redirect('/blogs')->with('success','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();
        return redirect('/blogs')->with('success','Blog Removed');
    }
}
