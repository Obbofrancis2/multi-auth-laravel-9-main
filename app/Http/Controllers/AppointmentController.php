<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function pending(){
        return view('pending');
    }

    public function manage(){
        return view('Hospital.manageappointments');
    }
}
