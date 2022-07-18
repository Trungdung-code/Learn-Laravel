@extends('layout.app')
@section('main')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
