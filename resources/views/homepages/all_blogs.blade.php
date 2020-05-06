@extends('layouts.home')
@section('content')
	<div class="breadcrumbs">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb ">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Blogs</li>
			</ol>
		</nav>
	</div>
    @if (count($blogs)>0)
        <!-- Content page -->
        <div class="blogs mb-5 mt-3">
            <div class="blog-container">
                @foreach (App\Blog::orderBy('created_at','desc')->skip(0)->take(3)->get() as $blog)
                    <div class="card blog-card">
                        <img src="/storage/blogs_images/{{$blog->image}}" height="250px" alt="{{$blog->title}}">
                        <div class="card-body">
                            <p><small class="text-muted blog-date">{{$blog->updated_at->format('M d, Y')}} </small></p>
                            <h4 class="card-text"> <strong>{{$blog->title}}</strong> </h4>
                            <p class="card-text"> {{str_limit($blog->content,60)}} </p>
                            <a href="/home/blog/{{$blog->id}}" class="read-more-blog text-decoration-none">Read More</a>
                        </div>
                    </div>
                @endforeach                
            </div>
            <div class="d-flex justify-content-center mt-5 ">
            {{-- pagination links  --}}
                <span class="text-center page-links">{{$blogs->render()}}</span>
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
