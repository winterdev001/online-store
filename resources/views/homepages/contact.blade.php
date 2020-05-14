@extends('layouts.home')

@section('content')
    {{-- breadcrumbs --}}
	<div class="breadcrumbs">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb ">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Contact</li>
			</ol>
		</nav>
	</div>

	<!-- Content page -->
	<div class="card mt-3 mb-5">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200" >
					<div class="card contact-card">
						<div class="card-body">
							@include('inc.message')
							{!!Form::open(['action'=>'MessagesController@store','method'=>'POST'])!!}
								<h5 class="font-weight-bold">
									 Send Us A Message
								</h5>

								<div class="form-group">
									<input class="form-control col-md-12 col-sm-12" type="text" name="email" placeholder="Your Email Address">
								</div>

								<div class="form-group ">
									<textarea class="form-control col-md-12 col-sm-12" rows="4" name="message" placeholder="How Can We Help?"></textarea>
								</div>

							{{Form::submit(' Send',['class'=>'btn comment-btn '])}}

							{!! Form::close() !!}
						</div>
				  </div>
				</div>
				<div class="col-lg-6 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
					<div class="card contact-card">
						<div class="card-body">
							<div class="direct-contact-container">

								<ul class="contact-list ">
									<li class="list-item"><i class="fa fa-map-marker "></i> <span class="font-weight-bold">Address</span>  <br>
										<span class="contact-text place text-dark">Kigali | KN 57 St</span>
									</li>

									<li class="list-item"><i class="fa fa-phone "></i> <span class="font-weight-bold">Let's talk</span>  <br>
										<span class="contact-text phone"><a class="text-decoration-none text-dark" href="tel:+250-788-226-574" title="Give me a call">(250)788-226-574</a></span>
									</li>

									<li class="list-item"><i class="fa fa-envelope "></i> <span class="font-weight-bold">Sale Support</span>  <br>
										<span class="contact-text gmail"><a class="text-decoration-none text-dark" href="mailto:hamubereltd@gmail.com" title="Send me an email">hamubereltd@gmail.com</a></span>
									</li>

								</ul>
							</div>
						</div>
					</div>
			  </div>
		  </div>
		</div>
	</div>

	<style>
		.contact-card {
			height: 100% !important;
		}

		/* Location, Phone, Email Section */
		.contact-list {
			list-style-type: none;
			/* margin-left: -30px; */
			/* padding-right: 20px; */
		}

		.list-item {
			line-height: 3;
			color: rgba(0, 0, 0, 0.603);
			/* padding: 1rem */
		}

		.contact-text {
			/* font: 300 18px 'Lato', sans-serif; */
			letter-spacing: 1.9px;
			/* color: black !important; */
			margin-left: 1rem
		}


	</style>
@endsection
