@extends('layouts.main')
@section('content')
    <h1 class="text-center my-1 mb-4">Edit Your Post</h1>
    <form action="{{ route('updatepost', ['slug' => $data->slug]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">

        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $data->slug }}">
        </div>
        <div class="mb-3">
            <label for="exerpt" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="exerpt" name="exerpt" value="{{ $data->exerpt }}">

        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author </label>
            <input type="text" class="form-control disabled" id="author" name="author"
                value="{{ Auth::user()->nama_lengkap }}">

        </div>


        {{--  <div class="mb-3">
            <label for="cover" class="form-label">Cover Image</label>
            <input type="file" class="form-control" id="cover">

        </div>  --}}


        <input id="body" type="hidden" name="body" value="{{ $data->body }}">
        <trix-editor input="body"></trix-editor>


        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
    {{--  Pelajari  --}}
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug'); // Change this line
        title.addEventListener('change', function() {
            fetch('/create/post/checkSlug?title=' + title.value)
                .then(response => response.json()) // Corrected "them" to "then"
                .then(data => slug.value = data.slug); // Corrected the assignment operator
        });
    </script>
@endsection
