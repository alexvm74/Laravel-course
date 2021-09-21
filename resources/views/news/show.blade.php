@extends('layouts.main')

@section('title')
    @parent Show
@endsection

@section('pageName')
    {{-- @parent Category / News : #ID {{ $id_category }} / {{ $id_news }} --}}
    @parent Category: #ID {{ $newsList[0]->category_id }}, News: #ID {{ $newsList[0]->id }}
@endsection

@section('header')
    <h1 class="fw-bolder">Selected News</h1>
@endsection

@section('content')
    {{-- <div class="col-lg-6 offset-lg-3"> --}}
    <div class="col-lg-12">
        <!-- Blog post-->
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
               {{--  <p>{{ dd($newsList[$id_news]->title) }}</p> --}}
                {{-- <p>{{ dd($newsList[0]) }}</p> --}}
                 {{-- <p>{{ dd($newsList[0]->title) }}</p> --}}
                <h2 class="card-title h4">{!! $newsList[0]->title !!} * :</h2>
                <p class="card-text"><b>Description: </b>{!! $newsList[0]->description !!}</p>
                <p class="card-text"><b>Author: </b>{!! $newsList[0]->author !!}</p>
                <p class="card-text"><b>Created: </b>{{ $newsList[0]->created_at }}</p>
            </div>
        </div>
    </div>
@endsection

{{-- For example: push script 'js' from main.blade.php --}}
{{-- @push('js')
    <script>
        alert("For example - Show news:")
    </script>
@endpush --}}
