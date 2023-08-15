<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function allpost()
    {
        $post = Post::all();
        return view('admin.postlist', compact('post'));
    }
}
