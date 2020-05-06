@extends('layouts.home')

@section('content')
  <!-- breadcrumb -->
	<div class="breadcrumbs">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/home/all_blogs">Blogs</a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{$blog->title}} </li>
      </ol>
    </nav>
  </div>


  <!-- Content page -->
  <div class="blog-detail">    
    <div class="row">
      <div class="col-md-9">
        <div class="card mb-3">
          <img src="/storage/blogs_images/{{$blog->image}}" class="card-img-top" alt="{{$blog->title}}">
          <div class="card-body">
            <h5 class="card-title"><strong>{{$blog->title}}</strong></h5>
            <p class="card-text">{{$blog->content}}</p>
            <p class="card-text"><small class="text-muted">{{ $blog->created_at->format('d M Y') }}</small></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card ">
          <h5 class="card-header">
            <strong>Categories</strong> 
          </h5>
          <div class="blog-cat card-body">            
            <ul class="blog-categories">
              <li class="blog_cat_item">
                @foreach (App\BlogCategory::all() as $blog_cat)
                    <a >
                    <form action="/homepages/all_blogs" method="POST" class="list-group">
                        @csrf
                        <input type="hidden" value="{{$blog_cat->id}}" name="category_id">
                        <input type="submit" name="blog" class="list-group-item " value="{{$blog_cat->category_name}}">
                    </form>
                    </a>
                @endforeach
              </li>
            </ul>
          </div>
        </div>

        <div class="card mt-3" >
          <h5 class="card-header">
            <strong>Recent Products</strong> 
          </h5>
          <div class="card-body">    
            <ul class="blog_recent_products">
              @foreach (App\Product::orderBy('created_at','desc')->skip(0)->take(3)->get() as $product)
                  <li>   
                    <a href="/home/product_details/{{$product->id}}" class="text-decoration-none text-dark">    
                      <div class="card mb-3" style="max-width: auto;max-height:auto">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            @foreach (json_decode($product->product_images) as $image)
                            <img src="/storage/cover_images/{{$image}}" height="100%" width="100%" class="card-img"  alt="{{$product->product_name}}">
                            @break
                            @endforeach
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <span class="card-title tyto"> <strong>{{$product->product_name}}</strong>  </span>
                              <p class="card-text"><small class="text-muted price-tag">{{number_format($product->price)}} Rwf</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="comment mt-5 mb-5">
    <h5 class="font-weight-bold">
      Leave a Comment
    </h5>

    <p class="m-2">
      *Your email address will not be published, Remember to fill all fields.
    </p>
    @include('inc.message')

    {!!Form::open(['action'=>'CommentsController@store','method'=>'POST'])!!}
      <div class="form-group">
        <textarea class="form-control col-md-6 col-sm-12"  rows="3" name="content" placeholder="Comment..."></textarea>
      </div>
      <div class="form-group">
        <input class="form-control col-md-4 col-sm-6" type="text" name="email" placeholder="Email *">
      </div>
      <input type="hidden" name="for" value="blog">
      <input type="hidden" id="for_id" name="for_id" value="{{$blog->id}}">

    {{Form::submit(' Comment',['class'=>'btn comment-btn'])}}

    {!! Form::close() !!}
  </div>

  <div class="comments mt-3 mb-5">
    <div class="p-t-40">
      @foreach ($comments as $comment)
          @if (($comment->for == "blog") && ($comment->for_id == $blog->id))
              <h5><strong>Recent Comments</strong> </h5>
              <div class="card" style="border-left:8px solid  #faa45a !important">
                  <div class="card-body">
                      <h5 class="card-title"><strong>{{$comment->email}}</strong> </h5>
                      <hr>
                      <p class="card-text"> {{$comment->content}}</p>
                  </div>
              </div>
          {{-- @else
              <div class="card card-body">No Comment Yet...</div></p> --}}
          @endif
      @endforeach
    </div>
  </div>


  <style>

    .blog-categories>li , .blog_recent_products>li {
      display: block;
    }

    .tyto {
      font-size: 12px !important
    }
  </style>
    
@endsection
