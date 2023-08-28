<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BkController extends Controller
{
    public function indexRender()
    {
        return view('bk/index'); 
    }
}