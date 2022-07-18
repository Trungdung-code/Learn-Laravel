@extends('layout.app')
@section('main')
    <div class="headerr" style="justify-content: space-around; display: flex;">
        <div>
            <h1>POST LIST</h1>
        </div>
        <div style="margin-top: 6px">
            <form class="add" method="get" action="{{ route('post.create') }}">
                <button class="btn btn-primary">Thêm Post</button>
            </form>
        </div>
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
