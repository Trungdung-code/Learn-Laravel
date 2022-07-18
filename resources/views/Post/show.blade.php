@extends('layout.app')
@section('main')
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
        @foreach ($post as $posts)
            <tbody>
                <tr>
                    <th scope="row">{{ $posts->id }}</th>
                    <td>{{ $posts->title }}</td>
                    <td>{{ $posts->content }}</td>
                    <td><a class="chuyendevice" href="{{ route('post.edit', $posts->id) }}">Sửa</a></td>
                    <td>
                        <form method="post" action="{{ route('post.destroy', $posts->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="chuyendevice">Xóa</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
