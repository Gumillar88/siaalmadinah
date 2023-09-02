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
    MasterDataController,
    SettingsController,
};
// use App\Http\Controllers\Admin\DashboardController;
// use App\Http\Controllers\Admin\ChooseAppController;
// use App\Http\Controllers\Admin\BkController;
// use App\Http\Controllers\Admin\PpdbController;

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

    /*
    ** Module Payments
    */ 
    // Route::get('/transaction-expenditure', [PaymentController::class, 'expenditureRender'])->name('transaction-expenditure');
    // Route::get('/spp', [PaymentController::class, 'sppRender'])->name('spp');
    // Route::get('/transaction-building', [PaymentController::class, 'transactionBuildingRender'])->name('transaction-building');
    // Route::get('/registration', [PaymentController::class, 'registrationRender'])->name('registrations');
    // Route::get('/payment/create', [PaymentController::class, 'createPaymentRender'])->name('payment-create');

    /*
    ** Module User, Student, Teacher, Parents
    */ 
    // Route::get('/student', [UserController::class, 'studentRender'])->name('student');
    // Route::get('/teacher', [UserController::class, 'teacherRender'])->name('teacher');
    // Route::get('/parent', [UserController::class, 'parentRender'])->name('parent'); 
});

Route::group(['prefix' => 'master', 'middleware' => ['auth'], 'as' => 'master'], function() {
    
    Route::get('/', [DashboardController::class, 'indexRender'])->name('dashboard');
    /*
    ** Module Master Data
    */
    Route::get('/school', [MasterDataController::class, 'SchoolRender'])->name('master-school');
    Route::post('/school/create', [MasterDataController::class, 'SchoolHandle'])->name('master-school-save');

    Route::get('/school/edit/{id}', [MasterDataController::class, 'SchoolEditRender'])->name('master-school-edit');
    Route::post('/school/edit/', [MasterDataController::class, 'SchoolEditHandle'])->name('master-school-save');
    
    Route::get('/school/remove/{id}', [MasterDataController::class, 'SchoolRemoveRender'])->name('master-school-remove');
    Route::post('/school/remove/', [MasterDataController::class, 'SchoolRemoveHandle'])->name('master-school-delete');

    Route::get('/schoollevel', [MasterDataController::class, 'SchoolLevelRender'])->name('master-schoollevel');
    Route::post('/schoollevel/create', [MasterDataController::class, 'SchoolLevelHandle'])->name('master-schoollevel-save');

    Route::get('/schoollevel/edit/{id}', [MasterDataController::class, 'SchoolLevelEditRender'])->name('master-schoollevel-edit');
    Route::post('/schoollevel/edit/', [MasterDataController::class, 'SchoolLevelEditHandle'])->name('master-schoollevel-update');
    
    Route::get('/schoollevel/remove/{id}', [MasterDataController::class, 'SchoolLevelRemoveRender'])->name('master-schoollevel-remove');
    Route::post('/schoollevel/remove/', [MasterDataController::class, 'SchoolLevelRemoveHandle'])->name('master-schoollevel-delete');

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

    Route::get('/employee', [MasterDataController::class, 'EmployeeRender'])->name('master-employee');
    Route::get('/teacher', [MasterDataController::class, 'TeacherRender'])->name('master-teacher');
    Route::get('/student', [MasterDataController::class, 'StudentRender'])->name('master-student');

    Route::get('/student', [UserController::class, 'studentRender'])->name('master-student');
    Route::get('/teacher', [UserController::class, 'teacherRender'])->name('master-teacher');
    Route::get('/parent', [UserController::class, 'parentRender'])->name('master-parent'); 

    /*
    ** Module Settings & Role Data
    */
    Route::get('/apps', [SettingsController::class, 'appsRender'])->name('apps');
    Route::get('/role', [SettingsController::class, 'roleRender'])->name('role');
});

Route::get('/logout', [AuthController::class, 'logoutRender'])->name('logout');