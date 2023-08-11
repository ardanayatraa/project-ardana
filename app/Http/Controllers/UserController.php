<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {
        return view('users.login');
    }
    function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Username wajib Di isi',
                'password.reuired' => 'Isi Password'
            ]
        );

        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('users/list');
        } else {
            return redirect('/');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    function register()
    {
        return view('users.register');
    }

    function create(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'username' => 'required | unique:users,username',
                'email' => 'required | unique:users,email',
                'nama_lengkap' => 'required | unique:users,nama_lengkap',
                'address' => 'required | unique:users,address',
                'password' => 'required'
            ]
        );

        $data = [
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'address' => $request->address

        ];


        User::create($data);

        return redirect('/');
    }


    function delete($id)
    {
        // dd('test');
        $data = User::find($id);
        $data->delete();
        return redirect('users/list');
    }

    function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'address' => 'required', // Pastikan address wajib diisi
            // Tambahkan validasi untuk kolom lainnya
        ]);

        $user = User::findOrFail($id);

        $data = [
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'address' => $request->input('address'),
            // Tambahkan kolom lain yang ingin diperbarui
        ];

        $user->update($data);

        return redirect('users/list');
    }
}
