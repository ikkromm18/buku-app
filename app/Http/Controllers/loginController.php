<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('login.index', $data);
    }
}
