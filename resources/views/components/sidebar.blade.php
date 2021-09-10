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