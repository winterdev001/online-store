@extends('layouts.products')

@section('content')
    <div class="card card-body">
        <h1>Add Category</h1>
        {!! Form::open(['action'=>'CategoriesController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('category_name','Category Name')}}
                {{Form::text('category_name','',['class'=>'form-control','placeholder'=>'Category Name'])}}
            </div>

            {{Form::submit('Add Category',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection
