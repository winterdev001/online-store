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
                          <h3 class="card-title">field Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           {{-- content --}}
                            <div class="card col-8">
                                <div class="card-body" >
                                    <p>Field Name: {{$field->field_name}}</p>
                                </div>
                            </div>
                            <table>
                                <td>
                                    {!!Form::open(['action'=>['FieldsController@destroy',$field->id],'method'=>'POST','class'=>' '])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this item?')"><i class="fa fa-trash"></i></button>
                                    {{-- {{Form::submit('Delete',['class'=>'btn btn-danger ','onclick'=>"return confirm('Are you sure You want to delete this item?')"])}} --}}
                                    {!!Form::close()!!}
                                </td>
                                <td><a href="/dashboard" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Back</a></td>
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
