@extends('layouts.main')

@section('title')
    @parent Show
@endsection

@section('pageName')
    @parent Category / News : #ID {{ $id_category }} / {{ $id_news }}
@endsection

@section('content_show_1')
    <h1 class="fw-bolder">News</h1>
@endsection

@section('content_show_2')
    {{-- <div class="col-lg-6 offset-lg-3"> --}}
    <div class="col-lg-12">
        <!-- Blog post-->
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
                <h2 class="card-title h4">{!! $newsList[$id_news]['title'] !!} * :</h2>
                <p class="card-text"><b>Description: </b>{!! $newsList[$id_news]['description'] !!}</p>
                <p class="card-text"><b>Author: </b>{!! $newsList[$id_news]['author'] !!}</p>
                <p class="card-text"><b>Created: </b>{{ $newsList[$id_news]['created_at'] }}</p>
                <p><b>* Данные другие из-за faker генератора...</b></p>
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
