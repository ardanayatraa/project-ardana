@extends('layouts.main')
@section('content')
    <h1 class="text-center my-1 mb-4">List User</h1>
    <div class="container d-flex justify-content-between align-items-center mt-2">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $number = 1; ?> <!-- Inisialisasi penomoran otomatis -->
                @foreach ($data as $user)
                    <tr>
                        <th scope="row">{{ $number++ }}</th>
                        <td>{{ $user->nama_lengkap }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>

                        <td>
                            <div class="btn-group" role="group" aria-label="Button Group">
                                <form action="{{ route('delete', ['id' => $user->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                                <a href="{{ route('edit', ['id' => $user->id]) }}" class="btn btn-warning">Edit</a>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
