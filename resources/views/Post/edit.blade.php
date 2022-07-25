@extends('layout.app')
@section('main')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{ $post->title }}" name="title" maxlength="200">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Content</label>
            <textarea type="text" class="form-control" id="mytextarea" name="content" maxlength="200">{!! $post->content !!}</textarea>
        </div>
        <label class="form-label">Tags:</label><br>
        @foreach (\App\Models\Tag::all() as $tag)
            <input name="tags[]" type="checkbox" value="{{ $tag->id }}"
                {{ $post->tags->contains($tag->id) ? 'checked' : '' }}> {{ $tag->label }}<br>
        @endforeach
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
@endsection
