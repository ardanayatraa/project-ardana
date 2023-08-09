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
                'username' => 'required',
                'email' => 'required',
                'nama_lengkap' => 'required',
                'address' => 'required',
                'password' => 'required'
            ]
        );

        $data = [
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'addresscx' => $request->address

        ];


        User::create($data);

        return redirect('/');
    }
}
