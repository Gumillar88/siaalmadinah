<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Apps;


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
    public function appsHandler($id)
    {
        $id = base64_decode($id);
        $apps = Apps::find($id);
        if (!empty($apps)) {
            Session::put('apps_id', $id);
            Session::put('hcode', $apps->hcode);
            return Redirect::to($apps->hcode);
        }
        return Redirect()->back();//->with('success', 'your message,here');
    }
    public function logoutRender()
    {
        Auth::logout();
        return redirect()->route('login');

    }
}