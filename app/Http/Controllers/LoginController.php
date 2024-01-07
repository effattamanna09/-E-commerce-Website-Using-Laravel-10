<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function loginHandle(Request $request)
    {
        $request->validate(
            [
                'username' => 'required|alpha',
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'The username field is required!',
                'username.alpha' => 'The username must only contain letters!',
                'email.required' => 'The Email field is required!',
                'password.required' => 'The Password field is required!'

            ]
        );
        return $request;
    }
}
