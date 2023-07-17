<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Services;

class AddserviceController extends Controller
{
    //
    public function addservice(){
        return view ('Hospital.addservice');
    }

    public function addservices(Request $req){
       $Services = New Services;
       $Services->servicename = $req->servicename;
       $Services->servicetype = $req->servicetype;
       $Services->serviceprice = $req->serviceprice;
       $Services->startdate = $req->startdate;
       $Services->enddate = $req->enddate;
       $Services-> save();

       return redirect('/services');
}
}
    
