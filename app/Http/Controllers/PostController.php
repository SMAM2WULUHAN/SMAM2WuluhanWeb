<?php

namespace App\Http\Controllers;

use App\Models\Post; // Pastikan untuk mengimpor model
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Mengambil semua data dari tabel posts
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id); // Menampilkan post berdasarkan ID
        return view('posts.show', compact('post'));
        $berita = Berita::findOrFail($id); // Detail berita
        return view('detail', compact('berita'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all()); // Menyimpan data baru ke tabel posts
        return redirect()->route('posts.index');
    }
}
