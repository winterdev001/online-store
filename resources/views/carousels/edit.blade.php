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
                          <h3 class="card-title">Edit Carousel</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           {{-- content --}}
                            <h1>Edit Carousel</h1>
                            {!! Form::open(['action'=>['CarouselsController@update',$carousel->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                <div class="form-group">
                                    {{Form::label('first_title','First Title')}}
                                    {{Form::text('first_title',$carousel->first_title,['class'=>'form-control','placeholder'=>'First Title'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('second_title','Second Title')}}
                                    {{Form::text('second_title',$carousel->second_title,['class'=>'form-control','placeholder'=>'Second Title'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('Carousel Image')}}
                                    <input type="file" name="image" class="form-control">
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
