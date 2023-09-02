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
use App\Http\Models\MasterSchoolModel;
use App\Http\Models\MasterSchoolLevelModel;
use App\Http\Models\MasterClassesModel;
use App\Http\Models\MasterAcademicYearModel;
use App\Http\Models\MasterCoursesModel;
use App\Http\Models\MasterTeacherModel;
use App\Helpers\AppHelpers;
use Validator;
use Session;

class MasterDataController extends Controller
{
    public $view = [];

    public function __construct()
    {
        $this->master_school    = new MasterSchoolModel();
        $this->school_level     = new MasterSchoolLevelModel();
        $this->master_class     = new MasterClassesModel();
        $this->current_year     = new MasterAcademicYearModel();
        $this->master_course    = new MasterCoursesModel();
        $this->master_teacher   = new MasterTeacherModel();
        $this->helper           = new AppHelpers();
    }

    public function SchoolRender()
    {
        $lists = $this->master_school->getAll();
        
        $schoollevels = $this->helper->_getAllMasterSchoolLevelData();
        
        $school_level = $this->school_level->getAll();
        $data = [
            'lists'         => $lists,
            '_schoollevels' => $schoollevels,
            'form_action'   => URL::to('/master/school/create'),
            'form_method'   => 'POST',
            'school_level'  => $school_level,
        ];
        
        return view('master_data/school/index', $data);
    }

    public function SchoolHandle(Request $request)
    {
        $input = $request->all();

        // Validate input
        $validator = Validator::make($input, [
            'name'          => 'required|max:255',
            'provinces'     => 'required|max:255',
            'regions'       => 'required|max:255',
            'location'      => 'required|max:255',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        
        $tokens = random_bytes(20);
        
        $user_id = $request->session()->get('user_id');
        
        $data = [
            'school_level_id'   => $input['school_level_id'],
            'token'             => base64_encode($tokens),
            'name'              => $input['name'],
            'provinces'         => $input['provinces'],
            'regions'           => $input['regions'],
            'locations'         => $input['location'],
            'created_at'        => date('Y-m-d H:i:s'),
            'created_by'        => $user_id,
            'updated_at'        => date('Y-m-d H:i:s'),
            'updated_by'        => $user_id,
        ];
        
        $this->master_school->create($data);
        
        $request->session()->flash('data-created', '');
        return back();
    }

    public function SchoolEditRender($id)
    {
        $school_id = base64_decode($id);
        $getSchoolData = $this->master_school->getOne($school_id);
        
        $getSchoolLevelData = $this->school_level->getOne($getSchoolData->school_level_id);
        
        $school_level = $this->school_level->getAll();

        $data = [
            'form_action'       => URL::to('/master/school/edit'),
            'form_method'       => 'POST',
            'school_level'      => $school_level,
            'school_level_data' => $getSchoolLevelData,
            'schools'           => $getSchoolData,
        ];

        return view('master_data/school/edit', $data);
    }

    public function SchoolEditHandle(Request $request)
    {
        $input = $request->all();

        // Validate input
        $validator = Validator::make($input, [
            'name'          => 'required|max:255',
            'provinces'     => 'required|max:255',
            'regions'       => 'required|max:255',
            'location'      => 'required|max:255',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user_id = $request->session()->get('user_id');
        $data = [
            'school_level_id'   => $input['school_level_id'],
            'name'              => $input['name'],
            'provinces'         => $input['provinces'],
            'regions'           => $input['regions'],
            'locations'         => $input['location'],
            'updated_at'        => date('Y-m-d H:i:s'),
            'updated_by'        => $user_id,
        ];

        $id = base64_decode($input['id']);

        // Save Data
        $this->master_school->update($id, $data);

        $request->session()->flash('data-updated', '');
        return back();
    }

    public function SchoolRemoveRender($id)
    {
        $school_id = base64_decode($id);
        $getSchoolData = $this->master_school->getOne($school_id);

        $data = [
            'form_action'       => URL::to('/master/school/remove'),
            'form_method'       => 'POST',
            'id'               => $school_id,
        ];

        return view('master_data/school/remove', $data);
    }

    public function SchoolRemoveHandle(Request $request)
    {
        $input = $request->all();

        $id = base64_decode($input['id']);
        if (!$id)
        {
            return back()->withErrors('error')->withInput();
        }

        // Remove data
        $this->master_school->remove($id);

        $request->session()->flash('data-deleted', '');
        return redirect('/master/school/');
        
    }

    public function SchoolLevelRender()
    {
        $lists = $this->school_level->getAll();
        $data = [
            'lists'         => $lists,
            'form_action'   => URL::to('/master/schoollevel/create'),
            'form_method'   => 'POST',
        ];
        
        return view('master_data/school_level/index', $data);
    }

    public function SchoolLevelHandle(Request $request)
    {
        $input = $request->all();
        
        // Validate input
        $validator = Validator::make($input, [
            'name'          => 'required|max:255',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user_id = $request->session()->get('user_id');
        $data = [
            'name' => $input['name'],
            'created_at'    => date('Y-m-d H:i:s'),
            'created_by'    => $user_id,
            'updated_at'    => date('Y-m-d H:i:s'),
            'updated_by'    => $user_id,     
        ];

        $this->school_level->create($data);
        
        $request->session()->flash('data-created', '');
        return back();
    }

    public function SchoolLevelEditRender($id)
    {
        $school_level_id = base64_decode($id);
        $school_level = $this->school_level->getOne($school_level_id);
        $data = [
            'school_level'  => $school_level,
            'form_action'   => URL::to('/master/schoollevel/edit'),
            'form_method'   => 'POST',
        ];
        
        return view('master_data/school_level/edit', $data);
    }

    public function SchoolLevelEditHandle(Request $request)
    {
        $input = $request->all();
        
        // Validate input
        $validator = Validator::make($input, [
            'name'          => 'required|max:255',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user_id = $request->session()->get('user_id');
        $data = [
            'name' => $input['name'],
            'updated_at'    => date('Y-m-d H:i:s'),
            'updated_by'    => $user_id,     
        ];
        
        $id = base64_decode($input['id']);
        // Save Data
        $this->school_level->update($id, $data);

        $request->session()->flash('data-updated', '');
        return back();
    }

    public function SchoolLevelRemoveRender($id)
    {
        $school_level_id = base64_decode($id);
        $getSchoolData = $this->school_level->getOne($school_level_id);

        $data = [
            'form_action'       => URL::to('/master/schoollevel/remove'),
            'form_method'       => 'POST',
            'id'               => $school_level_id,
        ];

        return view('master_data/school_level/remove', $data);
    }

    public function SchoolLevelRemoveHandle(Request $request)
    {
        $input = $request->all();

        $id = base64_decode($input['id']);
        if (!$id)
        {
            return back()->withErrors('error')->withInput();
        }

        // Remove data
        $this->school_level->remove($id);

        $request->session()->flash('data-deleted', '');
        return redirect('/master/schoollevel/');
    }

    public function ClassRender()
    {   
        $lists = $this->master_class->getAll();
        $_schoollevels = $this->helper->_getAllMasterSchoolLevelData();
        $_schools = $this->helper->_getAllMasterSchoolByTokenData();
        
        $schools = $this->master_school->getAll();
        $school_levels = $this->school_level->getAll();

        $data = [
            'lists'         => $lists,
            'form_action'   => URL::to('/master/class/create'),
            'form_method'   => 'POST',
            '_schoollevels' => $_schoollevels,
            '_schools'      => $_schools,
            'schools'       => $schools,
            'school_levels' => $school_levels,
        ];

        return view('master_data/class/index', $data);
    }

    public function ClassCreateHandle(Request $request)
    {
        $input = $request->all();
        
        // Validate input
        $validator = Validator::make($input, [
            'name'              => 'required|max:255',
            'school_token'      => 'required',
            'school_level_id'   => 'required',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user_id = $request->session()->get('user_id');
        $data = [
            'school_token'      => $input['school_token'],
            'hcode'          => str_replace(' ', '-', $input['name']),
            'school_grade_id'   => $input['school_level_id'],
            'academic_year_id'  => Null,
            'name'              => $input['name'],
            'created_at'    => date('Y-m-d H:i:s'),
            'created_by'    => $user_id,
            'updated_at'    => date('Y-m-d H:i:s'),
            'updated_by'    => $user_id,     
        ];

        $this->master_class->create($data);
        
        $request->session()->flash('data-created', '');
        return back();

    }

    public function ClassEditRender($id)
    {   
        $class_id = base64_decode($id);
        $classes = $this->master_class->getOne($class_id);

        $schools = $this->master_school->getAll();
        $school_levels = $this->school_level->getAll();
        
        $data = [
            'form_action'   => URL::to('/master/class/edit'),
            'form_method'   => 'POST',
            'classes'  => $classes,
            'schools'       => $schools,
            'school_levels' => $school_levels,
        ];
        
        return view('master_data/class/edit', $data);
    }

    public function ClassEditHandle(Request $request)
    {
        $input = $request->all();
        
        // Validate input
        $validator = Validator::make($input, [
            'name'              => 'required|max:255',
            'school_token'      => 'required',
            'school_level_id'   => 'required',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user_id = $request->session()->get('user_id');

        $academic_year = $this->current_year->getByCurrentYear();
        $data = [
            'school_token'      => $input['school_token'],
            'hcode'          => str_replace(' ', '-', $input['name']),
            'school_grade_id'   => $input['school_level_id'],
            'academic_year_id'  => $academic_year->id,
            'name'              => $input['name'],
            'updated_at'        => date('Y-m-d H:i:s'),
            'updated_by'        => $user_id,     
        ];

        $id = base64_decode($input['id']);
        // Save Data
        $this->master_class->update($id, $data);

        $request->session()->flash('data-updated', '');
        return back();
    }

    public function ClassRemoveRender($id)
    {
        $class_id = base64_decode($id);
        $classes = $this->school_level->getOne($class_id);

        $data = [
            'form_action'       => URL::to('/master/class/remove'),
            'form_method'       => 'POST',
            'id'               => $class_id,
        ];

        return view('master_data/class/remove', $data);
    }

    public function ClassRemoveHandle(Request $request)
    {
        $input = $request->all();

        $id = base64_decode($input['id']);
        if (!$id)
        {
            return back()->withErrors('error')->withInput();
        }

        // Remove data
        $this->master_class->remove($id);

        $request->session()->flash('data-deleted', '');
        return redirect('/master/class/');
    }

    public function CourseRender() 
    { 
        $lists = $this->master_course->getAll();
        
        $_schools = $this->helper->_getAllMasterSchoolByTokenData();
        $_teacher = $this->helper->_getAllMasterTeacherData();
        $schools = $this->master_school->getAll();
        $teachers = $this->master_teacher->getAll();
        $data = [
            'lists'         => $lists,
            'form_action'   => URL::to('/master/course/create'),
            'form_method'   => 'POST',
            '_schools'      => $_schools,
            '_teacher'      => $_teacher,
            'schools'       => $schools,
            'teachers'      => $teachers,
        ];

        return view('master_data/course/index', $data);

    }

    public function CourseCreateHandle(Request $request)
    {
        $input = $request->all();
        
        // Validate input
        $validator = Validator::make($input, [
            'name'          => 'required|max:255',
            'school_token'  => 'required',
            'code'          => 'required',
            'teacher_id'    => 'required',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user_id = $request->session()->get('user_id');

        $data = [
            'school_token'  => $input['school_token'],
            'teacher_id'    => $input['teacher_id'],
            'code'          => $input['code'],
            'name'          => $input['name'],
            'description'   => $input['description'],
            'created_at'    => date('Y-m-d H:i:s'),
            'created_by'    => $user_id,
        ];
        
        $this->master_course->create($data);
        
        $request->session()->flash('data-created', '');
        return back();
    }

    public function CourseEditRender($id)
    {
        $course_id = base64_decode($id);
        $course = $this->master_course->getOne($course_id);

        $_schools = $this->helper->_getAllMasterSchoolByTokenData();
        $_teacher = $this->helper->_getAllMasterTeacherData();
        $schools = $this->master_school->getAll();
        $teachers = $this->master_teacher->getAll();

        $data = [
            'form_action'   => URL::to('/master/course/edit'),
            'form_method'   => 'POST',
            '_schools'      => $_schools,
            '_teacher'      => $_teacher,
            'schools'       => $schools,
            'teachers'      => $teachers,
            'course'        => $course,
        ];
        
        return view('master_data/course/edit', $data);
    }

    public function CourseEditHandle(Request $request)
    {
        $input = $request->all();

        // Validate input
        $validator = Validator::make($input, [
            'name'          => 'required|max:255',
            'school_token'  => 'required',
            'code'          => 'required',
            'teacher_id'    => 'required',
        ]);

        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $user_id = $request->session()->get('user_id');

        $data = [
            'school_token'  => $input['school_token'],
            'teacher_id'    => $input['teacher_id'],
            'code'          => $input['code'],
            'name'          => $input['name'],
            'description'   => $input['description'],
            'updated_at'    => date('Y-m-d H:i:s'),
            'updated_by'    => $user_id,
        ];

        $id = base64_decode($input['id']);
        // Save Data
        $this->master_course->update($id, $data);

        $request->session()->flash('data-updated', '');
        return back();
    }

    public function CourseRemoveRender($id)
    {
        $course_id = base64_decode($id);
        $course = $this->master_course->getOne($course_id);

        $data = [
            'form_action'       => URL::to('/master/course/remove'),
            'form_method'       => 'POST',
            'id'               => $course_id,
        ];

        return view('master_data/course/remove', $data);
    }

    public function CourseRemoveHandle(Request $request)
    {
        $input = $request->all();
        
        $id = base64_decode($input['id']);
        if (!$id)
        {
            return back()->withErrors('error')->withInput();
        }

        // Remove data
        $this->master_course->remove($id);

        $request->session()->flash('data-deleted', '');
        return redirect('/master/course/');
    }

    public function EmployeeRender()
    {
        $list = Employee::all();
        return view('master_data/employee/index',['list'=>$list]);
    }
    
    public function TeacherRender()
    {
        $list = Teacher::all();
        return view('master_data/teacher/index',['list'=>$list]);
    }
    public function StudentRender()
    {
        $list = Student::all();
        return view('master_data/student/index',['list'=>$list]);
    }
}