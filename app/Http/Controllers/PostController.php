<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }
    public function create()
    {
        $post = Post::all();
        return view('post.create', compact('post'));
    }

    public function store(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $Post = new Post();
        $Post->title = $title;
        $Post->content = $content;
        $Post->user_id = Auth::user()->id;
        $Post->save();
        return redirect(route('post.index'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('Post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        Post::where('id', $id)->update([
            'title' => $title,
            'content' => $content,
        ]);
        return redirect(route('post.index'));
    }

    public function destroy($id)
    {
        $post = Post::where('id', '=', $id);
        $post->delete();
        return redirect(route('post.index'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

}
