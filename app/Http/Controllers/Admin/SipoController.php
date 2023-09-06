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
    public function classRender()
    {
        return view('sipo/class_set'); 
    }

    public function editRender()
    {
        return view('sipo/edit_class_set'); 
    }

    public function siswaRender()
    {
        return view('sipo/data_siswa'); 
    }

    public function editSiswaRender()
    {
        return view('sipo/edit_data_siswa'); 
    }

    public function teacherRender()
    {
        return view('sipo/subjects_teacher_set'); 
    }

    public function dataExtRender()
    {
        return view('sipo/data_extracuricullar'); 
    }

    public function setExtRender()
    {
        return view('sipo/set_extracuricullar'); 
    }

    public function yearsRender()
    {
        return view('sipo/set_years'); 
    }

    public function reportRender()
    {
        return view('sipo/report_print'); 
    }

    public function classDataRender()
    {
        return view('sipo/class_data'); 
    }

    public function teacherDataRender()
    {
        return view('sipo/teacher_data'); 
    }
    public function riwayatMengajarRender()
    {
        $view['module']   = 'Nilai';
        $view['page']     = 'Sikap Sosial';
        return view('sipo/riwayat_mengajar',['view'=>$view]);
    }
}
