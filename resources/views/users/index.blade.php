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
                 <a href="/users">Users</a></li>
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
        <section class="col-lg-12 connectedSortable table-responsive" id="all_users">

          <div class="card">
            <div class="card-header">       
              <div class="row">
                <div class="col-md-9">
                  <h3 class="card-title">Users</h3>
                </div>
                <div class="col-md-3">
                  <a href="/users/create" class=" btn btn-primary">Add User</a>
                  <a href="{{ url('user_pdf') }}" class="btn btn-success ">Export PDF</a>
                </div>
              </div> 
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                        <td> {{$user->name}}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            @if ($user->super == 1)
                                Super Admin
                            @else
                                Admin
                            @endif
                        </td>

                        <td>
                            <form action="{{route('users.destroy',$user->id) }}" method="POST">
                                <a href="/users/{{$user->id}}" class="btn btn-warning"><i class="fa fa-eye"></i></a> |
                                @if (auth()->user()->super == 1)
                                    <a href="/users/{{$user->id}}/edit" class="btn btn-default"><i class="fa fa-pen"></i></a>|

                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this item?')"><i class="fa fa-trash"></i></button>
                                @else
                                @endif
                            </form>
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
