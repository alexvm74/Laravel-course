<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Blog</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <i class="navbar-brand">@section('pageName')Page @show</i>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('news.categories') }}">Worldwide job</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('news.news', mt_rand(6, 12)) }}">Job news</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.categories.index') }}">Admin page</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-3">
                @yield('content_index_1')
                @yield('content_categories_1')
                @yield('content_news_1')
                @yield('content_show_1')
            </div>
        </div>
    </header><br><br>

    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            @yield('content_index_2')
            @yield('content_categories_2')
            @yield('content_news_2')
            @yield('content_show_2')
        </div>
        <!-- Categories widget-->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <ul class="list-unstyled mb-0">
                                <li><a href="{{ route('news.index') }}">Home</a></li>
                                <li><a href="{{ route('news.categories') }}">Categories</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <ul class="list-unstyled mb-0">
                                <li><a href="{{ route('news.news', mt_rand(6, 12)) }}">News</a></li>
                                <li><a href="{{ route('admin.categories.index') }}">Admin page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>