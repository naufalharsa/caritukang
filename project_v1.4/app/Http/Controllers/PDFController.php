<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Customer;
use App\Models\Mitra;

class PDFController extends Controller
{
    public function getPDFCustomers(){
        $customer = Customer::all();
        $pdf = PDF::loadView('download.customerspdf',['customer'=>$customer]);
        return $pdf->stream('customers.pdf');
    }
    public function getPDFMitra(){
        $mitra = Mitra::all();
        $pdf = PDF::loadView('download.mitrapdf',['mitra'=>$mitra]);
        return $pdf->stream('mitra.pdf');
    }
}
