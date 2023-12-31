<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Register'
        ];

        return view('register.index', $data);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => ['required', 'max:255', 'unique:users', 'email:dns'],
            'no_hp' => ['required', 'max:255'],
            'password' => ['required', 'min:5']
        ]);

       User::create($validatedData);

       session()->flash('success', 'Registrasi Berhasil, Silakan Login');

       return redirect('/login');
    }
}
