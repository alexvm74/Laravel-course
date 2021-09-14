@extends('layouts.admin')

@section('title')
    @parent Список категорий
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Добавить категорию</h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <form method="post" action="{{ route('admin.categories.store') }}">
                @csrf
                <label for="title">Заголовок категории</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                <br>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
