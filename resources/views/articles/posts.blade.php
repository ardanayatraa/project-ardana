@extends('layouts.display2')
@section('content')
    <div class="row">
        @foreach ($post as $posts)
            <div class="col-md-4 mb-3">
                <div class="card mx-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $posts->title }}</h5>
                        <p class="card-text">{{ $posts->exerpt }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">By {{ Auth::user()->nama_lengkap }} | {{ $posts->title }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
