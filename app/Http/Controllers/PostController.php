<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $post = $user->posts;
        return view('post.index', compact('post'));
    }
    public function create()
    {
        $post = Post::all();
        return view('post.create', compact('post'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:200',
            'content' => 'required|max:200',
        ]);
        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = Auth::user()->id;
        $post->save();
        $post->tags()->sync($request->get('tags'));
        return redirect(route('post.index'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('Post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->tags()->sync($request->get('tags'));
        $post->save();
        return redirect(route('post.show'));
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
