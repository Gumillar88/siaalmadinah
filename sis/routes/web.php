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
    return redirect('sia/login');
});
Route::get('sia/login', function () { return view('main/login'); });
Route::get('sia/dashboard', function () { return view('dashboard/dashboard'); });
Route::get('sia/main', function () { return view('layouts/main'); });
Route::get('sia/absensi/create', function () { return view('absensi/create'); });
