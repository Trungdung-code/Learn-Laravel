@extends('layout.app')
@section('main')
    <div class="wrapper">
        <div class="section section-white">
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data"
                style="margin-left: 150px; margin-right: 150px; margin-top:25px;">
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


                <div class="form-group">
                    <label for="name">Avatar</label>
                    <input type="file" class="form-control" name="picture" id="upload_file" onchange="image_link();"
                        placeholder="Name...">
                    <div class="image_show">
                        @if ($post->picture == true)
                            <img src="{{ asset($post->picture) }}" id="img_old" width="200" heigh="100">
                        @endif
                    </div>
                </div>

                <label class="form-label">Tags:</label><br>
                @foreach (\App\Models\Tag::all() as $tag)
                    <input name="tags[]" type="checkbox" value="{{ $tag->id }}"
                        {{ $post->tags->contains($tag->id) ? 'checked' : '' }}> {{ $tag->label }}<br>
                @endforeach
                <button type="submit" class="btn btn-primary">Sửa</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <script>
        function image_link() {
            var file = document.getElementById('upload_file').files;
            //an anh cu khi minh click edit
            $('#img_old').hide();
            // xoa anh
            $('.image_show').find('.ongeimage').remove();
            // thuc hien append anh vao
            $('.image_show').append('<img class="ongeimage" style="padding: 2px;" width="200"  heigh="100" src= " ' + URL
                .createObjectURL(event.target.files[0]) + '" >');
        }
    </script>
@endsection
