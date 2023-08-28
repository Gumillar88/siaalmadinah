<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function listSchoolRender()
    {
       return view('master_data/list_schools');
    }

    public function listSchoolLevelsRender()
    {
        return view('master_data/list_school_levels');
    }

    public function listClassesRender()
    {
        return view('master_data/list_classes');
    }

    public function listCoursesRender() 
    { 
        return view('master_data/list_courses');
    }

    public function listEmployeesRender()
    {
        return view('master_data/list_employees');
    }

    public function listTeacherRender()
    {
        return view('master_data/list_teachers');
    }

    public function listStudentsRender()
    {
        return view('master_data/list_students');
    }
}