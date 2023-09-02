<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Apps;
use App\Models\Users;


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
        // print_r($data);exit;
        if (Auth::attempt($data)) 
        {
            $User = Users::where(['email'=>$data['email']])->first();
            if (empty($User)) {
                return redirect()->route('login')->with('failed', 'Incorrect Email or Password');
            }
            // print_r($User);
            echo $User->name;
            exit;
            Session::put('id', $User->id);
            Session::put('name', $User->name);
            Session::put('username', $User->username);
            Session::put('email', $User->email);
            Session::put('role_id', $User->role_id);
            Session::put('content', json_decode($User->content,true));
            Session::put('apps_id', $id);
            return redirect('/sia/choose-app');
        }
        else 
        {
            return redirect()->route('login')->with('failed', 'Incorrect Email or Password');
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
        Session::flush();
        return redirect()->route('login');

    }
}