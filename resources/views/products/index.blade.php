<div class="container mt-2">
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="/">All Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/fields/create">Add Field</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categories/create">Add Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/products/create">Add Product</a>
        </li>
    </ul>
</div>
@extends('layouts.products')

@section('content')
  <h1>All Products</h1>
  @if (count($products) > 0)
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Field</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
          <tr>
            <th >{{ $product->product_name }}</th>
            <td>
                @foreach ($fields as $field)
                    @if ($product->field_id == $field->id)
                         {{ $field->field_name }}
                    @endif
                @endforeach
            </td>
            <td>
                @foreach ($categories as $category)
                    @if ($product->category_id == $category->id)
                         {{ $category->category_name }}
                    @endif
                @endforeach
            </td>
            <td>{{ $product->price }} $</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->total }} $</td>
            <td><a href="/products/{{$product->id}}" class="btn btn-warning">Show</a></td>
          </tr>
          @endforeach
          <tr>
              <th colspan="5">Total</th>
              <td>{{ $total }} $</td>
          </tr>
          <tr>

          </tr>
        </tbody>
      </table>

      {{-- pagination links  --}}
      {{$products->links()}}
  @else
      <p>No Product found.</p>
  @endif
@endsection
