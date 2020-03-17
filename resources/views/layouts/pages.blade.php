<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon2.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
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
                        {{-- <img src="{{ asset('images/icons/logo-0.png')}}" alt="IMG-LOGO"> --}}
                        <h2 class="nav-brand"><strong><span class="text-dark">Hamubere</span> </strong></h2>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li >
								<a  href="/">Home</a>
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

					<!-- Icon header -->
					{{-- <div class="wrap-icon-header flex-w flex-r-m h-full">
						<div class="flex-c-m h-full p-r-24">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>
						</div>
					</div> --}}
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
			{{-- <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-10">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
				</div>
			</div> --}}

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
						{{-- <li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li> --}}
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="/home/product">Shop</a>
				</li>

				{{-- <li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="/blog">Blog</a>
				</li> --}}

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
					<img src="{{ asset('images/icons/icon-close2.png')}}" alt="CLOSE">
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


	@yield('content')

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
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="{{ asset('images/icons/icon-close.png')}}" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="{{ asset('images/product-detail-01.jpg')}}">
										<div class="wrap-pic-w pos-relative">
											<img src="i{{ asset('mages/product-detail-01.jpg')}}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('images/product-detail-01.jpg')}}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="{{ asset('images/product-detail-02.jpg')}}">
										<div class="wrap-pic-w pos-relative">
											<img src="{{ asset('images/product-detail-02.jpg')}}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('images/product-detail-02.jpg')}}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="{{ asset('images/product-detail-03.jpg')}}">
										<div class="wrap-pic-w pos-relative">
											<img src="{{ asset('images/product-detail-03.jpg')}}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('images/product-detail-03.jpg')}}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>

							<!--  -->
							<div class="p-t-33">

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">

                                        <div class="" styl="border-left:5px solid black !important;height:4rem;">
                                            <p>Contact Us On : +250788993366 <br>
                                            Email us On : Hamubere.com</p>
                                        </div>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/slick/slick.min.js')}}"></script>
	<script src="{{ asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
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
	<script src="{{ asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
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
	<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
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
    <script src="{{ asset('js/main.js')}}"></script>
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
        $(document).ready(function(){
            $('.class1').on('change', function(){
                if($('.class1:checked').length){
                    //or $('.class3').prop({disabled: 'disabled', checked: false});
                    $('.class2').prop('disabled', true);
                    $('.class3').prop('disabled', true);
                    $('.class4').prop('disabled', true);
                    $('.class5').prop('disabled', true);
                    return;
                }
                $('.class2').prop('disabled', false);
                $('.class3').prop('disabled', false);
                $('.class4').prop('disabled', false);
                $('.class5').prop('disabled', false);
            });

            $('.class2').on('change', function(){
                if($('.class2:checked').length){
                    //or $('.class3').prop({disabled: 'disabled', checked: false});
                    $('.class1').prop('disabled', true);
                    $('.class3').prop('disabled', true);
                    $('.class4').prop('disabled', true);
                    $('.class5').prop('disabled', true);
                    return;
                }
                $('.class1').prop('disabled', false);
                $('.class3').prop('disabled', false);
                $('.class4').prop('disabled', false);
                $('.class5').prop('disabled', false);
            });

            $('.class3').on('change', function(){
                if($('.class3:checked').length){
                    //or $('.class3').prop({disabled: 'disabled', checked: false});
                    $('.class1').prop('disabled', true);
                    $('.class2').prop('disabled', true);
                    $('.class4').prop('disabled', true);
                    $('.class5').prop('disabled', true);
                    return;
                }
                $('.class1').prop('disabled', false);
                $('.class2').prop('disabled', false);
                $('.class4').prop('disabled', false);
                $('.class5').prop('disabled', false);
            });
            $('.class4').on('change', function(){
                if($('.class4:checked').length){
                    //or $('.class3').prop({disabled: 'disabled', checked: false});
                    $('.class1').prop('disabled', true);
                    $('.class2').prop('disabled', true);
                    $('.class2').prop('disabled', true);
                    $('.class5').prop('disabled', true);
                    return;
                }
                $('.class1').prop('disabled', false);
                $('.class2').prop('disabled', false);
                $('.class3').prop('disabled', false);
                $('.class5').prop('disabled', false);
            });
            $('.class5').on('change', function(){
                if($('.class5:checked').length){
                    //or $('.class3').prop({disabled: 'disabled', checked: false});
                    $('.class1').prop('disabled', true);
                    $('.class2').prop('disabled', true);
                    $('.class3').prop('disabled', true);
                    $('.class4').prop('disabled', true);
                    return;
                }
                $('.class1').prop('disabled', false);
                $('.class2').prop('disabled', false);
                $('.class3').prop('disabled', false);
                $('.class4').prop('disabled', false);

            });

        })
    </script>
    <script>
        $(document).ready(function(){
            $(function(){
            $('.main-menu li a').filter(function(){return this.href==location.href}).parent().addClass('active-menu').siblings().removeClass('active-menu')
            $('.main-menu li a').click(function(){
                $(this).parent().addClass('active-menu').siblings().removeClass('active-menu')
            })

        });
        $('#set-active').click(function(){
            $('.main-menu ul li:nth-child(2) ').addClass('active-menu')
        });
        function changeActive(){
            $('.main-menu ul li:nth-child(2) ').addClass('active-menu')
        }
        });
    </script>

</body>
</html>
