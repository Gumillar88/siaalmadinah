<?php

// use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\{
    DashboardController,
    ChooseAppController,
    BkController,
    PpdbController,
    PaymentController,
    UserController,
    NilaiController,
    MasterDataController,
    SettingsController,
    SipoController,
    EraportController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('/login', [AuthController::class, 'indexRender'])->name('login');
Route::post('/auth-login', [AuthController::class, 'loginHandle'])->name('auth-login');


Route::group(['prefix' => 'sipo', 'middleware' => ['auth'], 'as' => 'sipo'], function() {
    Route::get('/subjects_taken', [SipoController::class, 'subjectsRender'])->name('subjects_taken');
    Route::get('/extracuricullar', [SipoController::class, 'extRender'])->name('extracuricullar');
    Route::get('/achievement', [SipoController::class, 'achRender'])->name('achievement');
    Route::get('/edit_class_set', [SipoController::class, 'editRender'])->name('edit_class_set');
    Route::get('/class_set', [SipoController::class, 'classRender'])->name('class_set');
    Route::get('/data_siswa', [SipoController::class, 'siswaRender'])->name('data_siswa');
    Route::get('/edit_data_siswa', [SipoController::class, 'editSiswaRender'])->name('edit_data_siswa');
    Route::get('/subjects_teacher_set', [SipoController::class, 'teacherRender'])->name('subjects_teacher_set');
    Route::get('/data_extracuricullar', [SipoController::class, 'dataExtRender'])->name('data_extracuricullar');
    Route::get('/set_extracuricullar', [SipoController::class, 'setExtRender'])->name('set_extracuricullar');
    Route::get('/set_years', [SipoController::class, 'yearsRender'])->name('set_years');
    Route::get('/report_print', [SipoController::class, 'reportRender'])->name('report_print');
    Route::get('/class_data', [SipoController::class, 'classDataRender'])->name('class_data');
    Route::get('/teacher_data', [SipoController::class, 'teacherDataRender'])->name('teacher_data');
    Route::get('/riwayat_mengajar', [SipoController::class, 'riwayatMengajarRender'])->name('riwayatMengajarRender');
});

Route::group(['prefix' => 'sia', 'middleware' => ['auth'], 'as' => 'sia'], function() {
    Route::get('/choose-app', [ChooseAppController::class, 'indexRender'])->name('choose-app');
    Route::get('/module/{id}', [AuthController::class, 'appsHandler'])->name('apps-handle');
});

Route::group(['prefix' => 'eraport', 'middleware' => ['auth'], 'as' => 'eraport'], function() {

    Route::get('/', [DashboardController::class, 'indexRender'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'indexRender'])->name('dashboard');

    Route::get('/bk', [BkController::class, 'indexRender'])->name('bk');
    Route::get('/ppdb', [PpdbController::class, 'indexRender'])->name('ppdb');
    Route::get('/ppdb/create', [PpdbController::class, 'createRender'])->name('ppdb-create');
    Route::get('/ppdb', [PpdbController::class, 'indexRender'])->name('ppdb');
});

Route::group(['prefix' => 'eraport', 'middleware' => ['auth'], 'as' => 'eraport'], function() {
    Route::get('/', [EraportController::class, 'indexRender'])->name('dashboard');

    Route::get('/list-mapel-diampu', [EraportController::class, 'mapelDiampuRender'])->name('list-mapel-diampu');
    Route::get('/keterampilan', [EraportController::class, 'keterampilanRender'])->name('keterampilan');

    Route::post('/upload_file', [EraportController::class, 'uploadFileHandle'])->name('upload-file');
    /*
    ** extracurricular
    */ 
    Route::get('/extracurricular', [EraportController::class, 'ExtracurricularRender'])->name('extracurricular');
    Route::get('/extracurricular/assign', [EraportController::class, 'ExtracurricularStudentRender'])->name('extracurricular-assign');
    Route::get('/extracurricular/student/load/{id}', [EraportController::class, 'ExtracurricularStudentRender'])->name('extracurricular-student-load');
    Route::post('/extracurricular/student/assign', [EraportController::class, 'ExtracurricularStudentAssignHandle'])->name('extracurricular-student-assign');
    Route::post('/extracurricular/student/update', [EraportController::class, 'ExtracurricularStudentUpdateHandle'])->name('extracurricular-student-update');
    Route::get('/extracurricular/student/not/assigned/{id}', [EraportController::class, 'ExtracurricularStudentNotAssignedRender'])->name('extracurricular-student-not-assigned');
    /*
    ** achievement
    */ 
    Route::get('/achievement', [EraportController::class, 'AchievementRender'])->name('achievement');
    Route::post('/achievement/create', [EraportController::class, 'AchievementHandle'])->name('achievement-save');

    Route::get('/achievement/edit/{id}', [EraportController::class, 'AchievementEditRender'])->name('achievement-edit');
    Route::post('/achievement/edit/', [EraportController::class, 'AchievementEditHandle'])->name('achievement-save');
    
    Route::get('/achievement/remove/{id}', [EraportController::class, 'AchievementRemoveRender'])->name('achievement-remove');
    Route::post('/achievement/remove/', [EraportController::class, 'AchievementRemoveHandle'])->name('achievement-delete');
});

