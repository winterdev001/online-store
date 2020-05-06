<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Products List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <style>
   /* .container{
    padding: 5%;
   }  */
</style>
</head>
<body>
<div >
    <h2 class="text-center">{{$title}}</h2>
    <table id="example1" class="table  table-bordered" >
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Field</th>
            <th>Category</th>
            <th>Price(Rwf)</th>
            <th>Quantity</th>
            <th>Total(Rwf)</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <th>{{ $product->product_name }}</th>
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
            <td>{{number_format($product->price)}} </td>
            <td>{{ $product->quantity }}</td>
            <td>{{number_format($product->total)}} </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
