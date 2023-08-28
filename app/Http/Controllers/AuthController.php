<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function indexRender()
    {
        return view('auth/login');
    }

    public function loginHandle(Request $request)
    {
        $input = $request->all();
        
        $request->validate([
            'email'         => 'required',
            'password'      => 'required',
        ]);
        
        $data = [
            'email'     => $input['email'],
            'password'  => $input['password'],
        ];
        
        if (Auth::attempt($data)) 
        {
            return redirect('/sia/choose-app');
        }
        else 
        {
            return redirect()->route('login')->with('failed', 'Incorrect Email & Password');
        }
    }

    public function logoutRender()
    {
        Auth::logout();
        return redirect()->route('login');

    }
}