<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return redirect('login');
});
Route::get('login', function () { return view('auth/login'); });
// Route::get('sia/main', function () { return view('layouts/main'); });
Route::get('dashboard', function () { return view('dashboard/dashboard'); });
Route::get('bk', function () { return view('bk/index'); });
Route::get('ppdb', function () { return view('ppdb/index'); });
Route::get('ppdb/create', function () { return view('ppdb/create'); });
Route::get('transaksi_pengeluaran', function () { return view('payment/transaksi_pengeluaran'); });
Route::get('spp', function () { return view('payment/spp'); });
Route::get('gedung', function () { return view('payment/gedung'); });
Route::get('pendaftaran', function () { return view('payment/pendaftaran'); });
Route::get('payment/create', function () { return view('payment/create'); });
Route::get('student', function () { return view('master_user/student'); });
Route::get('teacher', function () { return view('master_user/teacher'); });
Route::get('parent', function () { return view('master_user/parent'); });
Route::get('list_schools', function () { return view('master_data/list_schools'); });
Route::get('list_school_levels', function () { return view('master_data/list_school_levels'); });
Route::get('list_classes', function () { return view('master_data/list_classes'); });
Route::get('list_courses', function () { return view('master_data/list_courses'); });
Route::get('list_employees', function () { return view('master_data/list_employees'); });
Route::get('list_teachers', function () { return view('master_data/list_teachers'); });
Route::get('list_students', function () { return view('master_data/list_students'); });
Route::get('apps', function () { return view('settings/apps'); });
Route::get('role', function () { return view('settings/role'); });



