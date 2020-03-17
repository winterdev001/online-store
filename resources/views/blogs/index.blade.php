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
        {{-- blogs --}}
        <section class="col-lg-12 connectedSortable table-responsive" id="all_blogs">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Blogs</h3>
              <a href="/blogs/create" class="btn btn-primary float-right">Add Blog</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> Title</th>
                    <th>Category</th>
                    <th> Content</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $blog)
                  <tr>
                    <td>{{ $blog->title }}</td>
                    <td>
                        @foreach (App\BlogCategory::all() as $blog_cat)
                            @if ($blog_cat->id == $blog->category_id)
                                {{$blog_cat->category_name}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ str_limit($blog->content,20) }}</td>

                    <td>
                        <a href="/blogs/{{$blog->id}}/edit" class="btn btn-default"><i class="fa fa-pen"></i></a>
                        |<a href="/blogs/{{$blog->id}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
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

        {{-- blog categories --}}
        <section class="col-lg-12 connectedSortable table-responsive" id="all_blogs">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blog's Categories</h3>
                <a href="/blogcategories/create" class="btn btn-primary float-right">Add Category</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Category name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($blog_categories as $blog_cat)
                    <tr>
                      <td>{{ $blog_cat->category_name }}</td>

                      <td>
                        <form action="{{route('blogcategories.destroy',$blog_cat->id) }}" method="POST">
                            <a href="/blogcategories/{{$blog_cat->id}}/edit" class="btn btn-default"><i class="fa fa-pen"></i></a>|

                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure You want to delete this item?')"><i class="fa fa-trash"></i></button>
                        </form>
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
