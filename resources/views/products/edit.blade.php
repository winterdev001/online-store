@extends('layouts.dashboard_contents')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @include('inc.message')
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          {{-- products --}}
          <section class="col-lg-12 connectedSortable" id="all_products">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Product Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{-- content --}}
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
                        <div class="form-group all_fields">
                          {{Form::label('Product Image')}}
                          <div class="input-group control-group ">
                            <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn input-group-append">
                              <button class="btn btn-success add_field" type="button"><img
                                  src="{{asset('images/icons/plus.svg')}}"></button>
                            </div>
                          </div>
                          <div class="cloned_field hide d-none ">
                            <div class="control-group_field input-group " style="margin-top:10px">
                              <input type="file" name="filename[]" class="form-control">
                              <div class="input-group-btn input-group-append">
                                <button class="btn btn-danger remove_field" type="button"><img
                                    src="{{asset('images/icons/x.svg')}}"> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                    <a class="btn btn-dark" href="{{ URL::previous() }}">Go Back</a>

                    {!! Form::close() !!}
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              {{--  --}}
            </section>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
    </div>
  </section>
  
@endsection


