<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChooseAppController extends Controller
{
    public function indexRender()
    {
        return view('auth/choose_app');
    }
}