<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalservicesController extends Controller
{
    //
    public function services(){
        return view ('Hospital.services');
    }
}
