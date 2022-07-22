@extends('layout.app')
@section('main')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Post List</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>
<div style="margin-top: 6px">
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
