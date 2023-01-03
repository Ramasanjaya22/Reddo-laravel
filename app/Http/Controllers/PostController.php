<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('pages.landing.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('pages.landing.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post = new Post();
        $post->user_id = auth()->id();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('pages.landing.posts.index');
    }

    public function show(Post $post)
    {
        return view('pages.landing.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('pages.landing.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('pages.landing.posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('pages.landing.posts.index');
    }
}
