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

// Route::group(['prefix' => 'sia', 'middleware' => ['auth'], 'as' => 'sia'], function() {
    
    Route::get('/dashboard', [DashboardController::class, 'indexRender'])->name('dashboard');
    Route::get('/choose-app', [ChooseAppController::class, 'indexRender'])->name('choose-app');

    Route::get('/bk', [BkController::class, 'indexRender'])->name('bk');
    Route::get('/ppdb', [PpdbController::class, 'indexRender'])->name('ppdb');
    Route::get('/ppdb/create', [PpdbController::class, 'createRender'])->name('ppdb-create');
    Route::get('/ppdb', [PpdbController::class, 'indexRender'])->name('ppdb');

    /*
    ** Module Payments
    */ 
    Route::get('/transaction-expenditure', [PaymentController::class, 'expenditureRender'])->name('transaction-expenditure');
    Route::get('/spp', [PaymentController::class, 'sppRender'])->name('spp');
    Route::get('/transaction-building', [PaymentController::class, 'transactionBuildingRender'])->name('transaction-building');
    Route::get('/registration', [PaymentController::class, 'registrationRender'])->name('registrations');
    Route::get('/payment/create', [PaymentController::class, 'createPaymentRender'])->name('payment-create');

    /*
    ** Module User, Student, Teacher, Parents
    */ 
    Route::get('/student', [UserController::class, 'studentRender'])->name('student');
    Route::get('/teacher', [UserController::class, 'teacherRender'])->name('teacher');
    Route::get('/parent', [UserController::class, 'parentRender'])->name('parent'); 

    /*
    ** Module Lists Master Data
    */
    Route::get('/master/list-school', [MasterDataController::class, 'listSchoolRender'])->name('list-school');
    Route::get('/master/list-school-level', [MasterDataController::class, 'listSchoolLevelRender'])->name('list-school-level');
    Route::get('/master/list-class', [MasterDataController::class, 'listClassRender'])->name('list-class');
    Route::get('/master/list-course', [MasterDataController::class, 'listCourseRender'])->name('list-course');
    Route::get('/master/list-employee', [MasterDataController::class, 'listEmployeeRender'])->name('list-employee');
    Route::get('/master/list-teacher', [MasterDataController::class, 'listTeacherRender'])->name('list-teacher');
    Route::get('/master/list-student', [MasterDataController::class, 'listStudentRender'])->name('list-student');

    /*
    ** Module Settings & Role Data
    */
    Route::get('/apps', [SettingsController::class, 'appsRender'])->name('apps');
    Route::get('/role', [SettingsController::class, 'roleRender'])->name('role');
// });

Route::get('/logout', [AuthController::class, 'logoutRender'])->name('logout');