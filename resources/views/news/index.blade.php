@extends('layouts.main')

@section('pageName')
    @parent Home
@endsection

@section('content_index_1')
    <h1 class="fw-bolder">Hi, users! Welcome!</h1>
@endsection

{{-- this comment... --}}

@section('content_index_2')
    <!-- Side widget-->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header">Краткое описание агрегатора новостей по поиску работы - Worldwide job news:</div>
            <div class="card-body">
                <p>Lorem ipsum nulla ut congue diam morbi eros maecenas risus commodo: mauris nibh elementum integer donec nam, <br>
                    lectus bibendum - nulla. Curabitur metus cursus leo risus ut, non nam odio sapien congue ut rutrum morbi metus et nam amet. <br>
                    Urna fusce molestie sagittis et leo maecenas nam, odio auctor leo sit elementum sodales, diam justo orci eget bibendum pellentesque, sed lectus porta. <br>
                    Maecenas non lorem ligula leo quam vitae nam porttitor: bibendum tellus porta vivamus at nec, elementum mattis elementum odio eros pharetra justo elementum. <br>
                    Maecenas nulla curabitur mattis non ipsum quisque urna nam risus urna lorem justo, molestie, ultricies vulputate auctor. <br>
                    Ultricies, fusce diam eget sagittis tempus eros cursus eros sagittis pharetra auctor lectus, proin orci odio - ligula. <br>
                    Nam leo cursus porta adipiscing ut eu porttitor, rutrum porttitor proin quisque magna at, eros justo ut.</p>
            </div>
        </div><br><br>
    </div>
@endsection
