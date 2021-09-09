@extends('layouts.admin')

@section('title')
    @parent Список новостей
@endsection

@section('pageName')
    @parent Список новостей
@endsection

@section('addData')
    @parent новость
@endsection

@section('content')
    <br>
    <div class="col-md-12">
        <div class="table-responive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Заголовок</th>
                        <th>Описание</th>
                        <th>Дата добавления</th>
                        <th>Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($newsList as $news)
                        <tr>
                            <td>{{ $news['id'] }}</td>
                            <td><a href="{{ route('admin.news.index') }}">{{ $news['title'] }}</a></td>
                            <td>{{ $news['description'] }}</td>
                            <td>{{ $news['created_at'] }}</td>
                            <td><a href="">Edit</a>&nbsp;/&nbsp;<a href="">Delete</a></td>
                        </tr>
                    @empty
                        <h3>No data.</h3>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
