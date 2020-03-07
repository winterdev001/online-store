@extends('layouts.products')

@section('content')
    <div class="card card-body">
        <h1>Add Field</h1>
        {!! Form::open(['action'=>'FieldsController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('field_name','Field Name')}}
                {{Form::text('field_name','',['class'=>'form-control','placeholder'=>'Field Name'])}}
            </div>

            {{Form::submit('Add Field',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection
