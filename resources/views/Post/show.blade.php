@extends('layout.app')
@section('main')
    <h2>created by: {{ $post->user->name }}</h2>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

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
                <td>{!! $post->content !!}</td>
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
    <label class="form-label">Tags:</label>
    @foreach ($post->tags as $tag)
         <a href="{{ route('tag.show', $tag->id) }}" style="margin: 10px">{{ $tag->label }}</a>
    @endforeach
@endsection
