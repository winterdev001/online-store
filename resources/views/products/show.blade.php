@extends('layouts.products')

@section('content')
  <a href="/products" class="btn btn-default">Go Back</a>
  <h1>Product</h1>
  <div class="card col-8" >
    <div class="row">
        <div class="col-md-8">
            <div class="card-body" style="border-right: 2px solid grey !important">
                <p>Product Name: {{$product->product_name}}</p>
                <p>Field: @foreach ($fields as $field)
                            @if ($product->field_id == $field->id)
                                {{ $field->field_name }}
                                @endif
                            @endforeach
                </p>
                <p>Category : @foreach ($categories as $category)
                                    @if ($product->category_id == $category->id)
                                        {{ $category->category_name }}
                                    @endif
                                @endforeach
                </p>
                <p>Price: {{$product->price}}</p>
                <p>Quantity: {{$product->quantity}}</p>
                <p>Status: @if ($product->status == 0)
                            <span>Available</span>
                        @else
                        <span>Sold Out</span> 
                        @endif
                </p>
                <p>Seller Info: {{$product->seller_phone}} <br> {{$product->seller_email}}</p>
                <p>Description: {{$product->description}}</p>
            </div>
            
        </div>
        <div class="col-md-4"> 
            @foreach (json_decode($product->product_images) as $item)
            <img style="width:50%" height="25%" src="/storage/cover_images/{{$item}}" class="text-center" alt="{{$product->product_name}}">
            <hr>
            @endforeach
        </div>
    </div>   

    <a href="/products/{{$product->id}}/edit" class="btn btn-light ">Edit</a>
      {!!Form::open(['action'=>['ProductsController@destroy',$product->id],'method'=>'POST','class'=>' '])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger btn-block'])}}
      {!!Form::close()!!}
  </div>
@endsection
