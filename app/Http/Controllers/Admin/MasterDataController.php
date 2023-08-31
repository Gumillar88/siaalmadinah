<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\MstAcademicYear;
use App\Models\Classes;
use App\Models\Course;
use App\Models\MstSchool;
use App\Models\MstSchoolGrade;
use App\Models\MstSchoolLevel;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;

class MasterDataController extends Controller
{
    public $view = [];
    public function SchoolRender()
    {
        $list = MstSchool::all();
        return view('master_data/school',['list'=>$list]);
    }
    public function SchoolLevelRender()
    {
        $list = MstSchoolLevel::all();
        return view('master_data/school_level',['list'=>$list]);
    }
    public function ClassRender()
    {   
        $view['module']   = 'Class';
        $view['page']     = 'List';
        $list = Classes::all();
        return view('master_data/class/index',['view'=>$view,'list'=>$list]);
    }
    public function ClassCreateRender()
    {   
        $view['module']   = 'Class';
        $view['page']     = 'Create';
        $MstAcademicYear  = MstAcademicYear::all();
        $MstSchoolGrade   = MstSchoolGrade::all();
        $User            = User::where(['role_id'=>'3','is_active'=>'1'])->get();
        return view('master_data/class/create',['view'=>$view,'MstAcademicYear'=>$MstAcademicYear,'MstSchoolGrade'=>$MstSchoolGrade,'User'=>$User]);
    }
    public function ClassCreateStore(Request $request)
    {   
        $view['module']   = 'Class';
        $view['page']     = 'Store';
        $data = $request->validate([
            'academic_year_id'  => 'required|string',
            'school_grade_id'   => 'required|string',
            'name'              => 'required|string',
            'pic'               => 'required|string',
        ]);
        $query                  = new Classes();
        // $query->school_token    = $data['name'];
        $query->hcode           = str_replace(" ","",strtolower($data['name']));
        $query->name            = $data['name'];
        $query->academic_year_id= $data['academic_year_id'];
        $query->school_grade_id = $data['school_grade_id'];
        $query->pic             = $data['pic'];
        $query->created_at      = date('Y-m-d');
        $query->created_by      = Session::get('id');
        $query->save();
        // return redirect(url::to('/master/list-class'))->with('success','Data Saved!');
    }
    public function ClassEditRender($id)
    {   
        $view['module']   = 'Class';
        $view['page']     = 'Edit';
        $query                  = Classes::find($id);
        // $query->school_token    = $data['name'];
        $query->hcode           = str_replace(" ","",strtolower($data['name']));
        $query->academic_year_id= $data['academic_year_id'];
        $query->school_grade_id = $data['school_grade_id'];
        $query->name            = $data['name'];
        $query->pic             = $data['pic'];
        $query->created_at      = date('Y-m-d');
        $query->created_by      = Session::get('id');
        $query->save();
        return view('master_data/class/edit',['view'=>$view,'list'=>$list]);
    }
    public function ClassEditStore(Request $request)
    {   
        $data = $request->validate([
            'id'                => 'required|string',
            'academic_year_id'  => 'required|string',
            'school_grade_id'   => 'required|string',
            'name'              => 'required|string',
            'pic'               => 'required|string',
        ]);
        $query                  = Classes::find($data['id']);
        // $query->school_token    = $data['name'];
        $query->hcode           = str_replace(" ","",strtolower($data['name']));
        $query->academic_year_id= $data['academic_year_id'];
        $query->school_grade_id = $data['school_grade_id'];
        $query->name            = $data['name'];
        $query->pic             = $data['pic'];
        $query->created_at      = date('Y-m-d');
        $query->created_by      = Session::get('id');
        $query->save();
        return redirect(url::to('/master/list-class'));
    }
    public function CourseRender() 
    { 
        $list = Course::all();
        return view('master_data/courses',['list'=>$list]);
    }
    // public function listEmployeeRender()
    // {
    //     $list = Employee::all();
    //     return view('master_data/employee',['list'=>$list]);
    // }
    public function TeacherRender()
    {
        $list = Teacher::all();
        return view('master_data/teacher',['list'=>$list]);
    }
    public function StudentRender()
    {
        $list = Student::all();
        return view('master_data/student',['list'=>$list]);
    }
}