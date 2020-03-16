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
            <li class="breadcrumb-item"><a href="/dashboard">Home</a> <span><i class="fa fa-chevron-right"></i></span>
                 <a href="/carousells">Carousel</a></li>
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
        <section class="col-lg-12 connectedSortable table-responsive" id="all_carousels">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Carousels</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Fisrt Title</th>
                    <th>Socond Title</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($carousels as $carousel)
                  <tr>
                    <td>{{ $carousel->first_title }}</td>
                    <td>{{ $carousel->second_title }}</td>

                    <td>
                        <a href="/carousel/{{$carousel->id}}/edit" class="btn btn-default"><i class="fa fa-pen"></i></a>
                        |<a href="/carousel/{{$carousel->id}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                    </td>
                    {{-- <td><a href="/products/{{$product->id}}" class="btn btn-warning">Show</a>
                    </td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </section>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection
