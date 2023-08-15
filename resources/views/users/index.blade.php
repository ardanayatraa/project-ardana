@extends('layouts.display2')
@section('content')
    <div class="row">
        @foreach ($post as $posts)
            <div class="col-md-4 mb-3">
                <div class="card mx-3">
                    <img src="{{ asset('storage/' . $posts->image) }}" class="" alt="...">
                    <div class="card-body">
                        <a href="{{ route('showpost', ['slug' => $posts->slug]) }}">
                            <h5 class="card-title">{{ $posts->title }}</h5>
                        </a>

                        <p class="card-text">{{ $posts->exerpt }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">By {{ $posts->author }} | {{ $posts->title }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
