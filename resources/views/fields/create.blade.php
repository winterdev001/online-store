@extends('layouts.products')

@section('content')
    <div class="card card-body">
        <h1>Add Field</h1>
        {!! Form::open(['action'=>'FieldsController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('field_name','Field Name')}}
                {{Form::text('field_name','',['class'=>'form-control','placeholder'=>'Field Name'])}}
            </div>
            <div class="form-group">                
                {{Form::label('category_id','Select Category')}}
                <select class="form-control" name="category_id">
                  <option>Select Category</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                  @endforeach
                </select>
            </div>
            
            {{Form::submit('Add Field',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection
