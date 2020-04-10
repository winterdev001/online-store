@extends('layouts.home')
@section('content')
    <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
          </nav>
    </div>
    <div class="all-products">
        <div class="product-container">            
              <div class="card">
                <div class="card-body">
                  <a href="/home/product" class="text-decoration-none text-dark link">All Products</a>
                  <hr>
                  @foreach ($categories as $category)
                    <ul>                    
                      <li class="cat-list">                        
                        <span class="cat-list-item">
                            
                            <form action="{{URL::current()}}" method="POST">
                                {{-- @method('POST') --}}
                                @csrf
                                <input type="hidden" value="{{$category->id}}" name="category_id">
                                <input type="submit" class="filter_by_cat" name="filter_by_cat" value="{{$category->category_name}}">
                            </form>
                        </span>
                        <ul>
                          @foreach ($fields as $field) 
                              @if ($field->category_id == $category->id)
                                  <li class="cat-child"> 
                                       
                                      <form action="{{URL::current()}}" method="POST">
                                        {{-- @method('POST') --}}
                                        @csrf
                                        <input type="hidden" value="{{$field->id}}" name="field_id">
                                        <input type="submit" class="filter_by_field" name="filter_by_field" value="{{$field->field_name}}">
                                    </form>
                                  </li>
                              @endif
                          @endforeach
                        </ul>
                      </li>    
                      <hr>                
                    </ul>
                  @endforeach

                    <form action="{{URL::current()}}" method="POST">
                        @csrf
                        <div class="filters">
                          <h4 class="filter muted">Filters</h4>
                          <div class="price-range">
                                <h5>Price Range</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="price" id="exampleRadios1" value="500-50000" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                    500Rwf - 50,000Rwf
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="price" id="exampleRadios2" value="50000-100000">
                                    <label class="form-check-label" for="exampleRadios2">
                                    50,000Rwf - 100,000Rwf
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="price" id="exampleRadios3" value="100000-150000">
                                    <label class="form-check-label" for="exampleRadios2">
                                    100,000Rwf - 150,000Rwf
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="price" id="exampleRadios4" value="150000-200000">
                                    <label class="form-check-label" for="exampleRadios2">
                                    150,000Rwf - 200,000Rwf
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="price" id="exampleRadios5" value="200000-1000000000">
                                    <label class="form-check-label" for="exampleRadios2">
                                    200,000Rwf +
                                    </label>
                                </div>
                            </div>
                            <div class="categories">
                                <h5>Categories</h5>
                                @foreach ((App\Category::orderBy('category_name','asc')->skip(0)->take(5)->get()) as $category)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cat_id" id="exampleRadios" value="{{$category->id}}">
                                        <label class="form-check-label" for="exampleRadios2">
                                        {{$category->category_name}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class=" col-12 text-center">
                            <input type="submit" name="find" class="btn btn-outline-warning btn-sm btn-rounded btn-block " value="Filter">
                        </div>
                    </form>
                </div>
              </div>
            
              @foreach ($products as $product)
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
        <div class="d-flex justify-content-center mt-5 ">
            {{-- pagination links  --}}
                <span class="text-center page-links">{{$products->render()}}</span>
          </div>
    </div>
    <div class="blogs">
        <div class="blogs mb-5 mt-3">
            <strong><h5 class=" mb-2">Latest Blogs</h5></strong>
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

                    </div>
                @endforeach
            </div>
        </div>
    </div>
 
    {{-- Product detail modal --}}
    <style>
        /* breadcrumbs */
        .breadcrumb-item>a {
            color: #faa45a !important;
        }
        .breadcrumb>li::before {
            content:none !important;
        }
        .breadcrumb>li:after {
            content:'\3E';
            margin-left: 0.3em;
        }
        .breadcrumb>li:last-child:after
         {
            content: none;
        }

        /* product container */
        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 20px;
        }
        .product-container .card:first-child {
            grid-row: span 4;
            /* height: 30rem; */
        }

        .cat-list {
          display: block;
          
        }

        .cat-list-item {
          border-bottom:2px solid #faa45a;
        }

        .cat-child {
          display: flex ;
          padding-left: 1rem;
        }

        .price-tag {
            color: #faa45a !important;
        }

        .product-card:hover {
          box-shadow: 0 0 2px 2px rgba(45, 46, 45, 0.11) !important;
        }

        @media (max-width: 768px) and (min-width: 577px) {
            .product-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)) !important;
                grid-gap: 10px;
                cursor: pointer;
            }
            .product-container .card:first-child {
                grid-row: span 8;
            }
        }

        @media (max-width: 1024px) {
            .product-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                grid-gap: 20px;
                cursor: pointer;
            }
            .product-container .card:first-child {
                grid-row: span 7;
            }
        }

        .page-links {
            z-index: 0 !important;
        }

        .filter {
            border-bottom:2px solid  #faa45a;
        }

        .product-container>.card>.card-body>.link:hover {
            color: #faa45a !important
        }

        .filter_by_cat ,.filter_by_field {
            border:none !important;
            background-color: white !important
        }

        .filter_by_cat:hover, .filter_by_field:hover {
            color: #faa45a !important
        }

        
        .modo,.comment-modo {
          position: absolute;
          top: 50px;
          right: 100px;
          bottom: 0;
          left: 0;
          z-index: 10040;
          overflow: auto;
          overflow-y: auto;

        }
    </style>
 

@endsection
