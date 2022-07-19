@extends('layout.app')
@section('main')
<h2>Những Posts thuộc Tag</h2>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tag->posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td><a class="chuyendevice" href="{{ route('post.edit', $tag->id) }}">Sửa</a></td> 
                <td>
                    <form method="post" action="{{ route('post.destroy', $tag->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="chuyendevice">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
