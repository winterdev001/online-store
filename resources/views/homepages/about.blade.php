@extends('layouts.home')

@section('content')
{{-- breadcrumbs --}}
	<div class="breadcrumbs">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb ">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">About</li>
			</ol>
		</nav>
	</div>
	<!-- Content page -->
	<section class="text-center about mt-3 mb-5">
		<h1>About US</h1>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200" >
					<div class="card about-card">
						<div class="card-body">
						<span class="fa fa-user"></span>
						<h5 class="mt-2">Our Story</h5>
						<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
					<div class="card  about-card">
						<div class="card-body">
							<span class="fa fa-info"></span>
							<h5 class="mt-2"> Our Mission </h5>
							<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
							</div>
						</div>
					</div>
				<div class="clearfix visible-md-block visible-sm-block"></div>
				<div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
					<div class="card about-card">
						<div class="card-body">
							<span class="fa fa-file"></span>
							<h5 class="mt-2">Our Vision </h5>
							<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
							</div>
						</div>
					</div>				
			</div>			
		</div>
	</section>

	<style>
		.about{
			cursor: pointer;
			background-color: white;
			color: black;
			padding-top: 20px;
			padding-bottom: 30px;
		}
		.about h1 {
			padding: 10px 0;
			margin-bottom: 20px;
		}
		.about h2 {
			opacity: .8;
		}
		.about span {
			display: block;
			width: 100px;
			height: 100px;
			line-height: 100px;
			margin:auto;
			border-radius:50%;  
			font-size: 40px;
			color: black;
			opacity: 0.7;
			background-color: #f6c89f;
			border: 2px solid #f6c89f;

			webkit-transition:all .5s ease;
			moz-transition:all .5s ease;
			os-transition:all .5s ease;
			transition:all .5s ease;

		}
		.about-item:hover span{
			opacity: 1;	
			border: 2px solid #f6c89f;
			font-size: 42px;
			-webkit-transform: scale(1.1,1.1) rotate(360deg) ;
			-moz-transform: scale(1.1,1.1) rotate(360deg) ;
			-o-transform: scale(1.1,1.1) rotate(360deg) ;
			transform: scale(1.1,1.1) rotate(360deg) ;
		}
		.about-item:hover h2{
			opacity: 1;
			-webkit-transform: scale(1.1,1.1)  ;
			-moz-transform: scale(1.1,1.1)  ;
			-o-transform: scale(1.1,1.1)  ;
			transform: scale(1.1,1.1) ;
		}
		.about .lead{
			color: #202040;
			font-size: 14px;
			/* font-weight: bold; */
		}

		.about-card {
			height: 100% !important;
			margin-top: .5rem !important;
		}
	</style>
@endsection
