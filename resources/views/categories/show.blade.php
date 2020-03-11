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
                          <h3 class="card-title">Category Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           {{-- content --}}
                            <div class="card col-8">
                            <div class="row">
                                <div class="col-md-5">
                                <div class="card-body" >
                                    <p>Category Name: {{$category->category_name}}</p>
                                </div>

                                </div>
                                <div class="col-md-7">
                                <img style="width:100%" height="100%" src="/storage/categories_images/{{$category->image}}" class="card-img"
                                    alt="{{$category->category_name}}">
                                </div>
                            </div>
                            </div>
                            <table>
                                <td>
                                    {!!Form::open(['action'=>['CategoriesController@destroy',$category->id],'method'=>'POST','class'=>' '])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger ','onclick'=>"return confirm('Are you sure You want to delete this item?')"])}}
                                    {!!Form::close()!!}
                                </td>
                                <td><a href="/dashboard" class="btn btn-dark">Back</a></td>
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
 @endsection
