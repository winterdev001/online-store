@extends('layouts.home')
@section('content')
	<div class="breadcrumbs">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb ">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item "><a href="/home/product">Products</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{$product->product_name}}</li>
			</ol>
		</nav>
	</div>
	<div class=" card product-detail mb-5">
		<div class="row  card-body">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
				<div class=" product_img">
					<div class="image-viewer">
						<div class="main-image">
							@foreach (json_decode($product->product_images) as $image)
								<img src="/storage/cover_images/{{$image}}"  alt="{{$product->product_name}}">
							@break
							@endforeach
						</div>
						<div class="secondary-images">
							@foreach (json_decode($product->product_images) as $image)
								<div class="secondary-image">
									@if (count(json_decode($product->product_images))>1)
										<img src="/storage/cover_images/{{$image}}"  alt="{{$product->product_name}}">
									@endif
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
				<div class=" product_details">
					<div class="">
						<div class="detail">
							<div class="row">
								<div class="col-md-9">
									<h1 class="detail-name"> {{$product->product_name}} </h1>
								</div>
								<div class="col-md-3">
									<a class="btn btn-light" href="{{ URL::previous() }}">Go Back</a>
								</div>
							</div>
							<p class="detail-short-description">
								{{$product->description}}
							</p>
							<p class="card-text">
								<span class="price-tags">{{number_format($product->price)}} Rwf</span>
							</p>
							<p class="card-text">
								Like what you see? Contact us : <br>
								 <span class="btn btn-sm sec text-dark font-weight-bold btn-cancel i-text-small mt-4 mb-5 animated fadeIn slow delay-2s">
								<img src="https://img.icons8.com/ios-filled/24/000000/ringing-phone.png" alt="user_name" class="d-header-icon animated tada infinite slow"> :
								<span id="seller_info">{{$product->seller_phone}} / {{$product->seller_email}}</span>
								</span>
							</p>

						</div>

						{{-- <div class="pricing">
							<div class="pricing-price">$419.99</div>
							<button class="btn pricing-btn">Add to Cart</button>
						</div> --}}
					</div>
				</div>
			</div>

		</div>

		{{-- <div class="lightbox" id="lightbox">
			@foreach (json_decode($product->product_images) as $image)
						<img src="/storage/cover_images/{{$image}}"  alt="{{$product->product_name}}">
			@endforeach
			<div class="lightbox-controls">
				<div class="lightbox-controls-close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
				<div class="lightbox-controls-previous">
					<i class="fa fa-chevron-left" aria-hidden="true"></i>
				</div>
				<div class="lightbox-controls-next">
					<i class="fa fa-chevron-right" aria-hidden="true"></i>
				</div>
			</div>
		</div> --}}
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
		  <input type="hidden" name="for" value="product">
		  <input type="hidden" id="for_id" name="for_id" value="{{$product->id}}">

		{{Form::submit(' Comment',['class'=>'btn comment-btn'])}}

		{!! Form::close() !!}
	</div>

	<div class="comments mt-3 mb-5">
		<div class="p-t-40">
		  @foreach ($comments as $comment)
		  @if (($comment->for == "product") && ($comment->for_id == $product->id))
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

	<div class="popular mb-5 mt-5">
		@if (count(App\Product::where('category_id',$product->category_id)->get()) >1)
			<strong><h5 class=" mb-2">You may also like </h5></strong>
			<div class="grid-container">
                @foreach (App\Product::where('category_id',$product->category_id)->orderBy('created_at','desc')->skip(0)->take(6)->get() as $product)
                    <a
                        {{-- @if (App\Product::find($product->id) === null)
                            href="{{ URL::previous() }}"
                        @else
                            href="/"
                        @endif --}}
                        href="/home/product_details/{{$product->id}}"

                        class="text-decoration-none text-dark">
                        <div class="card product-card popular-section" style="height:100%">
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
		@else
			<strong><h5 class=" mb-2">You may also like</h5></strong>
			<div class="grid-container">
				@foreach (App\Product::orderBy('created_at','desc')->skip(0)->take(6)->get() as $product)
				<a href="/home/product_details/{{$product->id}}" class="text-decoration-none text-dark">
						<div class="card product-card popular-section" style="height:100%">
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
		@endif

  </div>

	<style>
		@import url("https://fonts.googleapis.com/css?family=Amaranth|Quicksand");

		/* .product_detail-container {
				display: grid;
				grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)) !important;
				grid-gap: 10px !important;
				margin-bottom: 1rem !important;
		} */
		/* .product_detail-container .card:first-child {
				grid-row: span 2;
		}		 */

		.product_img, .product_details {
			height: 100%;
		}

		.product-detail {
			border:none !important
		}

		/* .product-detail {
			display: -webkit-box;
			display: flex;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
							flex-direction: row;
			flex-wrap: wrap;
			justify-content: space-around;
		} */

		/* .btn {
			-webkit-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
			font-family: 'Quicksand', sans-serif;
			background-color: #efeeda;
			color: #4d4d4d;
			border: 1px solid #4d4d4d;
			padding: 12.5px;
			cursor: pointer;
		} */

		.image-viewer {
			margin: 25px;
			display: -webkit-box;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
							flex-direction: column;
			-webkit-box-pack: start;
							justify-content: flex-start;
		}
		.image-viewer .main-image {
			width: 400px;
			height: 400px;
			align-self: center;
			text-align: center;
			display: -webkit-box;
			display: flex;
			-webkit-box-pack: center;
							justify-content: center;
			-webkit-box-align: center;
							align-items: center;
		}

		@media (max-width: 576px) {
			.image-viewer .main-image {
				width: 300px;
				height: 300px;
			}
		}

		@media (max-width: 768px) and (min-width: 577px) {
			.image-viewer .main-image {
				width: 330px;
				height: 330px;
			}
		}
		.image-viewer .main-image img {
			cursor: -webkit-zoom-in;
			cursor: zoom-in;
			max-width: 100%;
			max-height: 100%;
			width: auto;
			height: auto;
		}
		.image-viewer .secondary-images {
			align-self: center;
			display: -webkit-box;
			display: flex;

			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
							flex-direction: row;
			flex-wrap: nowrap;
			-webkit-box-align: center;
							align-items: center;
			-webkit-box-pack: justify;
							justify-content: space-between;
		}
		.image-viewer .secondary-images .secondary-image {
			padding: 6.25px;
			height: 50px;
			width: 50x;
		}
		.image-viewer .secondary-images .secondary-image img {
			cursor: pointer;
			width: 60px;
			height: 50px;
			border: 2px solid #faa45a;
			border-radius: 6px;
		}

		.lightbox {
			-webkit-transition: all 0.5s 0s ease-in-out;
			transition: all 0.5s 0s ease-in-out;
			position: fixed;
			top: -100%;
			bottom: 100%;
			left: 0;
			right: 0;
			background: #f6c89faf;
			z-index: 501;
			opacity: 0;
		}
		.lightbox img {
			position: absolute;
			margin: auto;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			max-width: 600px;
			max-height: 600px;
		}
		.lightbox .lightbox-controls {
			position: relative;
			height: 100vh;
		}
		.lightbox .lightbox-controls .lightbox-control, .lightbox .lightbox-controls .lightbox-controls-close, .lightbox .lightbox-controls .lightbox-controls-previous, .lightbox .lightbox-controls .lightbox-controls-next, .lightbox.show .lightbox-controls .lightbox-controls-previous, .lightbox.show .lightbox-controls .lightbox-controls-next {
			height: 70px;
			width: 70px;
			position: absolute;
			z-index: 502;
			background: #f6c89f;
			color: white;
			font-size: 3em;
			display: -webkit-box;
			display: flex;
			-webkit-box-pack: center;
							justify-content: center;
			-webkit-box-align: center;
							align-items: center;
			cursor: pointer;
		}
		.lightbox .lightbox-controls .lightbox-controls-close {
			position: absolute;
			top: 0%;
			right: 0%;
		}
		.lightbox .lightbox-controls .lightbox-controls-previous {
			position: absolute;
			top: 50%;
			left: -20%;
			-webkit-transition: all 0.5s 0s ease-in-out;
			transition: all 0.5s 0s ease-in-out;
		}
		.lightbox .lightbox-controls .lightbox-controls-next {
			position: absolute;
			top: 50%;
			right: -20%;
			-webkit-transition: all 0.5s 0s ease-in-out;
			transition: all 0.5s 0s ease-in-out;
		}

		.lightbox.show {
			-webkit-transition: all 0.5s 0s ease-in-out;
			transition: all 0.5s 0s ease-in-out;
			top: 0%;
			bottom: 0%;
			opacity: 1;
		}
		.lightbox.show img {
			-webkit-transition: all 0.5s 0.5s ease-in-out;
			transition: all 0.5s 0.5s ease-in-out;
			max-width: 600px;
			max-height: 600px;
		}
		.lightbox.show .lightbox-controls .lightbox-controls-previous {
			position: absolute;
			top: 50%;
			left: 0%;
			-webkit-transition: all 0.5s 0.75s ease-in-out;
			transition: all 0.5s 0.75s ease-in-out;
		}
		.lightbox.show .lightbox-controls .lightbox-controls-next {
			position: absolute;
			top: 50%;
			right: 0%;
			-webkit-transition: all 0.5s 0.75s ease-in-out;
			transition: all 0.5s 0.75s ease-in-out;
		}

		.price-tag {
			color: #faa45a;
		}

		.price-tags {
			color: black !important;
			border:2px solid #f6c89f !important;
			padding: .5rem;
		}

		/* .popular-section {
			max-height: 300px !important;
		} */

	</style>

	<script>
		class ImageViewer {
			constructor(selector) {
				this.selector = selector;
				$(this.secondaryImages).click(() => this.setMainImage(event));
				$(this.mainImage).click(() => this.showLightbox(event));
				$(this.lightboxClose).click(() => this.hideLightbox(event));
			}

			get secondaryImageSelector() {
				return '.secondary-image';
			}

			get mainImageSelector() {
				return '.main-image';
			}

			get lightboxImageSelector() {
				return '.lightbox';
			}

			get lightboxClose() {
				return '.lightbox-controls-close';
			}

			get secondaryImages() {
				var secondaryImages = $(this.selector).find(this.secondaryImageSelector).find('img');
				return secondaryImages;
			}

			get mainImage() {
				var mainImage = $(this.selector).find(this.mainImageSelector);
				return mainImage;
			}

			get lightboxImage() {
				var lightboxImage = $(this.lightboxImageSelector);
				return lightboxImage;
			}

			setLightboxImage(event) {
				var src = this.getEventSrc(event);
				this.setSrc(this.lightboxImage, src);
			}

			setMainImage(event) {
				var src = this.getEventSrc(event);
				this.setSrc(this.mainImage, src);
			}

			getSrc(node) {
				var image = $(node).find('img');
			}

			setSrc(node, src) {
				var image = $(node).find('img')[0];
				image.src = src;
			}

			getEventSrc(event) {
				return event.target.src;
			}

			showLightbox(event) {
				this.setLightboxImage(event);
				$(this.lightboxImageSelector).addClass('show');
			}

			hideLightbox() {
				$(this.lightboxImageSelector).removeClass('show');
			}}
		new ImageViewer('.image-viewer');
	</script>
@endsection
