@extends('layout.app')
@section('main')
    <h2>created by: {{ $post->user->name }}</h2>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td><a class="chuyendevice" href="{{ route('post.edit', $post->id) }}">Sửa</a></td>
                <td>
                    <form method="post" action="{{ route('post.destroy', $post->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="chuyendevice">Xóa</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
