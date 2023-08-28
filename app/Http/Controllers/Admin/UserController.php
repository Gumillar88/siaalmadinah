<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function studentRender()
    {
       return view('master_user/student');
    }

    public function teacherRender()
    {
        return view('master_user/teacher');
    }

    public function parentRender()
    {
        return view('master_user/parent');
    }
}