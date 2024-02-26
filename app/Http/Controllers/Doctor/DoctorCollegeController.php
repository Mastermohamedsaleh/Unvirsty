<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Doctor_college;

class DoctorCollegeController extends Controller
{
    

    public function index(){
        $doctor_colleges =  Doctor_college::where('doctor_id',auth()->user()->id)->get();
        return view('Doctor.My_class.index',compact('doctor_colleges'));
    }

}
