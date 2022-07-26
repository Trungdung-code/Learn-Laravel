@extends('layout.app')

@section('main')
    <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/sections/uriel-soberanes.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="motto">
                <h1 class="title-uppercase text-center">Paper Kit</h1>
                <h3 class="text-center">Make your mark with a new design.</h3>
                <br />
                <a href="#pablo" class="btn btn-warning btn-round btn-lg">
                    <i class="fa fa-share-alt" aria-hidden="true"></i> Share Article
                </a>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="section section-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="text-center">
                            <a href="javascrip: void(0);">
                                <h3 class="title">{{ $post->title }}</h3>
                            </a>
                            <h6 class="title-uppercase">October 10, 2016</h6>
                        </div>
                    </div>
                    <div class="col-md-8 ml-auto mr-auto">
                        <a href="javascrip: void(0);">
                            <div class="card" data-radius="none" style="">
                                <img class="img" src="{{ asset($post->picture) }}">
                            </div>
                            <p class="image-thumb text-center">Photo by {{ $post->user->name }}</p>
                        </a>
                        <div class="article-content">
                            <p>
                                {!! $post->content !!}
                            </p>
                        </div>
                        <br />
                        <div class="article-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Tags</h5>
                                        @foreach ($post->tags as $tag)
                                            <span class="label label-default"><a href="{{ route('tag.show', $tag->id) }}"
                                                    style="margin: 10px">{{ $tag->label }}</a></span>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 ml-auto">
                                        <div class="sharing">
                                            <h5>Spread the word</h5>
                                            <button class="btn btn-just-icon btn-twitter">
                                                <i class="fa fa-twitter"></i>
                                            </button>
                                            <button class="btn btn-just-icon btn-facebook">
                                                <i class="fa fa-facebook"> </i>
                                            </button>
                                            <button class="btn btn-just-icon btn-google">
                                                <i class="fa fa-google"> </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="chuyendevice" href="{{ route('post.edit', $post->id) }}">Sửa</a>
                        <form method="post" action="{{ route('post.destroy', $post->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="chuyendevice">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <h2>created by: {{ $post->user->name }}</h2>
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
                    @endforeach --}}
