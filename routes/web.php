<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// using request data from view
Route::get('/test', function () {
    $name = request('name');

    return view('test', [
        'name' => $name
    ]);
});

//Route wildcards:
Route::get('/post/{posts}', function ($post) {
    $posts = [
        'my-first-post' => 'Hey there, this is the first one!',
        'my-second-post' => 'Hey there, Number 2!',
    ];

    if(! array_key_exists($post, $posts))
        abort(404, 'Sorry that post was not found, try: my-first-post');

    return view('post',[
        'post' => $posts[$post]
    ]);
});