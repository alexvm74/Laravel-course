@extends('layouts.main')

@section('title')
    @parent Categories
@endsection

@section('pageName')
    @parent News categories
@endsection

@section('header')
    <h1 class="fw-bolder">Categories</h1>
@endsection

@section('content')
    @forelse($categoryList as $category)
        <div class="col-lg-6">
            <!-- Blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $category->created_at }}</div>
                    <h2 class="card-title h4">{{ $category->id . '. ' }}<a href="{{ route('categories.show', ['id' => $category->id]) }}">{!! $category->title !!}</a></h2>
                </div>
            </div>
        </div>
    @empty
        <h3>No data.</h3>
    @endforelse
@endsection