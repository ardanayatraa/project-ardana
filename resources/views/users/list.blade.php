@extends('layouts.main')
@section('content')
    <div class="container d-flex justify-content-between align-items-center mt-5">

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
                                <button type="button" class="btn btn-primary">Hapus</button>
                                <button type="button" class="btn btn-warning">Update</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
