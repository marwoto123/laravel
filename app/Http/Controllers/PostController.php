<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $posts = Post::latest();
        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%' );
        }



        return view('posts', [
            "title" => "All Post",
            "posts" => $posts->get()

            // "posts" => Post::latest()->get()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "singel post",
            "post" => $post

        ]);
    }
}
