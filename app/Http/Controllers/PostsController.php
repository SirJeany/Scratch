<?php

namespace App\Http\Controllers;

class PostsController{

    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Hey there, this is the first one!',
            'my-second-post' => 'Hey there, Number 2!',
        ];

        if(! array_key_exists($post, $posts))
        abort(404, 'Sorry that post was not found, try: my-first-post');

        return view('post', [
            'post' => $posts[$post]
        ]); 
    }
}