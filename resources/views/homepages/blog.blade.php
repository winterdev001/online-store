@extends('layouts.pages')

@section('content')
    	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="javascript:void(0)" class="stext-109 cl8 hov-cl1 trans-04">
				Blog
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{$blog->title}}
			</span>
		</div>
	</div>


	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
                            <img src="/storage/blogs_images/{{$blog->image}}" alt="IMG-BLOG">

							<div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
									{{ $blog->created_at->format('d') }}
								</span>

								<span class="stext-109 cl3 txt-center">
									{{ $blog->created_at->format('M Y') }}
								</span>
							</div>
						</div>

						<div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span> Admin
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									{{ $blog->created_at }}
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									@foreach (App\BlogCategory::all() as $blog_cat)
                                        @if ($blog->category_id == $blog_cat->id)
                                            {{$blog_cat->category_name}}
                                        @endif
                                    @endforeach
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									8 Comments
								</span>
							</span>

							<h4 class="ltext-109 cl2 p-b-28">
								{{$blog->title}}
							</h4>

							<p class="stext-117 cl6 p-b-26">
								{{$blog->content}}
							</p>
						</div>

						<!--  -->
						<div class="p-t-40">
							<h5 class="mtext-113 cl2 p-b-12">
								Leave a Comment
							</h5>

							<p class="stext-107 cl6 p-b-40">
								Your email address will not be published, Remember to fill all fields.
                            </p>
                            @include('inc.message')

							{!!
                                Form::open(['action'=>'CommentsController@store','method'=>'POST'])
                                !!}
								<div class="bor19 m-b-20">
									<textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15" name="content" placeholder="Comment..."></textarea>
								</div>

								<div class="bor19 size-218 m-b-20">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="email" placeholder="Email *">
								</div>
                                <input type="hidden" name="for" value="blog">
                                <input type="hidden" id="for_id" name="for_id" value="{{$blog->id}}">

                                {{Form::submit(' Commnent',['class'=>'flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04'])}}

                                {!! Form::close() !!}

                        </div>
                        <div class="p-t-40">
                            @foreach ($comments as $comment)
                                @if (($comment->for == "blog") && ($comment->for_id == $blog->id))
                                    <h3>Recent Comments</h3>
                                    <div class="card" style="border-left:8px solid  #717fe0 !important">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$comment->email}}</h5>
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
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						{{-- <div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div> --}}

						<div class=" ">
							<h4 class="mtext-112 cl2 p-b-33">
								Categories
							</h4>

							<ul>
								<li class="bor18">
                                    @foreach (App\BlogCategory::all() as $blog_cat)
                                       <a >
                                        <form action="/homepages/all_blogs" method="POST" class="list-group">
                                            {{-- @method('POST') --}}
                                            @csrf
                                            <input type="hidden" value="{{$blog_cat->id}}" name="category_id">
                                            <input type="submit" name="blog" class="list-group-item " value="{{$blog_cat->category_name}}">
                                        </form>
                                        </a>
                                    @endforeach
								</li>

							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Recent Products
							</h4>

							<ul>
                                @foreach (App\Product::orderBy('created_at','desc')->skip(0)->take(3)->get() as $product)
                                    <li class="flex-w flex-t p-b-30">
                                        <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20" data-toggle="modal" data-target="#product_detail"
                                            type="button" data-images="{{$product->product_images}}" data-status="{{$product->status}}" data-price="{{$product->price}}" data-seller_phone="{{$product->seller_phone}}"
                                            data-seller_email="{{$product->seller_email}}" data-description="{{$product->description}}" data-product_name="{{$product->product_name}}" data-updated_at={{$product->updated_at}}>
                                            @foreach (json_decode($product->product_images) as $image)
                                            <img src="/storage/cover_images/{{$image}}" height="60" width="60"  alt="{{$product->product_name}}">
                                            @break
                                            @endforeach
                                        </a>

                                        <div class="size-215 flex-col-t p-t-8">
                                            <a href="#" class="stext-116 cl8 hov-cl1 trans-04" data-toggle="modal" data-target="#product_detail"
                                            type="button" data-images="{{$product->product_images}}" data-status="{{$product->status}}" data-price="{{$product->price}}" data-seller_phone="{{$product->seller_phone}}"
                                            data-seller_email="{{$product->seller_email}}" data-description="{{$product->description}}" data-product_name="{{$product->product_name}}" data-updated_at={{$product->updated_at}}>
                                                {{$product->product_name}}
                                            </a>

                                            <span class="stext-116 cl6 p-t-20">
                                                {{$product->price}}
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
        </div>

        {{-- Product detail modal --}}
        <style>
            .modo {
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
        <div class="modal fade" id="product_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog modo modal-lg" role="document">
                <div class="modal-content actual-modo">
                <div class="modal-header">
                    <h5 class="modal-title" id=" product_name"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3" style="max-width: 850px;max-height:400px;">
                        <div class="row no-gutters">
                          <div class="col-md-6">
                              <div class="single_img" style="max-height:400px;">
                                <img src="..." class="card-img img-fluid" style="max-height:400px;" id="img_1" alt="...">
                              </div>
                              <div class="two_img" style="max-height:400px;">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="..." class="d-block w-100 img-fluid card-img" style="max-height:400px;"   id="img_1" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="..." class="d-block w-100 img-fluid card-img" style="max-height:400px;" id="img_2" alt="...">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                              </div>
                              <div class="multi_img" style="max-height:400px;">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="..." class="d-block w-100 img-fluid card-img" style="max-height:400px;"  id="img_1" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="..." class="d-block w-100 img-fluid card-img" style="max-height:400px;" id="img_2" alt="...">
                                      </div>
                                      <div class="carousel-item" id="carousel_3">
                                        <img src="..." class="d-block w-100 img-fluid card-img" style="max-height:400px;" id="img_3" alt="...">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="card-body">
                              <h5 class="card-title"><span><img src="https://img.icons8.com/color/24/000000/warranty.png"/></span> <span id="product_name"></span></h5>
                              <p class="card-text" ><span id="badge">.</span> <span id="product_status"></span></p><br>
                              <p class="card-text" ><span><img src="https://img.icons8.com/ultraviolet/24/000000/tag-window.png"/></span> <span id="price"></span>$</p><br>
                              <p class="card-text" ><span><img src="https://img.icons8.com/color/24/000000/activity-history.png"/></span> <span id="description"> </span></p><br>
                              <p class="card-text"><small class="text-muted"><img src="https://img.icons8.com/color/24/000000/calendar.png"/> Last updated <span id="updated_at"></span></small></p><br>
                              <p class="card-text">
                                     Like what you see? Contact us : <span class="btn btn-sm bg-dark btn-dark btn-cancel i-text-small mt-4 mb-5 animated fadeIn slow delay-2s">
                                    <img src="https://img.icons8.com/color/24/000000/outgoing-call.png" alt="user_name" class="d-header-icon animated tada infinite slow"> :
                                    <span id="seller_info"></span>
                                    </span>
                                    <div class="btn-group dropright">
                                        {{-- <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Comment
                                        </button> --}}
                                        <div class="dropdown-menu product-comment">
                                        <!-- Dropdown menu links -->
                                        <form>
                                            <h1 class="h3 mb-3 font-weight-light mt-2">#Leave a Comment</h1>
                                            <label for="inputEmail" class="sr-only mt-1">Email</label>
                                            <input id="inputEmail" class="form-control mb-1 bg-dark border-top-0 border-left-0 border-right-0 border-ligth rounded-0 text-light" placeholder="Your Email" required="" autofocus="" type="text" >
                                            <label for="inputComment" class="sr-only">Comment</label>
                                            <textarea id="inputComment" class="form-control mb-1 bg-dark border-top-0 border-left-0 border-right-0 border-ligth rounded-0 text-light" placeholder="Enter a Comment..." required="" ></textarea>
                                            <button class="btn btn-lg mt-2 btn-primary radius text-center" >Comment</button>
                                        </form>
                                        </div>
                                    </div>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
	</section>
@endsection
