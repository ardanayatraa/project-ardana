<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function show(
    // {
    //     return view('artices/post', [
    //         "title" => "Single Post",
    //         "post" => $post,
    //     ]);
    // }


    function show()
    {

        $post = Post::all();
        // dd($post);
        return view('articles.posts', compact('post'));
    }

    function showpost($id) {
        $posting = Post::find($id);
        // dd($post);
        return view('articles.post',compact('posting'));
       
    }

}


