<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\MstSchool;
use App\Models\MstSchoolLevel;
use App\Models\Classes;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;

class MasterDataController extends Controller
{
    public $view = [];
    public function SchoolRender()
    {
        // $list = MstSchool::where([''])->get();
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
        return view('master_data/class/create',['view'=>$view]);
    }
    public function ClassEditRender($id)
    {   
        $view['module']   = 'Class';
        $view['page']     = 'Edit';
        $list = Classes::find($id);
        return view('master_data/class/edit',['view'=>$view,'list'=>$list]);
    }
    public function ClassStore(Request $request)
    {   
        // $
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