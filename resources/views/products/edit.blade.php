@extends('layouts.products')

@section('content')
    <div class="card card-body">
        <h1>Update Product</h1>
        {!! Form::open(['action'=>['ProductsController@update',$product->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('product_name','Product Name')}}
                {{Form::text('product_name',$product->product_name,['class'=>'form-control','placeholder'=>'Product Name'])}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('field_id','Select Field')}}
                <select class="form-control" name="field_id">
                  @foreach ($fields as $field)
                      @if ($field->id == $product->field_id)
                          <option value="{{ $product->field_id }}">{{$field->field_name}}</option>
                      @endif
                  @endforeach

                  @foreach ($fields as $field)
                  <option value="{{ $field->id }}"> {{ $field->field_name }} </option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('category_id','Select Category')}}
                <select class="form-control" name="category_id">

                  @foreach ($categories as $category)
                      @if ($category->id == $product->category_id)
                          <option value="{{ $product->category_id }}">{{$category->category_name}}</option>
                      @endif
                  @endforeach

                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('price','Price')}}
                {{Form::number('price',$product->price,['class'=>'form-control','placeholder'=>'Price'])}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('quantity','Quantity')}}
                {{Form::number('quantity',$product->quantity,['class'=>'form-control','placeholder'=>'Quantity'])}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('description','Description')}}
                {{Form::text('description',$product->description,['class'=>'form-control','placeholder'=>'Description'])}}
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('seller_phone','Seller Phone')}}
                {{Form::text('seller_phone',$product->seller_phone,['class'=>'form-control','placeholder'=>'Seller Phone'])}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('seller_email','Seller Email')}}
                {{Form::text('seller_email',$product->seller_email,['class'=>'form-control','placeholder'=>'Seller Email'])}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('Product Image')}}
                <div class="input-group control-group incremented_field">
                  <input type="file" name="filename[]" class="form-control">
                  <div class="input-group-btn input-group-append">
                    <button class="btn btn-success add_field" type="button"><img
                        src="{{asset('images/icons/plus.svg')}}">Add</button>
                  </div>
                </div>
                <div class="cloned_field hide d-none">
                  <div class="control-group_field input-group" style="margin-top:10px">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-btn input-group-append">
                      <button class="btn btn-danger remove_field" type="button"><img
                          src="{{asset('images/icons/x.svg')}}"> Remove</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{Form::hidden('_method','PUT')}}
          {{Form::submit('Update',['class'=>'btn btn-primary'])}}

          {!! Form::close() !!}
    </div>
@endsection



