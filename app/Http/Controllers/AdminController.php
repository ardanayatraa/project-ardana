<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function allpost()
    {
        $post = Post::where('status', '=', 'approved')->get();
        return view('admin.postlist', compact('post'));
    }

    public function listApprovePending()
    {
        $post = Post::where('status', '=', 'pending')->get();
        return view('admin.approvalRequest', compact('post'));
    }

    public function approvedPost($slug)
    {
        $data = Post::where('slug', $slug)->firstOrFail();
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function rejectPost($slug)
    {
        $data = Post::where('slug', $slug)->firstOrFail();
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }
}
