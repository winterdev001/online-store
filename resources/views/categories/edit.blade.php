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
                          <h3 class="card-title">Update Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {!! Form::open(['action'=>['CategoriesController@update',$category->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                <div class="form-group">
                                    {{Form::label('category_name','Category Name')}}
                                    {{Form::text('category_name',$category->category_name,['class'=>'form-control category_name','placeholder'=>'Category Name','id'=>'category_name'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('Category Image')}}
                                    <input type="file" name="image"  class="form-control">
                                </div>
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit('Update',['class'=>'btn btn-primary'])}}

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
