<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <i class="navbar-brand">@section('pageName')Page : @show</i>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link @if (request()->routeIs('index')) active @endif" aria-current="page" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link @if (request()->routeIs('categories.index')) active @endif" href="{{ route('categories.index') }}">Categories</a></li>
                <li class="nav-item"><a class="nav-link @if (request()->routeIs('news.index')) active @endif" href="{{ route('news.index') }}">News</a></li>
                <li class="nav-item"><a class="nav-link @if (request()->routeIs('news.order')) active @endif" aria-current="page" href="{{ route('news.order') }}">Order</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.categories.index') }}">Admin page</a></li>
            </ul>
        </div>
    </div>
</nav>
