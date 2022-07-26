@extends('layout.app')
@section('main')
    <div>
        <form class="add" method="get" action="{{ route('post.create') }}">
            <button class="btn btn-primary">Thêm Post</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Post</th>
            </tr>
        </thead>
        @foreach ($post as $posts)
            <tbody>
                <tr>
                    <th scope="row">{{ $posts->id }}</th>
                    <td><a href="{{ route('post.show', $posts->id) }}">{{ $posts->title }}</a></td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
