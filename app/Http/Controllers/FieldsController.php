<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;

class FieldsController extends Controller
{
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
        return view('fields.create');
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
            'field_name' => 'required'
        ]);

        // save
        $field = new Field;
        $field->field_name = $request->input('field_name');
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
        $field = Field::find($id);
        // prevent the unauthorized user to edit the post
        // if (auth()->user()->id !== $post->user_id) {
        //     return redirect('/posts')->with('error','Unauthorized Page');
        // }
        return view('fields.edit')->with('field',$field);
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
        $field = Field::find($id);

        $field->delete();
        return redirect('/dashboard')->with('success','Field Removed');
    }
}
