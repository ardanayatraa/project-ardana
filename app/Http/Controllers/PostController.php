<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function halamanawal()
    {
        $post = Post::where('status', '=', 'approved')->get();
        return view('users.index', compact('post'));
    }

    public function listApprovePending()
    {
        $post = Post::where('status', '=', 'pending')->get();
        return view('articles.pendingAprove', compact('post'));
    }

    public function listApproveRejected()
    {
        $post = Post::where('status', '=', 'rejected')->get();
        return view('articles.rejectedApprove', compact('post'));
    }
    public function listApproved()
    {
        $post = Post::where('status', '=', 'approved')->get();
        return view('articles.approved', compact('post'));
    }

    // End Approval
    public function show()
    {
        $post = Post::all();
        return view('articles.posts', compact('post'));
    }

    public function showpost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('articles.post', compact('post'));
    }

    public function showposts()
    {
        $post = Post::all();
        return view('articles.post', compact('post'));
    }

    public function postlist()
    {
        $list = Post::where('user_id', auth()->user()->id)->get();
        return view('articles.list', compact('list'));
    }

    public function newpost()
    {
        return view('articles.create');
    }

    // Pembuat Slug Otomatis
    public function checkSlug(Request $request)
    {
        $title = $request->input('title');
        $slug = Str::slug($title, '-');
        return response()->json(['slug' => $slug]);
    }

    public function createpost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:2048',
            'author' => 'required',
            'slug' => 'required|unique:posts,slug',
        ]);

        $data = [
            'title' => $request->title,
            'exerpt' => $request->exerpt,
            'body' => $request->body,
            'author' => $request->author,
            'slug' => $request->slug,
            'user_id' => auth()->user()->id,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post-images');
        }

        Post::create($data);

        return redirect('/tamu/articles/list');
    }

    public function editpost($slug)
    {
        $data = Post::where('slug', $slug)->firstOrFail();
        return view('articles.edit', compact('data'));
    }

    public function updatepost(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required',
            'author' => 'required',
            'slug' => 'required',
        ]);

        $post = Post::where('slug', $slug)->firstOrFail();

        $data = [
            'title' => $request->input('title'),
            'exerpt' => $request->input('exerpt'),
            'body' => $request->input('body'),
            'author' => $request->input('author'),
            'slug' => $request->input('slug'),
        ];

        $post->update($data);

        return redirect('tamu/articles/list');
    }

    public function deletepost($slug)
    {
        $data = Post::where('slug', $slug)->first();
        $data->delete();
        return redirect('tamu/articles/list');
    }
}
