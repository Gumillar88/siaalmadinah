<?php

namespace App\Http\Controllers\Admin;

require 'vendor/autoload.php';
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

use App\Imports\UploadFileImport;
use App\Helpers\AppHelpers;
use Validator;
use Session;
use Hash;

// use PHPExcel; 
// use PHPExcel_IOFactory;

use Maatwebsite\Excel\Facades\Excel;
// use Maatwebsite\Excel\Concerns\ToModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use ZipArchive;

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

    public function uploadFileHandle(Request $request)
    {
        $test_upload = Excel::toCollection(new UploadFileImport, $request()->file('files')); //Excel::import(new UploadFileImport, request()->file('files'));
        dd($test_upload);
        $file = $request->file('files');
        $extension = $file->getClientOriginalExtension();
        
        $reader = null;
        if ($extension === 'xls') {
            $reader = IOFactory::createReader('Xls');
        } elseif ($extension === 'xlsx') {
            $reader = IOFactory::createReader('Xlsx');
        }

        // $source      = $request->file('file')->getRealPath();
        // $destination = 'new_format_xlsx_file.xlsx';
        // $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($source);
        // $writer      = new Xlsx($spreadsheet);

        $spreadsheet = $reader->load($file);        
        // dd($spreadsheet);
        $worksheet = $spreadsheet->getActiveSheet();
        $data = $worksheet->toArray();
        // dd($data);
        $header = $data[0];
        dd($header);
        // dd($reader);
        // $input = $request->all();
        
        // $file_excel = $_FILES;
        // // Validate input
        // $validator = Validator::make($input, [
        //     'files' => 'required',
        // ]);

        // if ($validator->fails())
        // {
        //     return back()->withErrors($validator)->withInput();
        // }
        // dd($file_excel['files']['full_path']);
        // $full_path = $file_excel['files']['full_path'];
        // Excel::import(new UploadFileImport, $full_path);
        // dd($file_excel['files']);
        // dd($request->file('files')->filename);
        // if(isset($file))
        // {
        //     $path   = $file_excel['files']['tmp_name'];
            
        //     $object = IOFactory::load($path);
        //     dd($path);
        // }
        dd('error');
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
}