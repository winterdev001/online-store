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
                            <div class="card mb-3" style="max-width: 800px;">
                                <div class="row no-gutters">
                                  <div class="col-md-6">
                                      @if (count(json_decode($product->product_images))>1)
                                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                                        <ol class="carousel-indicators">
                                         @foreach( json_decode($product->product_images) as $photo )
                                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                         @endforeach
                                        </ol>

                                        <div class="carousel-inner" role="listbox">
                                          @foreach( json_decode($product->product_images) as $photo )
                                             <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                 <img class="d-block img-fluid " style="" src="/storage/cover_images/{{$photo}}" alt="{{ $product->product_name }}">
                                                    <div class="carousel-caption d-none d-md-block ">
                                                       <p class="" style="background-color:rgba(0, 0, 0, 0.651);border-left:4px solid black ;height:2rem">{{ $product->product_name }}</p>
                                                    </div>
                                             </div>
                                          @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>
                                      @else
                                        @foreach( json_decode($product->product_images) as $photo )
                                            <img src="/storage/cover_images/{{$photo}}" class="card-img" alt="{{ $product->product_name }}">
                                        @endforeach
                                      @endif
                                  </div>
                                  <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>{{$product->product_name}}</strong></h5>
                                        <p class="card-text">Field: @foreach ($fields as $field)
                                                    @if ($product->field_id == $field->id)
                                                        {{ $field->field_name }}
                                                        @endif
                                                    @endforeach
                                        </p>
                                        <p class="card-text">Category : @foreach ($categories as $category)
                                                            @if ($product->category_id == $category->id)
                                                                {{ $category->category_name }}
                                                            @endif
                                                        @endforeach
                                        </p>
                                        <p class="card-text">Price: {{$product->price}}$</p>
                                        <p class="card-text">Quantity: {{$product->quantity}}</p>
                                        <p class="card-text">Status: @if ($product->status == 0)
                                                    <span>Available</span>
                                                @else
                                                <span>Sold Out</span>
                                                @endif
                                        </p>
                                        <p class="card-text">Seller Info: {{$product->seller_phone}} / {{$product->seller_email}}</p>
                                        <p class="card-text">Description: {{$product->description}}</p>
                                        <p class="card-text"><small class="text-muted">Posted By:</small></p>
                                        <table>
                                            @if (auth()->user()->super == 1)
                                                <td>
                                                    {!!Form::open(['action'=>['ProductsController@destroy',$product->id],'method'=>'POST','class'=>' '])!!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this item?')"><i class="fa fa-trash"></i></button>
                                                    {{-- {{Form::submit('Delete',['class'=>'btn btn-danger ','onclick'=>"return confirm('Are you sure You want to delete this item?')"])}} --}}
                                                    {!!Form::close()!!}
                                                </td>
                                            @else
                                            @endif
                                            <td><a href="/dashboard" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Back</a></td>
                                        </table>
                                    </div>
                                  </div>
                                </div>
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



