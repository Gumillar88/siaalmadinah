<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

use App\Http\Models\MasterSchoolModel;
use App\Http\Models\MasterSchoolLevelModel;
use App\Http\Models\MasterClassesModel;
use App\Http\Models\MasterAcademicYearModel;
use App\Http\Models\MasterCoursesModel;
use App\Http\Models\MasterTeacherModel;
use App\Http\Models\MasterEmployeeModel;
use App\Http\Models\MasterRoleModel;
use App\Http\Models\EraportModel;

use App\Helpers\AppHelpers;
use Validator;
use Session;
use Hash;

class EraportController extends Controller
{
    public function __construct()
    {
        $this->master_school    = new MasterSchoolModel();
        $this->school_level     = new MasterSchoolLevelModel();
        $this->master_class     = new MasterClassesModel();
        $this->current_year     = new MasterAcademicYearModel();
        $this->master_course    = new MasterCoursesModel();
        $this->master_teacher   = new MasterTeacherModel();
        $this->master_employee  = new MasterEmployeeModel();
        $this->master_roles     = new MasterRoleModel();
        $this->e_raport         = new EraportModel();
        $this->helper           = new AppHelpers();
    }

    public function indexRender()
    {
        return redirect(URL::to('/eraport/dashboard/'));
    }

    public function mapelDiampuRender(Request $request)
    {
        $get_session = $request->session();
        
        $school_token = $get_session->get('school_token');
        
        $mapel = $this->e_raport->getBySchoolToken($school_token);
        // dd($course);
        $courses = $this->master_course->getBySchoolToken($school_token);
        // dd($courses);
        $classes = $this->master_class->getBySchoolToken($school_token);
        
        $data = [
            'mapel'     => $mapel,
            'classes'   => $classes,
            'courses'    => $courses
        ];

        return view('eraport/subjects_taken', $data); 
    }

    public function keterampilanRender(Request $request)
    {
        $type_id = base64_decode($request->get('type_id'));
        $mapel_id = base64_decode($request->get('mapel_id'));
        $class_id = base64_decode($request->get('mapel_id'));
        dd($type_id);
    }
}