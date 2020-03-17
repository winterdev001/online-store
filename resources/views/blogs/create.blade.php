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
                          <h3 class="card-title">Create Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           {{-- content --}}
                           {!! Form::open(['action'=>'BlogsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                <div class="form-group">
                                    {{Form::label('title','Title')}}
                                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="category_id">
                                        <option >Select Blog's Category</option>
                                        @foreach (App\BlogCategory::all() as $blog_cat)
                                        <option value="{{ $blog_cat->id }}"> {{ $blog_cat->category_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Content:</label>
                                    <textarea class="form-control" rows="5" name="content" id="comment"></textarea>
                                </div>

                                <div class="form-group">
                                    {{Form::label('Blog Image')}}
                                    <input type="file" name="image" class="form-control">
                                </div>

                                {{Form::submit('Create Blog',['class'=>'btn btn-primary'])}}

                            {!! Form::close() !!}
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
 @endsection
