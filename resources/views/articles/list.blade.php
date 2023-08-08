@extends('layouts.main')
@section('content')
    <div class="container d-flex justify-content-between align-items-center mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Postingan</th>
                    <th scope="col">Author</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Cara Memakai Mouse</td>
                    <td>Ardana Yatra</td>
                    <td>Tips IT</td>
                    <td>

                        <div class="btn-group" role="group" aria-label="Button Group">
                            <button type="button" class="btn btn-primary">Hapus</button>
                            <button type="button" class="btn btn-warning">Update</button>
                            <button type="button" class="btn btn-success">Edit</button>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
