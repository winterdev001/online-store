@extends('layouts.dashboard_contents')

@section('content')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                @include('inc.message')
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                  <!-- Left col -->
                  {{-- products --}}
                  <section class="col-lg-12 connectedSortable" id="all_products">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Blog Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           {{-- content --}}
                           <div class="card col-12">
                            <div class="row">
                                <div class="col-md-5">
                                <div class="card-body blog-show" >
                                    <p class="card-title"><strong>Title: {{$blog->title}}</strong></p>
                                    <p class="card-text">Category:
                                        @foreach (App\BlogCategory::all() as $blog_cat)
                                            @if ($blog_cat->id == $blog->category_id)
                                                {{$blog_cat->category_name}}
                                            @endif
                                        @endforeach
                                    </p>
                                    <p>{{$blog->content}}</p>
                                </div>

                                </div>
                                <div class="col-md-7">
                                <img style="width:100%" height="100%" src="/storage/blogs_images/{{$blog->image}}" class="card-img"
                                    alt="{{$blog->title}}">
                                </div>
                            </div>
                            </div>
                            <table>
                                @if (auth()->user()->super == 1)
                                    <td>
                                        {!!Form::open(['action'=>['BlogsController@destroy',$blog->id],'method'=>'POST','class'=>' '])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this item?')"><i class="fa fa-trash"></i></button>
                                        {{-- {{Form::submit('Delete',['class'=>'btn btn-danger ','onclick'=>"return confirm('Are you sure You want to delete this item?')"])}} --}}
                                        {!!Form::close()!!}
                                    </td>
                                @else
                                @endif
                                <td><a href="/blogs" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Back</a></td>
                            </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    <!-- /.card -->

                  </section>
                </div>
                <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>
    </section>
    <style>
        .blog-show {
            overflow-y:scroll;
            max-height: 800px;
        }
    </style>
 @endsection
