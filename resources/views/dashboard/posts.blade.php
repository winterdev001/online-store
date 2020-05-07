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
            <li class="breadcrumb-item"><a href="/dashboard">Home</a> <span><i class="fa fa-chevron-right"></i></span>
                 <a href="/users">Users</a></li>
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
        {{-- blogs --}}
        <section class="col-lg-12 connectedSortable table-responsive" id="all_users">

          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-9">
                  <div class="row">
                      <div class="col-md-10"><h3 class="card-title"> {{$user_name}}'s Posts </h3></div>
                      <div class="col-md-2"><a class="btn btn-dark" href="{{ URL::previous() }}">Go Back</a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Product Name</th>
                        <th>Field</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Date</th>
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
                        <td> {{$product->updated_at}} </td>
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
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </section>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection
