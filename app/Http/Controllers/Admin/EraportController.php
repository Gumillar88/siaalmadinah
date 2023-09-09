<?php

namespace App\Http\Controllers\Admin;

require 'vendor/autoload.php';
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

use App\Http\Models\AchievementModel;
use App\Http\Models\MasterAcademicYearModel;
use App\Http\Models\MasterClassesModel;
use App\Http\Models\MasterCoursesModel;
use App\Http\Models\MasterEmployeeModel;
use App\Http\Models\MasterExtracurricular;
use App\Http\Models\MasterRoleModel;
use App\Http\Models\MasterSchoolModel;
use App\Http\Models\MasterSchoolLevelModel;
use App\Http\Models\MasterTeacherModel;
use App\Http\Models\EraportModel;
use App\Models\Users;

use App\Imports\UploadFileImport;
use App\Helpers\AppHelpers;
use Validator;
use Session;
use Hash;
use DB;

use PHPExcel; 
use PHPExcel_IOFactory;

use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use ZipArchive;

class EraportController extends Controller
{
    public function __construct()
    {
        $this->school_token             = session('school_token');
        $this->achievement              = new AchievementModel();
        $this->master_school            = new MasterSchoolModel();
        $this->school_level             = new MasterSchoolLevelModel();
        $this->master_class             = new MasterClassesModel();
        $this->current_year             = new MasterAcademicYearModel();
        $this->master_course            = new MasterCoursesModel();
        $this->master_teacher           = new MasterTeacherModel();
        $this->master_employee          = new MasterEmployeeModel();
        $this->master_roles             = new MasterRoleModel();
        $this->master_extracurricular   = new MasterExtracurricular();
        $this->e_raport                 = new EraportModel();
        $this->helper                   = new AppHelpers();
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
        
        $types = $this->e_raport->getTypeMapel($school_token);

        $data = [
            'mapel'             => $mapel,
            'classes'           => $classes,
            'courses'           => $courses,
            'types'             => $types,
            'action_upload'     => url::to('eraport/upload_file'),
            'method'            => 'POST',
        ];

        return view('eraport/subjects_taken', $data); 
    }

    public function getDataRender(Request $request)
    {
        $school_token = $request->session()->get('school_token');
        $course_id = $request->get('course_id');
        
        $data = $this->e_raport->getCourseClassStudentData($school_token, $course_id);
        
        return response()->json($data);
    }


    public function uploadFileHandle(Request $request)
    {
        $file = $request->file('files');
        $extension = $file->getClientOriginalExtension();
        
        $reader = null;
        if ($extension === 'xls') {
            $reader = IOFactory::createReader('Xls');
        } elseif ($extension === 'xlsx') {
            $reader = IOFactory::createReader('Xlsx');
        }
        $spreadsheet = $reader->load($file);
        
        $worksheet = $spreadsheet->getActiveSheet();
        $data = $worksheet->toArray();
        dd($data);
    }

    public function keterampilanRender(Request $request)
    {
        $type_id = base64_decode($request->get('type_id'));
        $mapel_id = base64_decode($request->get('mapel_id'));
        $class_id = base64_decode($request->get('class_id'));

        $types = $this->e_raport->getDataByTypeId($type_id);
        $mapels = $this->e_raport->getDataByMapelId($mapel_id);
        $classes = $this->e_raport->getDataByClassId($class_id);
        
        $course_detail = $this->e_raport->getDataCourses($types->id, $mapels->id, $classes->id);
        
        $data = [
            'name_type'     => $types->name,
            'name_mapel'    => $mapels->description,
            'name_class'    => $classes->name,
            'course_detail' => $course_detail
        ];
        // dd($data);
        
        return view('eraport/mapel-diampu/mapel', $data); 
    }

    public function riwayatMengajarRender()
    {
        $data = [];

        return view('eraport/riwayat-mengajar/riwayat', $data); 
    }

