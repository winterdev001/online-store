@extends('layouts.pages')

@section('content')
    	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="javascript:void(1)" class="stext-109 cl8 hov-cl1 trans-04">
				Blog
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
			<span class="stext-109 cl4">
				Result
			</span>
		</div>
    </div>
    @if (count($blogs)>0)
        <!-- Content page -->
        <div class="container mt-3">
            <div class="row isotope-grid">
                @foreach ($blogs as $blog)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="/storage/blogs_images/{{$blog->image}}" width="100" height="300" alt="{{$blog->title}}">
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="/home/blog/{{$blog->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{$blog->title}}
                                </a>

                                {{-- <span class="stext-105 cl3">
                                    {{$blog->price}}$
                                </span> --}}
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
            <div class="flex-c-m flex-w w-full p-t-45">
				{{-- pagination links  --}}
                {{-- {{$blogs->links()}} --}}
			</div>
        </div>
    @else
        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center">
                <div class="card card-body">
                    <div class="alert alert-dark alert-block">
                        {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                        <strong>Ooops!? No Items found.</strong>
                        <button  class="btn btn-light float-right" onclick="goBack()">Go Back</button>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <script>
        function goBack() {
        window.history.back();
        }
    </script>

@endsection
