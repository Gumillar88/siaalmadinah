<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function listSchoolRender()
    {
       return view('master_data/list_school');
    }

    public function listSchoolLevelRender()
    {
        return view('master_data/list_school_level');
    }

    public function listClassRender()
    {
        return view('master_data/list_classe');
    }

    public function listCourseRender() 
    { 
        return view('master_data/list_courses');
    }

    public function listEmployeeRender()
    {
        return view('master_data/list_employee');
    }

    public function listTeacherRender()
    {
        return view('master_data/list_teacher');
    }

    public function listStudentRender()
    {
        return view('master_data/list_student');
    }
}