@extends('layouts.products')

@section('content')
    <div class="card card-body">
        <h1>Update Product</h1>
        {!! Form::open(['action'=>['ProductsController@update',$product->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('product_name','Product Name')}}
                {{Form::text('product_name',$product->product_name,['class'=>'form-control','placeholder'=>'Product Name'])}}
            </div>
            <div class="form-group">
                @if (count($fields) > 0)
                        {{Form::label('field_id','Select Field')}}
                    @foreach ($fields as $field)
                    @if ($field->id == $product->field_id)
                        {{Form::select('field_id', [$field->field_name], ['class' => 'custom-select','placeholder' => 'Choose a field...'])}}
                    @endif
                    @endforeach
                @else
                    {{Form::label('field_id','Select Field')}}
                    {{Form::select('field_id', ['No Field added yet'],null,  ['class' => 'custom-select','placeholder' => 'Choose a field...'])}}
                    {{-- <p>.</p> --}}
                @endif
            </div>
            <div class="form-group">
                @if (count($categories) > 0)
                        {{Form::label('category_id','Select Category')}}
                    {{-- @foreach ($categories as $category) --}}
                        {{
                        Form::select('category_id',[$select_cat], null, ['class' => 'custom-select','placeholder' => 'Choose a category...'])

                        }}
                    {{-- @endforeach --}}
                @else
                    {{Form::label('category_id','Select Category')}}
                    {{Form::select('category_id', ['No Category added yet'],null,  ['class' => 'custom-select','placeholder' => 'Choose a category...'])}}
                    {{-- <p>.</p> --}}
                @endif
            </div>

            <div class="form-group">
                {{Form::label('price','Price')}}
                {{Form::number('price',$product->price,['class'=>'form-control','placeholder'=>'Price'])}}
            </div>
            <div class="form-group">
                {{Form::label('quantity','Quantity')}}
                {{Form::number('quantity',$product->quantity,['class'=>'form-control','placeholder'=>'Quantity'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Update Product',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection

