@extends('layout.app')
@section('main')
    <div class="wrapper">
        <div class="section section-white">

            <form action="{{ route('post.store') }}" method="post" class="create"
                style="margin-left: 150px; margin-right: 150px; margin-top:25px;" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="title" required
                        maxlength="200">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content</label>
                    <textarea class="form-control" id="mytextarea" name="content" maxlength="200"></textarea>
                </div>
                {{-- <label class="form-label">Chose picture</label><br>
                <input type="file" name="picture"><br><br> --}}
                <div class="form-group">
                    <label for="name">Avatar</label>
                    <input type="file" class="form-control" id="upload_file" onchange=" image_link();" name="picture"
                        placeholder="Name...">
                    <div class="image_show"></div>
                </div>

                <label class="form-label">Tags:</label><br>
                @foreach (\App\Models\Tag::all() as $tag)
                    <input name="tags[]" type="checkbox" value="{{ $tag->id }}"> {{ $tag->label }}<br>
                @endforeach
                <button type="submit" class="btn btn-primary">Thêm</button>
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
        // lay gia tri ng dung bam them anh
        var file = document.getElementById('upload_file').files;
        // xoa anh
        $('.image_show').find('.ongeimage').remove();
        // thuc hien append anh vao
        $('.image_show').append('<img class="ongeimage" style="padding: 2px;" width="200"  heigh="100" src= " ' +
            URL.createObjectURL(event.target.files[0]) + '" >');
    }
</script>
@endsection
