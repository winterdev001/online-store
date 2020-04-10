@extends('layouts.home')

@section('content')
    <div class="text-center">
        <strong><h2>You want it?, We got you covered. </h2></strong>
        <h5>Hamubere is here for you to make online marketing easier.</h5>
    </div>
    <hr>
    <div class="cat-cards">
        <div class="cat-card">
            <div class="card-columns">
                @foreach (App\Category::orderBy('created_at','desc')->skip(0)->take(6)->get() as $category)
                    <div class="card  " >
                    <img src="/storage/categories_images/{{$category->image}}" height="120" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{$category->category_name}} </h5>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
    <div class="all-products">
        <strong><h1 class="">Store Overview</h1></strong>
        {{-- new arrivals --}}
        <h1 class="lead text-center"> New Arrivals </h1>
        <div class="grid-container">
            @foreach (App\Product::orderBy('created_at','desc')->skip(0)->take(6)->get() as $product)
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
            @endforeach
        </div>
        <div class="text-center ">
            <a href="/home/product" class="btn  btn-sm btn-pill mt-3 col-4 view-more-products"> View More</a>
        </div>
        <hr>
    </div>

    <div class="blogs mb-5 mt-3">
        <strong><h1 class="text-center mb-2">Our Blogs</h1></strong>
        <div class="blog-container">
            @foreach (App\Blog::orderBy('created_at','desc')->skip(0)->take(3)->get() as $blog)
                <div class="card blog-card">
                    <img src="/storage/blogs_images/{{$blog->image}}" height="250px" alt="{{$blog->title}}">
                    <div class="card-body">
                        <p><small class="text-muted blog-date">{{$blog->updated_at->format('M d, Y')}} </small></p>
                        <h4 class="card-text"> <strong>{{$blog->title}}</strong> </h4>
                        <p class="card-text"> {{str_limit($blog->content,60)}} </p>
                        <a href="#" class="read-more-blog text-decoration-none">Read More</a>
                    </div>
                    {{-- <div class="card-footer text-center">
                        <button class="btn btn-sm sec">Read More</button>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>


    <style>
       
    </style>
@endsection
