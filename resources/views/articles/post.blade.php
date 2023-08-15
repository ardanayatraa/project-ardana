@extends('layouts.display2')
@section('content')
    @auth
        <a href="{{ route('postlist') }}" class="btn btn-danger">Stop Preview</a>
    @endauth
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">
                        {!! $post->body !!}
                    </div>
                    <div class="card-footer">
                        <h5>By {{ $post->author }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
