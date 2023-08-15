@extends('layouts.main')
@section('content')
    @foreach ($pendingPosts as $post)
        <p>
            {{ $post->title }} -
            <a href="{{ route('admin.posts.approve', ['slug' => $post->slug]) }}">Approve</a>
        </p>
    @endforeach
@endsection
