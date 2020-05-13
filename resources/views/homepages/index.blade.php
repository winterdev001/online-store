@extends('layouts.home')

@section('content')
    <div class="container carousel-container" >
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
             @foreach( $carousels as $carousel )
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
             @endforeach
            </ol>

            <div class="carousel-inner" role="listbox">
              @foreach( $carousels as $carousel )
                 <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                     <img class="d-block img-fluid " style="" src="/storage/carousels_images/{{$carousel->image}}" alt="{{ $carousel->first_title }}">
                        {{-- <div class="carousel-caption d-none d-md-block ">
                           <p class="" style="background-color:rgba(0, 0, 0, 0.651);border-left:4px solid black ;height:2rem">{{ $carousel->first_title }}</p>
                        </div> --}}
                        <div class="carousel-caption d-none d-md-block text-dark col-lg-3 col-md-3 col-sm-6 col-xm-6 font-weight-bold">
                            <h2 class="carousel-txt "> {{$carousel->first_title}} </h2>
                            <p class="carousel-txt">{{$carousel->second_title}}</p>
                            <a href="/home/product" class="btn  btn-sm btn-pill mt-3 col-4 view-more-products"> Explore</a>
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

        {{-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              @foreach ($carousels as $carousel)
                <div class="carousel-item active">
                    <img src="/storage/carousels_images/{{$carousel->image}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5> {{$carousel->first_title}} </h5>
                    <p>{{$carousel->second_title}}</p>
                    </div>
                </div>
              @endforeach


            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div> --}}
    </div>
    <div class="text-center mt-5 mb-3">
        <strong><h2>You want it?, We got you covered. </h2></strong>
        <h5>Hamubere is here for you to make online marketing easier.</h5>
    </div>
    <hr>
    <div class="cat-cards">
        <div class="cat-card">
            <div class="card-columns">
                @foreach (App\Category::orderBy('created_at','desc')->skip(0)->take(6)->get() as $category)

                    <form action="/home/product" method="POST">
                        @csrf
                           <button type="submit" name="cat_from_home" class="filter-by-cat-home">
                                <div class="card home-cat-card " id="filter-by-cat-home" >
                                    <img src="/storage/categories_images/{{$category->image}}" height="120" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"> {{$category->category_name}} </h5>
                                    </div>
                                </div>
                           </button>
                           <input type="hidden" value="{{$category->id}}" name="category_id"  >
                    </form>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
    <div class="all-products">
        <strong><h1 class="text-center">Store Overview</h1></strong>
        {{-- new arrivals --}}
        <h1 class="lead text-center"> New Arrivals </h1>
        <div class="grid-container">
            @foreach (App\Product::orderBy('created_at','desc')->skip(0)->take(6)->get() as $product)
                <a href="/home/product_details/{{$product->id}}" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        @foreach (json_decode($product->product_images) as $image)
                            <img src="/storage/cover_images/{{$image}}" class="card-img" width="100" height="150" alt="{{$product->product_name}}">
                        @break
                        @endforeach
                        <div class="card-body">
                            <p class="card-text">
                                <span > <strong class="text-center">{{$product->product_name}}</strong></span> <br>
                                <span><small class="text-center price-tag">{{number_format($product->price)}} Rwf</small></span>
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="text-center ">
            <a href="/home/product" class="btn  btn-sm btn-pill mt-3 col-4 view-more-products"> View More</a>
        </div>
        <hr>

        {{-- Trending --}}
        <h1 class="lead text-center"> Trending </h1>
        <div class="grid-container">
            @foreach (App\Product::orderBy('created_at','asc')->skip(0)->take(6)->get() as $product)
                <a href="/home/product_details/{{$product->id}}" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        @foreach (json_decode($product->product_images) as $image)
                            <img src="/storage/cover_images/{{$image}}" class="card-img" width="100" height="150" alt="{{$product->product_name}}">
                        @break
                        @endforeach
                        <div class="card-body">
                            <p class="card-text">
                                <span > <strong class="text-center">{{$product->product_name}}</strong></span> <br>
                                <span><small class="text-center price-tag">{{number_format($product->price)}} Rwf</small></span>
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="text-center ">
            <a href="/home/product" class="btn  btn-sm btn-pill mt-3 col-4 view-more-products"> View More</a>
        </div>
        <hr>

        {{-- Best seller --}}
        <h1 class="lead text-center"> Recent </h1>
        <div class="grid-container">
            @foreach (App\Product::orderBy('created_at','asc')->skip(6)->take(6)->get() as $product)
                <a href="/home/product_details/{{$product->id}}" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        @foreach (json_decode($product->product_images) as $image)
                            <img src="/storage/cover_images/{{$image}}" class="card-img" width="100" height="150" alt="{{$product->product_name}}">
                        @break
                        @endforeach
                        <div class="card-body">
                            <p class="card-text">
                                <span > <strong class="text-center">{{$product->product_name}}</strong></span> <br>
                                <span><small class="text-center price-tag">{{number_format($product->price)}} Rwf</small></span>
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="text-center ">
            <a href="/home/product" class="btn  btn-sm btn-pill mt-3 col-4 view-more-products"> View More</a>
        </div>
        <hr>
    </div>

    <div class="blogs mb-5 mt-3">
		@if (count($blogs) > 0)
			<strong><h1 class="text-center mb-2">Our Blogs</h1></strong>
			<div class="blog-container">
				@foreach (App\Blog::orderBy('created_at','desc')->skip(0)->take(3)->get() as $blog)
					<div class="card blog-card">
						<img src="/storage/blogs_images/{{$blog->image}}" height="250px" alt="{{$blog->title}}">
						<div class="card-body">
							<p><small class="text-muted blog-date">{{$blog->updated_at->format('M d, Y')}} </small></p>
							<h4 class="card-text"> <strong>{{$blog->title}}</strong> </h4>
							<p class="card-text"> {{str_limit($blog->content,60)}} </p>
							<a href="/home/blog/{{$blog->id}}" class="read-more-blog text-decoration-none">Read More</a>
						</div>
						{{-- <div class="card-footer text-center">
							<button class="btn btn-sm sec">Read More</button>
						</div> --}}
					</div>
				@endforeach
			</div>
		@else
		@endif
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title w-100 text-center" >
                    <span class="font-weight-bold p-2 text-center mx-auto" style="border:5px solid #f6c89f;margin: 0 auto;">
                    Hamubere
                    </span>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div style="border-bottom:3px solid #f6c89f;" >
                        <span class=" p-2 text-center font-weight-bold">Advertise with US</span>
                    </div>
                </div>
                <p class="text-center">
                    We help your business, get recoginized easily by posting your content to our page.
                    For more information click the button down below. <br>
                    <div class="text-center">
                        <a href="/home/contact" class="btn comment-btn">Send Your Info</a>
                    </div>
                </p>
            </div>
            <div class="modal-footer">
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}

            </div>
          </div>
        </div>
    </div>

    <style>
        .carousel .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            position: absolute;
            top: 0;
            left: 0;
            min-height: 500px;
        }
        .carousel-inner,.carousel-control-prev,.carousel-control-next {
            z-index: 0;
        }

        @media (max-width: 576px) {
            .carousel .carousel-item {
                height: 300px;
            }

            .carousel-item img {
                position: absolute;
                top: 0;
                left: 0;
                min-height: 300px;
            }

            /* .carousel-caption {
                font-size: 10px;
                font-weight: bold !important;
                height: 2rem;
                margin-bottom: 5rem
            } */

        }
    </style>
   <script>
       // pop up after a minute site loaded

        $(document).ready(function ()
        {
        setTimeout(function(){
            // alert("Hello user")
            $('#exampleModal').modal('show');
            // $('[data-toggle="modal"]').popover()
        },60000);
        // in this function you can show your div remove alert and write your code
        });
   </script>

@endsection
