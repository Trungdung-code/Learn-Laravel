@extends('layout.app')
@section('main')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('post.store') }}" method="post" class="create"
        style="margin-left: 150px; margin-right: 150px; margin-top:25px;">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title"
                required maxlength="200">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Content</label>
            <textarea class="form-control" id="mytextarea" name="content" maxlength="200" ></textarea>
        </div>

        <label class="form-label">Tags:</label><br>
        @foreach (\App\Models\Tag::all() as $tag)
            <input name="tags[]" type="checkbox" value="{{ $tag->id }}"> {{ $tag->label }}<br>
        @endforeach
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
