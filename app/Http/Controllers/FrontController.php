<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuotationMail;

class FrontController extends Controller
{
    //
    public function index()
    {
        $data = ['Collaboration', 'Humility', 'Excellence', 'Integrity'];
        return view('index')->with(['data' => $data]);
    }

    public function postRequest(Request $request)
    {
        Mail::to("cs@grandsatya.com")->send(new QuotationMail($request->all()));
        return "Email telah dikirim";
    }

    public function blog()
    {
        return view('blog');
    }
    public function blog1()
    {
        return view('blog1');
    }
    public function blog2()
    {
        return view('blog2');
    }
    public function blog3()
    {
        return view('blog3');
    }
    public function blog4()
    {
        return view('blog4');
    }
    public function blog5()
    {
        return view('blog5');
    }
}
