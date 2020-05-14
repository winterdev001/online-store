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
                          <h3 class="card-title">Comment Details</h3>
                          <div class="float-right">
                              <table>
                                @if (auth()->user()->super == 1)
                                    <td>
                                        {{-- <span>this sis comment id : {{$comment->id}}</span><br> --}}
                                        {!!Form::open(['action'=>['CommentsController@destroy',$comment->id],'method'=>'POST','class'=>' '])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this item?')"><i class="fa fa-trash"></i></button>
                                        {{-- {{Form::submit('Delete',['class'=>'btn btn-danger ','onclick'=>"return confirm('Are you sure You want to delete this item?')"])}} --}}
                                        {!!Form::close()!!}
                                    </td>
                                @else
                                @endif
                                <td><a href="/comments" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Back</a></td>
                            </table>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           {{-- content --}}
                           @if ($comment->for == "product")
                                @foreach (App\Product::all() as $product)
                                    @if ($product->id == $comment->for_id && $comment->for  == "product")
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
                                                    <p class="card-text">Field: @foreach (App\Field::all() as $field)
                                                                @if ($product->field_id == $field->id)
                                                                    {{ $field->field_name }}
                                                                    @endif
                                                                @endforeach
                                                    </p>
                                                    <p class="card-text">Category : @foreach (App\Category::all() as $category)
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
                                                    <p class="card-text">
                                                        <small class="text-muted">
                                                            Posted By: @if ($product->user_id == auth()->user()->id)
                                                                {{auth()->user()->name}}
                                                            @endif
                                                        </small>
                                                    </p>
                                                    <span><strong>Comments</strong> <hr></span>
                                                    <div class="card card-body" class="card card-body" style="border-left: 8px solid #717fe0 !important">
                                                        @foreach (App\Comment::all() as $comment)
                                                            @if ($comment->for_id == $product->id && $comment->for == "product")
                                                            <p>Sender's Email : {{$comment->email}}</p>
                                                            <p class="crad-text">Comment: {{$comment->content}}</p>
                                                            <p><small>{{$comment->created_at}}</small></p>
                                                            <hr>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                @foreach (App\Blog::all() as $blog)
                                    @if ($blog->id == $comment->for_id && $comment->for  == "blog")
                                        <div class="card mb-3" style="max-width: 900px;">
                                            <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <img src="/storage/blogs_images/{{$blog->image}}" class="card-img" alt="{{ $blog->title }}">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <p class="card-title"><strong>Title: {{$blog->title}}</strong></p>
                                                    <p class="card-text">Category:
                                                        @foreach (App\BlogCategory::all() as $blog_cat)
                                                            @if ($blog_cat->id == $blog->category_id)
                                                                {{$blog_cat->category_name}}
                                                            @endif
                                                        @endforeach
                                                    </p>
                                                    <p>Content:<br>{{$blog->content}}</p>
                                                    <p class="card-text"><small class="text-muted">Posted By:admin</small></p>
                                                    <span><strong>Comments</strong> <hr></span>
                                                    <div class="card card-body" style="border-left: 8px solid #717fe0 !important">
                                                        @foreach (App\Comment::all() as $comment)
                                                            @if ($comment->for_id == $blog->id && $comment->for == "blog")
                                                            <p>Sender's Email : {{$comment->email}}</p>
                                                            <p class="crad-text">Comment: {{$comment->content}}</p>
                                                            <hr>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{-- <table>
                                                            <td>
                                                            {!!Form::open(['action'=>['CommentsController@destroy',$comment->id],'method'=>'POST','class'=>' '])!!}
                                                            {{Form::hidden('_method','DELETE')}}
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this item?')"><i class="fa fa-trash"></i></button>
                                                            {!!Form::close()!!}
                                                        </td>
                                                        <td><a href="/comments" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Back</a></td>
                                                    </table> --}}
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                           @endif

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



