<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\College;
use App\Models\Classroom;
use App\Models\Section;


class AttendanceController extends Controller
{
 
    public function index()
    {
         
        $colleges = College::all();
        // $classrooms = Classroom::all();

        return view('Doctor.Attendance.section',compact('colleges'));
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
       
        // $sections = Section::where('college_id',$id)->get();


        // return Classroom::has('section')->where('college_id',$id)->get();


        // return view('Doctor.Attendance.index',compact('sections'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
