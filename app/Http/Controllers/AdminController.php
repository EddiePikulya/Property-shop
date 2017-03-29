<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Zizaco\Entrust\Entrust;


class AdminController extends Controller
{
    use EntrustUserTrait;
    public function blog(){
        if(auth()->user()->can('crud-blog')) {
            $posts = Post::latest()->get();
            return view('posts.index', compact('posts'));
        }

    }
}
