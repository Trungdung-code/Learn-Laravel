@extends('layout.app')
@section('main')
    <div class="page-header" style="background-image: url('{{ asset('assets') }}/img/cover.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="motto">
                <h1 class="text-center">Welcome to Flag Blog</h1>
                <h3 class="text-center">Made with Love by Hoang Dung</h3>
            </div>
        </div>
    </div>
    <div class="section section-gray" id="cards">
        <div>
            <form class="add" method="get" action="{{ route('post.create') }}" style="float: right;">
                <button class="btn btn-primary">Thêm Post</button>
            </form>
        </div>
        <div class="container tim-container">
            <div class="title">
                <h2>Post List</h2>
            </div>
            <div class="row">
                @foreach ($post as $posts)
                    <div class="col-md-4 col-sm-6">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="{{ route('post.show', $posts->id) }}">
                                    <img class="img" src="{{ asset($posts->picture) }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ $posts->title }}
                                </h4>
                                <div class="card-description">
                                    {!! $posts->content !!}
                                </div>
                                <hr />
                                <div class="card-footer">
                                    <div class="author">
                                        <a href="#pablo">
                                            <img src="assets/img/faces/ayo-ogunseinde-2.jpg" alt="..."
                                                class="avatar img-raised">
                                            <span>Mike John</span>
                                        </a>
                                    </div>
                                    <div class="stats">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
