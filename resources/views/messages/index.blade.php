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
                 <a href="/messages">Messages</a></li>
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
        {{-- blogs --}}
        <section class="col-lg-12 connectedSortable table-responsive" id="all_blogs">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Messages</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> Sender Email</th>
                    <th> Message</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->email }}</td>

                        <td>{{ str_limit($message->message,20) }}</td>
                        <td> {{$message->created_at}} </td>

                        <td>
                            |<a href="/messages/{{$message->id}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                        </td>

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
