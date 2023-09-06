<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function appsRender()
    {
        return view('settings/apps');
    }

    public function roleRender()
    {
        return view('settings/role');
    }
    public function setPicRender()
    {
        $view['module']   = 'Setting';
        $view['page']     = 'Set Wali Kelas';
        return view('settings/setpic',['view'=>$view]);
    }
}