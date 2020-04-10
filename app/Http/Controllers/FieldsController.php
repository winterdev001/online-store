<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\Category;

class FieldsController extends Controller
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
        $categories = Category::all();
        return view('fields.create')->with(['cetegories'=>$categories]);
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
            'field_name' => 'required',
            'category_id' => 'required'
        ]);

        // save
        $field = new Field;
        $field->field_name = $request->input('field_name');
        $field->category_id = $request->input('category_id');
        $field->save();

        return redirect('/dashboard')->with('success','Field Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fields = Field::all();

        $field = Field::find($id);

        return view('fields.show')->with(['fields'=>$fields,'field'=>$field]);
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
        $categories = Category::all();
        $field = Field::find($id);
        // prevent the unauthorized user to edit the post
        // if (auth()->user()->id !== $post->user_id) {
        //     return redirect('/posts')->with('error','Unauthorized Page');
        // }
        return view('fields.edit')->with(['field'=>$field,'categories'=>$categories]);
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
            'field_name' => 'required'
        ]);

        // save
        $field =  Field::find($id);
        $field->field_name = $request->input('field_name');
        $field->category_id = $request->input('category_id');
        $field->save();

        return redirect('/dashboard')->with('success','Field Updated Successfully');
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
        $field = Field::find($id);

        $field->delete();
        return redirect('/dashboard')->with('success','Field Removed');
    }
}
