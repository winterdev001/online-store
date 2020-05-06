<nav class="navbar navbar-expand-lg navbar-light bg-light navbar fixed-top main-nav ">
    <div style="border:5px solid #f6c89f;" class=" text-center">
        <a class="navbar-brand p-2 text-center " href="/">Hamubere</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto  mx-auto main-menu">
            <li class="nav-item active-menu">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item productz" id="productz">
                <a class="nav-link toproduct " href="/home/product">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link blog" href="/homepages/all_blogs">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home/contact">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="POST" action="/home/product">
            @csrf
            <input class="form-control mr-sm-2 search-input" type="search" placeholder="Search" aria-label="Search" name="search_query">
            <button class="btn sec my-2 my-sm-0 search-btn" type="submit" name="search">Search</button>
        </form>
    </div>
</nav>




