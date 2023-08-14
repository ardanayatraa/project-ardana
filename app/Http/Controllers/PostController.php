<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;



use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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
        $list = Post::all();
        // dd($post);
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
        // dd($request->all());
        $request->validate(
            [
                'title' => 'required',
                'exerpt' => 'required ',
                'body' => 'required',
                'author' => 'required ',
                'slug' => 'required'
            ]
        );

        $data = [

            'title' => $request->title,
            'exerpt' => $request->exerpt,
            'body' => $request->body,
            'author' => $request->author,
            'slug' => $request->slug

        ];


        Post::create($data);

        return redirect('/admin/articles/list');
    }
}
