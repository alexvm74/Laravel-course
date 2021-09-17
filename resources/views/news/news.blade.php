@extends('layouts.main')

@section('pageName')
    @parent News categoriy : #ID {{ $id_category }}
@endsection

@section('header')
    <h1 class="fw-bolder">News from Category</h1>
@endsection

@section('content')
        @forelse($newsList as $news)
            <div class="col-lg-6">
                <!-- Blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ now()->format('d-m-Y H:i') }}</div>
                        <h2 class="card-title h4">{!! $news->id . '. ' . $news->title !!}</h2>
                        <p class="card-text">{!! $news->description !!}</p>
                        <a class="btn btn-primary" href="{{ route('news.show', ['id_category' => $id_category, 'id_news' => $news->id]) }}">Read more →</a>
                    </div>
                </div>
            </div>
        @empty
            <h3>No news.</h3>
        @endforelse
@endsection
