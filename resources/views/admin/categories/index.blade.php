@extends('layouts.admin')

@section('title')
    @parent Список категорий
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список категорий</h1>
        <a href="{{ route('admin.categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Добавить категорию</h1> </a>
    </div>

    <div class="row">
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
                                <td>{{ $category->id }}</td>
                                <td><a href="{{ route('admin.news.index') }}">{{ $category->title }}</a></td>
                                <td>{{ $category->created_at }}</td>
                                <td><a href="">Edit</a>&nbsp;/&nbsp;<a href="">Delete</a></td>
                            </tr>
                        @empty
                            <h3>No data.</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
