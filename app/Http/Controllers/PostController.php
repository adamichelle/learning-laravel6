<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;

class PostController extends Controller
{
    //
    public function show($slug)
    {
        // $posts = [
        //     'my-first-post' => 'Hello. This is my first blog post',
        //     'my-second-post' => 'Now I am getting a hang of this blogging thing'
        // ];

        // if(! array_key_exists($post, $posts)) {
        //     abort(404, 'Sorry that post was not found');
        // }

        // Using a query builder
        //$post = DB::table('posts')->where('slug', $slug)->first();

        //if post does not exist
        // if(! $post) {
        //     abort(404);
        // }

        // Using eloquent
        $post = Post::where('slug', $slug)->firstOrFail();

        //Inspect a variable function
        // dd($post);
    
        return view('post', [
            'post' => $post
        ]);
    }
}
