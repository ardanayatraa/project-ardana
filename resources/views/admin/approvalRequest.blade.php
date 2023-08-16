@extends('layouts.main')
@section('content')
    <h1 class="text-center my-1 mb-4">List Pending Post</h1>
    <div class="container d-flex justify-content-between align-items-center mt-2">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Postingan</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Status Post</th>
                    <th scope="col">Approval Action</th>

                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $number = 1; ?>
                @foreach ($post as $lists)
                    <tr>
                        <th scope="row">{{ $number++ }}</th>
                        <td>{{ $lists->title }}</td>
                        <td>{{ $lists->author }}</td>
                        <td>{{ $lists->status }}</td>



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
                        <td>
                            <div class="btn-group" role="group" aria-label="Button Group">
                                <a href="{{ route('approvalacc', ['slug' => $lists->slug]) }}"
                                    class="btn btn-success">Approve</a>
                                <a href="{{ route('approvalreject', ['slug' => $lists->slug]) }}"
                                    class="btn btn-danger">Reject</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
