@extends('layouts.admin')

@section('pageName')
    @parent Category news
@endsection

@section('addData')
    @parent Category
@endsection

@section('content')
    <br>
    <div class="col-md-8">
        <div class="table-responive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Category</th>
                        <th>Created</th>
                        <th>Control</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($categoryList as $category)
                        <tr>
                            <td>{{ $category['id'] }}</td>
                            <td><a href="{{ route('admin.news.index') }}">{{ $category['title'] }}</a></td>
                            <td>{{ $category['created_at'] }}</td>
                            <td>
                                <a href="">Edit</a>&nbsp;/&nbsp;<a href="">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <h3>No data.</h3>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
