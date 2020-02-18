<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController{

    public function show($slug)
    {
        // $post = \DB::table('posts')->where('slug', $slug)->first();
        // using DB query --^ vs using eloquent:
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', [
            'post' => $post
        ]); 
    }
}