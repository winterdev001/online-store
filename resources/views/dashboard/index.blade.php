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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{count($products)}}</h3>

              <p>All Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#all_products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{count(App\Comment::all())}}</sup></h3>

              <p>Comments</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/comments" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{count(App\Message::all())}}</h3>

              <p>Messages</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/messages" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{count($blogs)}}</h3>

              <p>Blogs</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="/blogs" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      @include('inc.message')
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        {{-- products --}}
        <section class="col-lg-12 connectedSortable table-responsive" id="all_products">
          <!-- Custom tabs (Charts with tabs)-->
          <ul class="nav nav-pills mb-2">
            <li class="nav-item">
              <a class="nav-link active">All Products</a>
            </li>
            <li class="nav-item">
              <a class=" nav-link" data-toggle="modal" data-target="#add_product">
                Add Product
              </a>
            </li>
            <li class="nav-item">
              <a class=" nav-link" data-toggle="modal" data-target="#add_field">
                Add Field
              </a>
            </li>
            <li class="nav-item">
              <a class=" nav-link" data-toggle="modal" data-target="#add_category">
                Add Category
              </a>
            </li>
          </ul>
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-10">
                  <h3 class="card-title">All Products</h3>
                </div>
                <div class="col-md-2">
                  <a href="{{ url('product_pdf') }}" class="btn btn-success mb-2">Export PDF</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Field</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <th>{{ $product->product_name }}</th>
                      <td>
                        @foreach ($fields as $field)
                        @if ($product->field_id == $field->id)
                        {{ $field->field_name }}
                        @endif
                        @endforeach
                      </td>
                      <td>
                        @foreach ($categories as $category)
                        @if ($product->category_id == $category->id)
                        {{ $category->category_name }}
                        @endif
                        @endforeach
                      </td>
                      <td>{{number_format($product->price)}} Rwf</td>
                      <td>{{ $product->quantity }}</td>
                      <td>{{number_format($product->total)}} Rwf</td>
                      <td>
                          @if (auth()->user()->super == 1)
                          <a href="/products/{{$product->id}}/edit" class="btn btn-default"><i class="fa fa-pen"></i></a>
                          @else
                          @endif
                          |<a href="/products/{{$product->id}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                      </td>
                      {{-- <td><a href="/products/{{$product->id}}" class="btn btn-warning">Show</a>
                      </td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </section>
        {{-- categories --}}

        <section class="col-lg-6 connectedSortable" id="all_categories">
          <!-- Custom tabs (Charts with tabs)-->
          <ul class="nav nav-pills mb-2">
            <li class="nav-item">
              <a class="nav-link active">All Categories</a>
            </li>
            <li class="nav-item">
              <a class=" nav-link" data-toggle="modal" data-target="#add_category">
                Add Category
              </a>
            </li>
          </ul>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Categories</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="category_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                  <tr>
                    <th>{{ $category->category_name }}</th>
                    <td>
                        @if (auth()->user()->super == 1)
                            <a href="/categories/{{$category->id}}/edit" class="btn btn-default"><i class="fa fa-pen"></i></a>
                        @else
                        @endif
                        |<a href="/categories/{{$category->id}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                    </td>
                    {{-- @if (!Auth::guest())
                          @if (Auth::user()->id == $category->user_id)
                            <a href="/posts/{{$category->id}}/edit" class="btn btn-default">Edit</a>
                    {!!Form::open(['action'=>['PostsController@destroy',$category->id],'method'=>'POST','class'=>'float-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                    {!!Form::close()!!}
                    @endif
                    @endif --}}
                    {{-- <td><button id="edit-category" class="btn btn-light " data-whatever="{{$category->category_name}}"
                    data-catId="{{$category->id}}" data-toggle="modal" data-target="#edit_category"
                    value="{{$category->id}}">Edit</button></td> --}}

                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </section>

        {{-- Fields --}}
        <section class="col-lg-6 connectedSortable" id="all_fields">
          <!-- Custom tabs (Charts with tabs)-->
          <ul class="nav nav-pills mb-2">
            <li class="nav-item">
              <a class="nav-link active">All Fields</a>
            </li>
            <li class="nav-item">
              <a class=" nav-link" data-toggle="modal" data-target="#add_field">
                Add Field
              </a>
            </li>
          </ul>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Fields</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="field_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Field Name</th>
                    <th>Category</th>
                    @if (auth()->user()->super == 1)
                        <th>Action</th>
                    @else
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach ($fields as $field)
                  <tr>
                    <th>{{ $field->field_name }}</th>
                    <td>
                      @foreach ($categories as $category)
                          @if ($category->id == $field->category_id)
                              {{$category->category_name}}
                          @endif
                      @endforeach
                    </td>
                    @if (auth()->user()->super == 1)
                        <td>
                            <form action="{{route('fields.destroy',$field->id) }}" method="POST">
                                <a href="/fields/{{$field->id}}/edit" class="btn btn-default"><i class="fa fa-pen"></i></a>|

                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this item?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    @else
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </section>
        <!-- /.Left col -->

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

{{-- add product modal --}}
<div class="modal fade" id="add_product">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          {!!
          Form::open(['action'=>'ProductsController@store','method'=>'POST','enctype'=>'multipart/form-data'])
          !!}
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                {{Form::label('product_name','Product Name')}}
                {{Form::text('product_name','',['class'=>'form-control','placeholder'=>'Product Name'])}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{-- @if (count($fields) > 0)
                                    {{Form::label('field_id','Select Field')}}
                {{Form::select('field_id', [$select_fld], null, ['class' => 'custom-select','placeholder' => 'Choose a field...'])}}
                @else
                {{Form::label('field_id','Select Field')}}
                {{Form::select('field_id', ['No Field added yet'],null,  ['class' => 'custom-select','placeholder' => 'Choose a field...'])}}
                @endif --}}
                {{Form::label('field_id','Select Field')}}
                <select class="form-control" name="field_id">

                  <option>Select Field</option>

                  @foreach ($fields as $field)
                  <option value="{{ $field->id }}"> {{ $field->field_name }} </option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{-- @if (count($categories) > 0)
                                    {{Form::label('category_id','Select Category')}}
                {{
                                    Form::select('category_id',[$select_cat], null, ['class' => 'custom-select','placeholder' => 'Choose a category...'])

                                    }}
                @else
                {{Form::label('category_id','Select Category')}}
                {{Form::select('category_id', ['No Category added yet'],null,  ['class' => 'custom-select','placeholder' => 'Choose a category...'])}}
                @endif --}}
                {{Form::label('category_id','Select Category')}}
                <select class="form-control" name="category_id">

                  <option>Select Category</option>

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

          {{Form::submit('Add Product',['class'=>'btn btn-primary'])}}

          {!! Form::close() !!}
        </p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
{{-- add product modal ends --}}

{{-- add field modal --}}
<div class="modal fade" id="add_field">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Field</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
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
        </p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
{{-- add field modal ends --}}

{{-- add category modal  starts--}}
<div class="modal fade" id="add_category">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          {!!
          Form::open(['action'=>'CategoriesController@store','method'=>'POST','enctype'=>'multipart/form-data'])
          !!}
          <div class="form-group">
            {{Form::label('category_name','Category Name')}}
            {{Form::text('category_name','',['class'=>'form-control','placeholder'=>'Category Name'])}}
          </div>
          <div class="form-group">
            {{Form::label('Product Image')}}
            <input type="file" name="image" class="form-control">
          </div>

          {{Form::submit('Add Category',['class'=>'btn btn-primary text-center'])}}

          {!! Form::close() !!}
        </p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
{{-- add category modal ends --}}

@endsection
