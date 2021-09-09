@extends('layouts.admin')

@section('title')
    @parent Список категорий
@endsection

@section('pageName')
    @parent Список категорий
@endsection

@section('addData')
    @parent категорию
@endsection

@section('content')
    <br>
    <div class="col-md-8">
        <div class="table-responive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Заголовок</th>
                        <th>Дата добавления</th>
                        <th>Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categoryList as $category)
                        <tr>
                            <td>{{ $category['id'] }}</td>
                            <td><a href="{{ route('admin.news.index') }}">{{ $category['title'] }}</a></td>
                            <td>{{ $category['created_at'] }}</td>
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
