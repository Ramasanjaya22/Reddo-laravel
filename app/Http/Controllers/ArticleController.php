<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Menampilkan daftar artikel
    public function index()
    {
        $articles = Article::all();
        return view('pages.landing.posts.index', compact('articles'));
    }

    // Menampilkan form untuk membuat artikel baru
    public function create()
    {
        return view('pages.landing.articles.create');
    }

    // Menyimpan artikel baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $article = new Article;
        $article->title = $request->input('title');
        $article->body = $request->input('body');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $article->image = $path;
        }

        $article->save();

        toast()->success('Update has been success');
        return back();
    }

    // Menampilkan detail artikel tertentu
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    // Menampilkan form untuk mengubah artikel tertentu
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    // Memperbarui artikel tertentu di dalam database
    public function update(Request $request, $id)
    {
        // Validasi form
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan file yang diupload (jika ada)
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            $imageName = $request->currentImage;
        }

        // Memperbarui artikel di dalam database
        $article = Article::find($id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->image = '/images/' . $imageName;
        $article->save();

        return redirect('/articles')->with('success', 'Artikel berhasil diperbarui!');
    }
    // Menghapus artikel tertentu dari database
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/articles')->with('success', 'Artikel berhasil dihapus!');
    }
}
