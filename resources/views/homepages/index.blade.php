<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

<!--===============================================================================================-->
</head>
{{-- <body class="animsition"> --}}
<body>

	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">

					<!-- Logo desktop -->
					<a href="/" class="logo">
                        {{-- <img src="images/icons/logo-0.png" alt="IMG-LOGO"> --}}
                        <h2 class="nav-brand"><strong><span class="text-dark">Hamubere</span> </strong></h2>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li >
								<a class="active-menu" href="/">Home</a>
							</li>

							<li>
								<a class="" href="/home/product">Shop</a>
                            </li>

                            <li>
								<a href="/homepages/all_blogs">Blog</a>
							</li>

							<li>
								<a class="" href="/home/about">About</a>
							</li>

							<li>
								<a class="" href="/home/contact">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">
						<div class="flex-c-m h-full p-r-24">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="/" class="logo">
                    <h2 class="nav-brand"><strong><span class="text-dark">Hamubere</span> </strong></h2>
                </a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-10">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="/">Home</a>
					<ul class="sub-menu-m">
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="/home/product">Shop</a>
				</li>

				<li>
                    <a href="/homepages/all_blogs">Blog</a>
                </li>

				<li>
					<a href="/home/about">About</a>
				</li>

				<li>
					<a href="/home/contact">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

                <form class="wrap-search-header flex-w p-l-15" method="POST" action="homepages/product_result">
                    @csrf
					<button class="flex-c-m trans-04">

						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="home-search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Sidebar -->




	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">
                @foreach ($carousels as $carousel)
                    <div class="item-slick1" style="background-image: url(/storage/carousels_images/{{$carousel->image}});">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                    <span class="ltext-202 cl2 respon2">
                                        {{$carousel->first_title}}
                                    </span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        {{$carousel->second_title}}
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="/home/product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Explore
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

				{{-- <div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Men New-Season
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="/home/product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Explore
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-04.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Women Collection 2018
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="/home/product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Explore
								</a>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0">
		<div class="flex-w flex-c-m">
            @foreach ($home_categories as $category)
            <div class="size-202 m-lr-auto respon4">
				<!-- Block1 -->
				<div class="block1 wrap-pic-w">
                    <img src="storage/categories_images/{{$category->image}}" style="height:500px" alt="{{$category->category_name}}">

					<a href="/home/product" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
							<span class="block1-name ltext-102 trans-04 p-b-8">
								{{$category->category_name}}
							</span>

							{{-- <span class="block1-info stext-102 trans-04">
								Spring 2018
							</span> --}}
						</div>

						<div class="block1-txt-child2 p-b-4 trans-05">
							<div class="block1-link stext-101 cl0 trans-09">
                                <form action="homepages/result" method="POST">
                                    {{-- @method('POST') --}}
                                    @csrf
                                    <input type="hidden" value="{{$category->id}}" name="category_id">
                                    <input type="submit" value="Explore">
                                </form>
								{{-- Explore --}}
							</div>
                        </div>

					</a>
				</div>
			</div>
            @endforeach
		</div>
	</div>

	<!-- Product -->
	<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Store Overview
				</h3>
			</div>

			<!-- Tab01 / Popular -->
			<div class="tab01">
				<!-- Tab panes -->
				<div class="tab-content p-t-50">
                    <!-- - -->
                    <h2 >Popular</h2>
                    <span class="nav-link active"></span>
					<div class="tab-pane fade show active" id="popular" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
                                @foreach ($popular_products as $product)
                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
                                            @foreach (json_decode($product->product_images) as $image)
                                            <img src="/storage/cover_images/{{$image}}" width="100" height="300" alt="{{$product->product_name}}">
                                            @break
                                            @endforeach
                                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 " data-toggle="modal" data-target="#product_detail"
                                        type="button" data-images="{{$product->product_images}}" data-status="{{$product->status}}" data-price="{{$product->price}}" data-seller_phone="{{$product->seller_phone}}"
                                        data-seller_email="{{$product->seller_email}}" data-description="{{$product->description}}" data-product_name="{{$product->product_name}}" data-updated_at={{$product->updated_at}} data-product_id="{{$product->id}}">
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
						</div>
					</div>
				</div>
            </div>

            <!-- Recent -->
            <div class="tab01">
				<!-- Tab panes -->
				<div class="tab-content p-t-50">
                    <!-- - -->
                    <h2 >Recent</h2>
                    <span class="nav-link active"></span>
                    <div class="tab-pane fade show active" id="recent" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
                                @foreach ($recent_products as $product)
                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
                                            @foreach (json_decode($product->product_images) as $image)
                                            <img src="/storage/cover_images/{{$image}}" width="100" height="300" alt="{{$product->product_name}}">
                                            @break
                                            @endforeach
                                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 " data-toggle="modal" data-target="#product_detail"
                                            type="button" data-images="{{$product->product_images}}" data-status="{{$product->status}}" data-price="{{$product->price}}" data-seller_phone="{{$product->seller_phone}}"
                                            data-seller_email="{{$product->seller_email}}" data-description="{{$product->description}}" data-product_name="{{$product->product_name}}" data-updated_at={{$product->updated_at}} data-product_id="{{$product->id}}">
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
						</div>
					</div>
				</div>
            </div>

		</div>
	</section>


	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Our Blogs
				</h3>
			</div>

			<div class="row">
                @foreach ($home_blogs as $blog)
                    <div class="col-sm-6 col-md-4 p-b-40">
                        <div class="blog-item">
                            <div class="hov-img0">
                                <a href="/home/blog/{{$blog->id}}">
                                    <img src="/storage/blogs_images/{{$blog->image}}" height="250px" alt="{{$blog->title}}">
                                </a>
                            </div>

                            <div class="p-t-15">
                                <div class="stext-107 flex-w p-b-14">
                                    <span>
                                        <span class="cl4">
                                            on
                                        </span>

                                        <span class="cl5">
                                            {{$blog->updated_at}}
                                        </span>
                                    </span>
                                </div>

                                <h4 class="p-b-12">
                                    <a href="/home/blog/{{$blog->id}}" class="mtext-101 cl2 hov-cl1 trans-04">
                                        {{$blog->title}}
                                    </a>
                                </h4>

                                <p class="stext-108 cl6">
                                    {{str_limit($blog->content,60)}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

			</div>
		</div>
    </section>

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Houses
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Fashion
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Electronics
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Computers
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Seller's Info
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								More Product
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Purchase
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know by reaching to  us on +2507 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">

				<p class="stext-107 cl6 txt-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | hamubere.com
				</p>
			</div>
        </div>
        {{-- Product detail modal --}}
        <style>
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
                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="modal" data-target="#comment">
                                            Comment
                                        </button>
                                        <form action="/" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" id="view_comments">
                                            <a  type="submit" name="view_comments" class="btn btn-light dropdown-toggle" data-toggle="modal" data-target="#all_comments">
                                                View Comments
                                            </a>
                                        </form>

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
        {{-- comment's modal --}}
        <div class="modal fade" id="comment">
            <div class="modal-dialog modal-md comment-modo">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">#Leave a Comment</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>
                    {!!
                    Form::open(['action'=>'CommentsController@store','method'=>'POST'])
                    !!}
                    <label for="inputEmail" class="sr-only mt-1">Email</label>
                    <input id="inputEmail" class="form-control mb-1 bg-dark border-top-0 border-left-0 border-right-0 border-ligth rounded-0 text-light" placeholder="Your Email" required="" autofocus="" type="email" name="email" >
                    <label for="inputComment" class="sr-only">Comment</label>
                    <textarea id="inputComment" name="content" class="form-control mb-1 bg-dark border-top-0 border-left-0 border-right-0 border-ligth rounded-0 text-light" placeholder="Enter a Comment..." required="" ></textarea>
                    <input type="hidden" name="for" value="product">
                    <input type="hidden" id="for_id" name="for_id" value="">
                    {{Form::submit(' Commnent',['class'=>'btn btn-primary text-center comment'])}}

                    {!! Form::close() !!}
                  </p>
                  <p>
                    @foreach ($comments as $comment)
                    @if (($comment->for == "product") && ($comment->for_id == 9))
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
                  </p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
          {{-- /.comments end --}}

          {{-- view comment's modal --}}
        <div class="modal fade" id="all_comments">
            <div class="modal-dialog modal-md comment-modo">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">#all  Comments</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>
                    <h3>Recent Comments</h3>
                    @foreach ($comments as $comment)
                    @if (($comment->for == "product") && ($comment->for_id == $that_product->id))

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
                  </p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
          {{-- /.comments end --}}
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function(){
            $('#product_detail').on('show.bs.modal', function (event) {
                // console.log("modal opened");
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            var test = button.data('test')
            var images = [];
            images = button.data('images')
            var status =  button.data('status')
            var seller_phone =  button.data('seller_phone')
            var seller_email =  button.data('seller_email')
            var description =  button.data('description')
            var product_name =  button.data('product_name')
            var updated_at =  button.data('updated_at')
            var price = button.data('price')
            var product_id = button.data('product_id')

            $("#for_id").val(product_id);
            $("#view_comments").val(product_id);
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            var changed_img = JSON.stringify(images);
            var final_img = JSON.parse(changed_img);
            // document.write(datas[0]);
            var f_img = final_img[0];
            var s_img = final_img[1];
            var t_img = final_img[2];
            var url1 = "/storage/cover_images/";
            // console.log(t_img);
            // modal.find('.modal-title').text('New message to ' + recipient)
            // modal.find('.modal-body input').val(recipient)
            // modal.find('.modal-body #img_01').attr("data-thumb",url1 + f_img)
            if ((final_img.length)>2 ) {
                $(".single_img").css('display','none');
                $(".two_img").css('display','none');
                $(".multi_img").css('display','flex');
                modal.find('.modal-body #img_1').attr('src',url1 + f_img)
                modal.find('.modal-body #img_2').attr('src',url1 + s_img)
                modal.find('.modal-body #img_3').attr('src',url1 + t_img)
                if (status == 0) {
                    var Status = "Available";
                    $("#product_status").css('color','green')
                    $("#badge").addClass("badge badge-pill badge-success")
                }else {
                    var Status = "Out of Stock";
                    $("#product_status").css('color','red')
                    $("#badge").addClass("badge badge-pill badge-danger")
                }
                modal.find('.modal-body #product_status').html(Status)
                modal.find('.modal-body #product_name').html(product_name)
                modal.find('.modal-body #description').html(description)
                var changed_date = new  Date(updated_at).toDateString();
                // console.log(changed_date);
                modal.find('.modal-body #seller_info').html(seller_phone +" / "+ seller_email)
                modal.find('.modal-body #updated_at').html(changed_date)
                modal.find('.modal-body #price').html(price)


            }else if((final_img.length)>1 && (final_img.length)<3){
                $(".single_img").css('display','none');
                $(".multi_img").css('display','none');
                $(".two_img").css('display','flex');

                modal.find('.modal-body #img_1').attr('src',url1 + f_img)
                modal.find('.modal-body #img_2').attr('src',url1 + s_img)
                if (status == 0) {
                    var Status = "Available";
                    $("#product_status").css('color','green')
                    $("#badge").addClass("badge badge-pill badge-success")
                }else {
                    var Status = "Out of Stock";
                    $("#product_status").css('color','red')
                    $("#badge").addClass("badge badge-pill badge-danger")
                }
                modal.find('.modal-body #product_status').html(Status)
                modal.find('.modal-body #product_name').html(product_name)
                modal.find('.modal-body #description').html(description)
                var changed_date = new  Date(updated_at).toDateString();
                // console.log(changed_date);
                modal.find('.modal-body #seller_info').html(seller_phone +" / "+ seller_email)
                modal.find('.modal-body #updated_at').html(changed_date)
                modal.find('.modal-body #price').html(price)
            }
             else {
                $(".multi_img").css('display','none');
                $(".two_img").css('display','none');
                $(".single_img").css('display','flex');
                modal.find('.modal-body #img_1').attr('src',url1 + f_img)
                if (status == 0) {
                    var Status = "Available";
                    $("#product_status").css('color','green')
                    $("#badge").addClass("badge badge-pill badge-success")
                }else {
                    var Status = "Out of Stock";
                    $("#product_status").css('color','red')
                    $("#badge").addClass("badge badge-pill badge-danger")
                }
                modal.find('.modal-body #product_status').html(Status)
                modal.find('.modal-body #product_name').html(product_name)
                modal.find('.modal-body #description').html(description)
                var changed_date = new  Date(updated_at).toDateString();
                // console.log(changed_date);
                modal.find('.modal-body #seller_info').html(seller_phone +" / "+ seller_email)
                modal.find('.modal-body #updated_at').html(changed_date)
                modal.find('.modal-body #price').html(price)
            }

            })

        });
    </script>
    <script>
        $(function(){
		$('.main-menu li a').filter(function(){return this.href==location.href}).parent().addClass('active-menu').siblings().removeClass('active-menu')
		$('.main-menu li a').click(function(){
			$(this).parent().addClass('active-menu').siblings().removeClass('active-menu')
		})
        // $('.main-menu li a').click(function(){
		// 	$(this).parent().addClass('active-menu').siblings().removeClass('active-menu')
		// })
	})
    </script>
    <script>
        $('.comment').click(function(){
            swal({
            title:'Comment Sent!',
            text:"{{Session::get('success')}}",
            timer:5000,
            type:'success'
        }).then((value) => {
        //location.reload();
        }).catch(swal.noop);
            });
    </script>

</body>
</html>
