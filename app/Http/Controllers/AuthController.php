<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Apps;
use App\Http\Models\UserModel;
use App\Helpers\AppHelpers;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->user     = new UserModel();
        $this->helper   = new AppHelpers();
    }
    
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
            $user = $this->user->getByEmail($input['email']);
            
            Session::put('school_token', $user->school_token);
            Session::put('user_id', $user->id);
            Session::put('role_id', $user->role_id);
            Session::put('account_id', $user->account_id);
            
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