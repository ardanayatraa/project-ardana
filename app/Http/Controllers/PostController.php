<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;



use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    function halamanawal()
    {
        $post = Post::all();
        return view('users.index', compact('post'));
    }

    function show()
    {

        $post = Post::all();
        // dd($post);
        return view('articles.posts', compact('post'));
    }

    function showpost($slug)
    {
        $post = Post::where('slug', $slug)->first();


        return view('articles.post', compact('post'));
    }

    function showposts()
    {
        $post = Post::all();
        // dd($post);
        return view('articles.post', compact('post'));
    }
    function postlist()
    {
        $list = Post::where('user_id', auth()->user()->id)->get();
        return view('articles.list', compact('list'));
    }

    function newpost()
    {
        return view('articles.create');
    }
    // Pembuat Slug Otomatis
    public function checkSlug(Request $request)
    {
        $title = $request->input('title');
        $slug = Str::slug($title, '-'); // Generate slug from the title
        return response()->json(['slug' => $slug]); // Return the slug as JSON
    }
    // ..................................
    //
    function createpost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required',
            'author' => 'required',
            'slug' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'exerpt' => $request->exerpt,
            'body' => $request->body,
            'author' => $request->author,
            'slug' => $request->slug,
            'user_id' => auth()->user()->id, // Set user_id based on logged in user
        ];

        Post::create($data);

        return redirect('/admin/articles/list');
    }

    //--------------------------------------------//
    //-------EDIT POST----------------------------//
    //--------------------------------------------//
    function editpost($slug)
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
            // Pastikan address wajib diisi
            // Tambahkan validasi untuk kolom lainnya
        ]);

        $post = Post::where('slug', $slug)->firstOrFail();

        $data = [
            'title' => $request->input('title'),
            'exerpt' => $request->input('exerpt'),
            'body' => $request->input('body'),
            'author' => $request->input('author'),
            'slug' => $request->input('slug'),
            // Tambahkan kolom lain yang ingin diperbarui
        ];

        $post->update($data);

        return redirect('admin/articles/list');
    }


    //------------------------------------------//
    //----END EDIT------------------------------//
    //------------------------------------------//


    //------------------------------------------//
    //-----------------DELETE-------------------//
    //------------------------------------------//
    function deletepost($slug)
    {

        $data = Post::where('slug', $slug)->first();
        $data->delete();
        return redirect('tamu/articles/list');
    }
}
