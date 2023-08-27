<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function expenditureRender()
    {
        return view('payment/transaksi_pengeluaran');
    }

    public function sppRender()
    {
        return view('payment/spp');
    }

    public function transactionBuildingRender()
    {
        return view('payment/gedung');
    }

    public function registrationRender()
    {
        return view('payment/pendaftaran'); 
    }

    public function createPaymentRender()
    {
        return view('payment/create');
    }
}