    public function ExtracurricularRender()
    {
        $lists = $this->master_extracurricular->getAll();
        $student = Users::where(['role_id'=>'2','is_active'=>'1'])->orderBy('name','asc')->get();
        $data = [
            'lists'             => $lists,
            'form_assign_action'=> URL::to('/eraport/extracurricular/student/assign'),
            'form_action'       => URL::to('/eraport/extracurricular/student/update'),
            'form_method'       => 'POST',
            'student'           => $student,
        ];

        return view('eraport/extracurricular/index', $data); 
    }
    public function ExtracurricularStudentRender($id)
    {
        $id = base64_decode($id);
        // $lists = DB::table('student_extracurricular')->where(['school_token'=>$this->school_token,'extracurricular_id'=>$id])->get();
        $lists = DB::table('student_extracurricular')
        ->join('users', 'users.id', '=', 'student_extracurricular.student_id')
        ->where(['student_extracurricular.extracurricular_id'=>$id,'users.role_id'=>'2','is_active'=>'1'])
        ->select('users.id as student_id','users.name as student_name','extracurricular_id','score','description')
        ->get();
        echo json_encode($lists);
        exit;
    }
    public function ExtracurricularStudentNotAssignedRender($id)
    {
        $id = base64_decode($id);
        // $lists = DB::table('student_extracurricular')->where(['school_token'=>$this->school_token,'extracurricular_id'=>$id])->get();
        $lists = DB::table('student_extracurricular')
        ->join('users', 'users.id', '=', 'student_extracurricular.student_id')
        ->where(['users.role_id'=>'2','is_active'=>'1'])
        ->where('student_extracurricular.extracurricular_id','!=', $id)
        ->select('users.id as student_id','users.name as student_name','extracurricular_id','score','description')
        ->get();
        echo json_encode($lists);
        exit;
    }
    public function ExtracurricularStudentUpdateHandle(Request $request)
    {
        $input = $request->all();
        print_r($input);exit;
    }
    public function ExtracurricularStudentAssignHandle(Request $request)
    {
        $input = $request->all();

        // Validate input
        $validator = Validator::make($input, [
            'id'        => 'required|max:255',
            'student_id'=> 'required|max:255',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $id = base64_decode($input['id']);
        $user_id = $request->session()->get('user_id');
        $school_token = $request->session()->get('school_token');
        
        $data = [
            'school_token'      => $school_token,
            'extracurricular_id'=> $id,
            'student_id'        => $input['student_id'],
            'updated_at'        => date('Y-m-d H:i:s'),
            'updated_by'        => $user_id,
        ];
        // Save Data
        $resp = DB::table('student_extracurricular')->insertGetid($data);
        $request->session()->flash('data-created', 'success');
        return back();
    }
    public function AchievementRender()
    {
        $lists = $this->achievement->getAll();
        $student = Users::where(['role_id'=>'2','is_active'=>'1'])->orderBy('name','asc')->get();
        $data = [
            // 'lists'         => $lists,
            'lists'         => DB::table('student_achievement')->join('users', 'users.id', '=', 'student_achievement.student_id')->where(['student_achievement.school_token'=>session()->get('school_token')])->select('*','users.id as student_id','users.name as student_name','student_achievement.name as achievement_name')->get(),
            'student'       => $student,
            'form_action'   => URL::to('/eraport/achievement/create'),
            'form_method'   => 'POST',
        ];
        
        return view('eraport/achievement/index', $data);
    }
    
    public function AchievementHandle(Request $request)
    {
        $input = $request->all();

        // Validate input
        $validator = Validator::make($input, [
            'student_id'    => 'required|max:255',
            'name'          => 'required|max:255',
            'type'          => 'required|max:255',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        
        $tokens = random_bytes(20);
        
        $user_id = $request->session()->get('user_id');
        $school_token = $request->session()->get('school_token');
        
        $data = [
            'school_token'      => $school_token,
            'name'              => $input['name'],
            'type'              => $input['type'],
            'description'       => $input['description'],
            'student_id'        => $input['student_id'],
            'created_at'        => date('Y-m-d H:i:s'),
            'created_by'        => $user_id,
            // 'updated_at'        => date('Y-m-d H:i:s'),
            // 'updated_by'        => $user_id,
        ];
        
        $this->achievement->create($data);
        
        $request->session()->flash('data-created', '');
        return back();

    }

    public function AchievementEditRender($id)
    {
        $school_id = base64_decode($id);
        $getExtracurricularData = $this->master_extracurricular->getOne($school_id);
        $teachers = $this->master_teacher->getAll();

        $data = [
            'form_action'       => URL::to('/master/extracurricular/edit'),
            'form_method'       => 'POST',
            'data'              => $getExtracurricularData,
            'teachers'          => $teachers,
        ];

        return view('master_data/extracurricular/edit', $data);
    }

    public function AchievementEditHandle(Request $request)
    {
        $input = $request->all();

        // Validate input
        $validator = Validator::make($input, [
            'name'          => 'required|max:255',
            'pic'           => 'required|max:255',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user_id = $request->session()->get('user_id');
        
        $data = [
            'name'              => $input['name'],
            'description'       => $input['description'],
            'pic'               => $input['pic'],
            'updated_at'        => date('Y-m-d H:i:s'),
            'updated_by'        => $user_id,
        ];

        $id = base64_decode($input['id']);

        // Save Data
        $this->master_extracurricular->update($id, $data);

        $request->session()->flash('data-updated', '');
        return back();
    }

    public function AchievementRemoveRender($id)
    {
        $id = base64_decode($id);
        $getExtracurricularData = $this->master_extracurricular->getOne($id);


        $data = [
            'form_action'       => URL::to('/master/extracurricular/remove'),
            'form_method'       => 'POST',
            'id'               => $id,
        ];

        return view('master_data/extracurricular/remove', $data);
    }

    public function AchievementRemoveHandle(Request $request)
    {
        $input = $request->all();

        $id = base64_decode($input['id']);
        if (!$id)
        {
            return back()->withErrors('error')->withInput();
        }

        // Remove data
        $this->master_extracurricular->remove($id);

        $request->session()->flash('data-deleted', '');
        return redirect('/master/extracurricular/');
        
    }
}