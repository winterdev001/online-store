<nav class="navbar navbar-light bg-light">
    <ul class="nav  cats " role="tablist">
        @foreach (App\Category::orderBy('created_at','desc')->get() as $category)
            <li role="presentation" class="active"><a href="#home"> {{$category->category_name}}</a></li>
        @endforeach
    </ul>
</nav>
<hr>
