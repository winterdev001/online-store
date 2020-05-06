<nav class="navbar navbar-light bg-light">
    <ul class="nav  cats  mt-3" role="tablist">
        @foreach (App\Category::orderBy('category_name','asc')->get() as $category)
        <form action="/home/product" method="POST">                        
            @csrf
               <button type="submit" name="cat_from_home" class="filter-by-cat-home">
                    <li role="presentation" class="active"> {{$category->category_name}}</li>
               </button>
               <input type="hidden" value="{{$category->id}}" name="category_id"  >
        </form>
            
        @endforeach
    </ul>
</nav>
<hr>
