<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Requests\PostStoreRequest;

class PostController extends Controller
{
    public function index() {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate ([
            'title' => 'required|max:20',
            'content' => 'required|max:200'
        ]);
        Post::create($validatedData);
        return redirect('/posts');
    }
}
