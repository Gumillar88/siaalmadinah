<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SipoController extends Controller
{
    public function subjectsRender()
    {
        return view('sipo/subjects_taken'); 
    }

    public function extRender()
    {
        return view('sipo/extracuricullar'); 
    }

    public function achRender()
    {
        return view('sipo/achievement'); 
    }
    public function riwayatMengajarRender()
    {
        $view['module']   = 'Nilai';
        $view['page']     = 'Sikap Sosial';
        return view('sipo/riwayat_mengajar',['view'=>$view]);
    }
}