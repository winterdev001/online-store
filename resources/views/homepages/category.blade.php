<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    All Categories
    </button>
    <div class="dropdown-menu " aria-labelledby="dropdownMenu2">
        <a href="/home/product" class="dropdown-item">All</a>
        @foreach (App\Category::all() as $category)
            {{-- <button class="dropdown-item list-group-item" type="button">{{$category->category_name}}</button> --}}
            <form action="/homepages/products_by_cat" method="POST" class=" list-group">
                {{-- @method('POST') --}}
                @csrf
                <input type="hidden" value="{{$category->id}}" name="category_id">
                <input type="submit" onclick="changeActive()" id="set-active" class=" dropdown-item list-group-item " value="{{$category->category_name}}">
            </form>
         @endforeach
    </div>
</div>


