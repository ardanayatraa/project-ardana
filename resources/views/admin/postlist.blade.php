@extends('layouts.main')
@section('content')
    <h1 class="text-center my-1 mb-4">All Posts by Tamu</h1>
    <a class="btn btn-danger mb-2" href="{{ route('newpost') }}">Create New Post</a>
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Postingan</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Latest Update</th>
                    <th scope="col">Upload Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php $number = 1; ?>
                @foreach ($post as $lists)
                    <tr>
                        <th scope="row">{{ $number++ }}</th>
                        <td>{{ $lists->title }}</td>
                        <td>{{ $lists->author }}</td>
                        <td>{{ $lists->updated_at }}</td>
                        <td>{{ $lists->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Button Group">
                                <form action="{{ route('deletepost', ['slug' => $lists->slug]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                </form>
                                <a href="{{ route('editpost', ['slug' => $lists->slug]) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('showpost', ['slug' => $lists->slug]) }}" class="btn btn-primary">View</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
