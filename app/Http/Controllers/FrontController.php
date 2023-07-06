<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    
    public function postRequest(Request $request)
    {
        return $request->all();
        // return view('index');
    }
}
