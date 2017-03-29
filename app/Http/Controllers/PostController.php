<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function delete(Post $post){
        $post->delete();
        return back();
    }

    public function submit(Post $post){
        if(request('image')) {
            $post->title = request('title');
            $post->photo = request('photo');
        } elseif(request('body')) {
            $post->title = request('title');
            $post->body = request('body');
        }
        $post->save();
        return back();
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $file = $request->file('photo');
        Post::create([
            'title' => request('title'),
            'photo' => 'images/blog/' . $file->getClientOriginalName(),
            'body' => request('body')
        ]);

        $file->move('images/blog', $file->getClientOriginalName());

        return redirect('/blog-managing');
    }
}