Route::group(['prefix' => 'master', 'middleware' => ['auth'], 'as' => 'master'], function() {

    Route::get('/', [DashboardController::class, 'indexRender'])->name('dashboard');
    /*
    ** Module Master Data
    */

    /*
    ** Schools
    */ 
    Route::get('/school', [MasterDataController::class, 'SchoolRender'])->name('master-school');
    Route::post('/school/create', [MasterDataController::class, 'SchoolHandle'])->name('master-school-save');

    Route::get('/school/edit/{id}', [MasterDataController::class, 'SchoolEditRender'])->name('master-school-edit');
    Route::post('/school/edit/', [MasterDataController::class, 'SchoolEditHandle'])->name('master-school-save');
    
    Route::get('/school/remove/{id}', [MasterDataController::class, 'SchoolRemoveRender'])->name('master-school-remove');
    Route::post('/school/remove/', [MasterDataController::class, 'SchoolRemoveHandle'])->name('master-school-delete');

    /*
    ** School Level
    */ 
    Route::get('/schoollevel', [MasterDataController::class, 'SchoolLevelRender'])->name('master-schoollevel');
    Route::post('/schoollevel/create', [MasterDataController::class, 'SchoolLevelHandle'])->name('master-schoollevel-save');

    Route::get('/schoollevel/edit/{id}', [MasterDataController::class, 'SchoolLevelEditRender'])->name('master-schoollevel-edit');
    Route::post('/schoollevel/edit/', [MasterDataController::class, 'SchoolLevelEditHandle'])->name('master-schoollevel-update');
    
    Route::get('/schoollevel/remove/{id}', [MasterDataController::class, 'SchoolLevelRemoveRender'])->name('master-schoollevel-remove');
    Route::post('/schoollevel/remove/', [MasterDataController::class, 'SchoolLevelRemoveHandle'])->name('master-schoollevel-delete');

    /*
    ** Class
    */ 
    Route::get('/class', [MasterDataController::class, 'ClassRender'])->name('master-class');

    Route::post('/class/create', [MasterDataController::class, 'ClassCreateHandle'])->name('master-class-save');

    Route::get('/class/edit/{id}', [MasterDataController::class, 'ClassEditRender'])->name('master-class-edit');
    Route::post('/class/edit/', [MasterDataController::class, 'ClassEditHandle'])->name('master-class-update');

    Route::get('/class/remove/{id}', [MasterDataController::class, 'ClassRemoveRender'])->name('master-class-remove');
    Route::post('/class/remove/', [MasterDataController::class, 'ClassRemoveHandle'])->name('master-class-delete');

    /*
    ** Course
    */ 
    Route::get('/course', [MasterDataController::class, 'CourseRender'])->name('master-course');
    Route::post('/course/create', [MasterDataController::class, 'CourseCreateHandle'])->name('master-course-save');

    Route::get('/course/edit/{id}', [MasterDataController::class, 'CourseEditRender'])->name('master-course-edit');
    Route::post('/course/edit/', [MasterDataController::class, 'CourseEditHandle'])->name('master-course-update');

    Route::get('/course/remove/{id}', [MasterDataController::class, 'CourseRemoveRender'])->name('master-course-remove');
    Route::post('/course/remove/', [MasterDataController::class, 'CourseRemoveHandle'])->name('master-course-delete');

    /*
    ** Employee
    */ 
    Route::get('/employee', [MasterDataController::class, 'EmployeeRender'])->name('master-employee');

    Route::post('/employee/create', [MasterDataController::class, 'EmployeeCreateHandle'])->name('master-employee-save');

    Route::get('/employee/edit/{id}', [MasterDataController::class, 'EmployeeEditRender'])->name('master-employee-edit');
    Route::post('/employee/edit/', [MasterDataController::class, 'EmployeeEditHandle'])->name('master-employee-update');

    Route::get('/employee/remove/{id}', [MasterDataController::class, 'EmployeeRemoveRender'])->name('master-employee-remove');
    Route::post('/employee/remove/', [MasterDataController::class, 'EmployeeRemoveHandle'])->name('master-employee-delete');

    /*
    ** Users
    */ 
    Route::get('/user', [MasterDataController::class, 'UserRender'])->name('master-user');

    Route::post('/user/create', [MasterDataController::class, 'UserCreateHandle'])->name('master-user-save');

    Route::get('/user/edit/{id}', [MasterDataController::class, 'UserEditRender'])->name('master-user-edit');
    Route::post('/user/edit/', [MasterDataController::class, 'UserEditHandle'])->name('master-user-update');

    Route::get('/user/remove/{id}', [MasterDataController::class, 'UserRemoveRender'])->name('master-user-remove');
    Route::post('/user/remove/', [MasterDataController::class, 'UserRemoveHandle'])->name('master-user-delete');

    /*
    ** Teacher
    */ 
    Route::get('/teacher', [MasterDataController::class, 'TeacherRender'])->name('master-teacher');

    Route::post('/teacher/create', [MasterDataController::class, 'TeacherCreateHandle'])->name('master-teacher-save');

    Route::get('/teacher/edit/{id}', [MasterDataController::class, 'TeacherEditRender'])->name('master-teacher-edit');
    Route::post('/teacher/edit/', [MasterDataController::class, 'TeacherEditHandle'])->name('master-teacher-update');

    Route::get('/teacher/remove/{id}', [MasterDataController::class, 'TeacherRemoveRender'])->name('master-teacher-remove');
    Route::post('/teacher/remove/', [MasterDataController::class, 'TeacherRemoveHandle'])->name('master-teacher-delete');
    /*
    ** student
    */ 
    Route::get('/student', [MasterDataController::class, 'StudentRender'])->name('master-student');

    Route::post('/student/create', [MasterDataController::class, 'StudentCreateHandle'])->name('master-student-save');

    Route::get('/student/edit/{id}', [MasterDataController::class, 'StudentEditRender'])->name('master-student-edit');
    Route::post('/student/edit/', [MasterDataController::class, 'StudentEditHandle'])->name('master-student-update');

    Route::get('/student/remove/{id}', [MasterDataController::class, 'StudentRemoveRender'])->name('master-student-remove');
    Route::post('/student/remove/', [MasterDataController::class, 'StudentRemoveHandle'])->name('master-student-delete');

    /*
    ** extracurricular
    */ 
    Route::get('/extracurricular', [MasterDataController::class, 'ExtracurricularRender'])->name('master-extracurricular');
    Route::post('/extracurricular/create', [MasterDataController::class, 'ExtracurricularHandle'])->name('master-extracurricular-save');

    Route::get('/extracurricular/edit/{id}', [MasterDataController::class, 'ExtracurricularEditRender'])->name('master-extracurricular-edit');
    Route::post('/extracurricular/edit/', [MasterDataController::class, 'ExtracurricularEditHandle'])->name('master-extracurricular-save');
    
    Route::get('/extracurricular/remove/{id}', [MasterDataController::class, 'ExtracurricularRemoveRender'])->name('master-extracurricular-remove');
    Route::post('/extracurricular/remove/', [MasterDataController::class, 'ExtracurricularRemoveHandle'])->name('master-extracurricular-delete');

    /*
    ** Module Settings & Role Data
    */
    Route::get('/apps', [SettingsController::class, 'appsRender'])->name('apps');
    Route::get('/role', [SettingsController::class, 'roleRender'])->name('role');
    Route::get('/setting/setpic', [SettingsController::class, 'setPicRender'])->name('setPicRender');
});

Route::group(['prefix' => 'nilai', 'middleware' => ['auth'], 'as' => 'nilai'], function() {
    Route::get('/sikap/spiritual', [NilaiController::class, 'sikapSpiritualRender'])->name('nilai-sikap-spiritual');
    Route::get('/sikap/sosial', [NilaiController::class, 'sikapSosialRender'])->name('nilai-sikap-sosial');
    Route::get('/naik/catatan', [NilaiController::class, 'naikCatatanRender'])->name('nilai-naik-catatan');
    Route::get('/cetak/raport', [NilaiController::class, 'cetakRaportRender'])->name('nilai-cetak-raport');
    Route::get('/cetak/leger', [NilaiController::class, 'cetakLegerRender'])->name('nilai-cetak-leger');
    Route::get('/absensi_jumlah', [NilaiController::class, 'absensiJumlahRender'])->name('absensiJumlahRender');
});


Route::get('/logout', [AuthController::class, 'logoutRender'])->name('logout');