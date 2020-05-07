@extends('layouts.products')

@section('content')
    <div class="card card-body">
        <h1>Add Product</h1>
        {!! Form::open(['action'=>'ProductsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('product_name','Product Name')}}
                        {{Form::text('product_name','',['class'=>'form-control','placeholder'=>'Product Name'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        @if (count($fields) > 0)
                                {{Form::label('field_id','Select Field')}}
                                {{Form::select('field_id', [$select_fld], null, ['class' => 'custom-select','placeholder' => 'Choose a field...'])}}
                        @else
                            {{Form::label('field_id','Select Field')}}
                            {{Form::select('field_id', ['No Field added yet'],null,  ['class' => 'custom-select','placeholder' => 'Choose a field...'])}}
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        @if (count($categories) > 0)
                                {{Form::label('category_id','Select Category')}}
                                {{
                                Form::select('category_id',[$select_cat], null, ['class' => 'custom-select','placeholder' => 'Choose a category...'])

                                }}
                        @else
                            {{Form::label('category_id','Select Category')}}
                            {{Form::select('category_id', ['No Category added yet'],null,  ['class' => 'custom-select','placeholder' => 'Choose a category...'])}}
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('price','Price')}}
                        {{Form::number('price','',['class'=>'form-control','placeholder'=>'Price'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('quantity','Quantity')}}
                        {{Form::number('quantity','',['class'=>'form-control','placeholder'=>'Quantity'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('description','Description')}}
                        {{Form::text('description','',['class'=>'form-control','placeholder'=>'Description'])}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('seller_phone','Seller Phone')}}
                        {{Form::text('seller_phone','',['class'=>'form-control','placeholder'=>'Seller Phone'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('seller_email','Seller Email')}}
                        {{Form::text('seller_email','',['class'=>'form-control','placeholder'=>'Seller Email'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('Product Image')}}
                        <div class="input-group control-group increment" >
                            <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn input-group-append">
                                <button class="btn btn-success" type="button"><img src="{{asset('images/icons/plus.svg')}}">Add</button>
                            </div>
                            </div>
                            <div class="clone hide d-none">
                            <div class="control-group input-group" style="margin-top:10px">
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn input-group-append">
                                    <button class="btn btn-danger" type="button"><img src="{{asset('images/icons/x.svg')}}"> Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{Form::submit('Add Product',['class'=>'btn btn-primary'])}}
            <a class="btn btn-dark" href="{{ URL::previous() }}">Go Back</a>

        {!! Form::close() !!}
    </div>
@endsection


