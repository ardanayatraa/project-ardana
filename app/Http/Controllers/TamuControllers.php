<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\User;
use Illuminate\Http\Request;

class TamuControllers extends Controller
{
    public function index()
    {

        // dd('test');
        $data = User::all();
        //<- untuk debug / dumping data
        return view('users/list', compact('data'));
    }
}
