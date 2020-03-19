<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Carousel;

class CarouselsController extends Controller
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
        return view('carousels.create');
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
            'first_title' => 'required',
            'second_title' => 'required',
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
            $path = $request->file('image')->storeAs('public/carousels_images',$fileNametoStore);

         }else {
            $fileNametoStore = 'noimage.jpg';
        }

        // save
        $carousel = new Carousel;
        $carousel->first_title = $request->input('first_title');
        $carousel->second_title = $request->input('second_title');
        $carousel->image = $fileNametoStore;
        $carousel->save();

        return redirect('/dashboard')->with('success','Carousel Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carousels = Carousel::all();

        $carousel = Carousel::find($id);

        return view('carousels.show')->with(['carousels'=>$carousels,'carousel'=>$carousel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = Carousel::find($id);
        return view('carousels.edit')->with(['carousel'=>$carousel]);
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
            'first_title' => 'required',
            'second_title' => 'required',
        ]);

        if($request->hasfile('image'))
         {
            $this->validate($request, [
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
            $path = $request->file('image')->storeAs('public/carousels_images',$fileNametoStore);

         }else {
            $fileNametoStore = 'noimage.jpg';
        }

        // save
        $carousel = Carousel::find($id);
        $carousel->first_title = $request->input('first_title');
        $carousel->second_title = $request->input('second_title');
        if ($request->hasFile('image')) {
            $carousel->image = $fileNametoStore;
        }
        $carousel->save();

        return redirect('/carousells')->with('success','Carousel Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carourel::find($id);

        $carousel->delete();
        return redirect('/dashboard')->with('success','Carourel Removed');
    }

    public function carousel(){
        $carousels = Carousel::all();

        return view('dashboard.carousel')->with(['carousels'=>$carousels]);
    }
}
