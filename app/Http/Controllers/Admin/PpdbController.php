<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function indexRender()
    {
        return view('ppdb/index');
    }

    public function createRender()
    {
        return view('ppdb/create');
    }
}