<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // $request->validate([
        //     'name' =>'required',
        // ]);
        // return $request;
        return view('login');
    }
}
