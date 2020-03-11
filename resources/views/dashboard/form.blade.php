{{-- {!! Form::open(['action'=>['CategoriesController@update',$single_category->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('category_name','Category Name')}}
        {{Form::text('category_name',$single_category->category_name,['class'=>'form-control','placeholder'=>'Category Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('Product Image')}}
        <input type="file" name="image" value="{{$single_category->image}}" class="form-control">
    </div>

    {{Form::submit('Edit Category',['class'=>'btn btn-primary text-center'])}}

{!! Form::close() !!} --}}

{{-- <form action="">
    <input type="text" id="category_name" class="form-input">
    <input type="text" id="image" class="form-input" >
</form> --}}
