@extends('layout.app')
@section('main')
    <form action="{{ route('post.update',$post->id) }}" method="post">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$post->title}}" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="{{$post->content}}" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
@endsection
