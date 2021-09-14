@extends('layouts.main')

@section('title')
    @parent Order page
@endsection

@section('pageName')
    @parent Order
@endsection

@section('content_odrer_1')
    <h1 class="fw-bolder">Order</h1>
@endsection

@section('content_order_2')
    <!-- Order form -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header">Форма заказа на получение выгрузки данных</div>
            <div class="card-body">
                {{-- @if ($errors->any()) --}}
                @if ($errors->has('orderUserName'))
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <form method="post" action="{{ route('news.info') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Имя заказчика</label>
                        <input type="text" class="form-control" name="orderUserName" id="orderUserName" value="{{ old('orderUserName') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Номер телефона</label>
                        <input type='text' class="form-control" name='orderUserPhone' id="orderUserPhone" required value="{{ old('orderUserPhone') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Email</label>
                        <input type='text' class="form-control" name='orderUserEmail' id="orderUserEmail" value="{{ old('orderUserEmail') }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Информация</label>
                        <textarea class="form-control" name="orderDescription" id="orderDescription">{!! old('orderDescription') !!}</textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
