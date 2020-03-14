@extends('layouts.pages')

@section('content')
    <!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
                @include('homepages.category')

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>

				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
                @foreach ($items as $product)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            @foreach (json_decode($product->product_images) as $image)
                            <img src="/storage/cover_images/{{$image}}" width="100" height="300" alt="{{$product->product_name}}">
                            @break
                            @endforeach
                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 " data-toggle="modal" data-target="#product_detail"
                        type="button" data-images="{{$product->product_images}}" data-status="{{$product->status}}" data-price="{{$product->price}}" data-seller_phone="{{$product->seller_phone}}"
                        data-seller_email="{{$product->seller_email}}" data-description="{{$product->description}}" data-product_name="{{$product->product_name}}" data-updated_at={{$product->updated_at}}>
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{$product->product_name}}
                                </a>

                                <span class="stext-105 cl3">
                                    {{$product->price}}$
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    {{-- <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON"> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
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
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Comment
                                    </button>
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
@endsection
