<!-- Categories widget-->
<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('news.index') }}">Home</a></li>
                    <li><a href="{{ route('news.categories') }}">Categories</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('news.news', mt_rand(6, 12)) }}">News</a></li>
                    <li><a href="{{ route('admin.categories.index') }}">Admin page</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('news.order') }}">Order</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Side widget-->
<div class="card mb-4">
    <div class="card-header">Side Widget</div>
    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
</div>

<!-- Feedback form widget-->
<div class="card mb-4">
    <div class="card-header">Форма обратной связи</div>
    <div class="card-body">
        {{-- @if ($errors->any()) --}}
        @if ($errors->has('feedbackUserName'))
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <form method="post" action="{{ route('news.info') }}">
            @csrf
            <div class="form-group">
                <label for="title">Имя пользователя</label>
                <input type="text" class="form-control" name="feedbackUserName" id="feedbackUserName" value="{{ old('feedbackUserName') }}">
            </div>
            <div class="form-group">
                <label for="description">Отзыв</label>
                <textarea class="form-control" name="feedbackDescription" id="feedbackDescription">{!! old('feedbackDescription') !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
</div>
