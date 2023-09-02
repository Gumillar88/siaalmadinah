<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function sikapSpiritualRender()
    {
        $view['module']   = 'Nilai';
        $view['page']     = 'Sikap Spiritual';
        return view('nilai/sikap/spiritual',['view'=>$view]);
    }
    public function sikapDetailRender()
    {
        return view('nilai/sikap/detail');
    }
    public function sikapSosialRender()
    {
        $view['module']   = 'Nilai';
        $view['page']     = 'Sikap Sosial';
        return view('nilai/sikap/sosial',['view'=>$view]);
    }
    public function naikCatatanRender()
    {
        $view['module']   = 'Catatan';
        $view['page']     = 'Status Naik Kelas dan Catatan Wali';
        return view('nilai/naik/catatan',['view'=>$view]);
    }
    public function cetakRaportRender()
    {
        $view['module']   = 'Catatan';
        $view['page']     = 'Status Naik Kelas dan Catatan Wali';
        return view('nilai/cetak/raport',['view'=>$view]);
    }
}