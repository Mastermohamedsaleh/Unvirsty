<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Student;

class TotalDegreeController extends Controller
{
      

    public function index(){






 
        // $colleges = Course::where('doctor_id',auth()->user()->id)->select('id','name','college_id','classroom_id','section_id')->get();
        $courses = Course::where('doctor_id',auth()->user()->id)->get();
 
       
        // $allstudent =  Student::where('college_id',$students->college_id)->where('classroom_id',$students->classroom_id)->where('section_id',$students->section_id)->get();
        return   view('Doctor.Degree.allstudentcourse',compact('courses')); 
    }

    public function allstudent($college_id , $classroom_id , $section_id = null , $course_id){
      $allstudent =  Student::where('college_id',$college_id)->where('classroom_id',$classroom_id)->where('section_id',$section_id)->get();
    //   return view('Doctor.Degree.allstudent',compact('allstudent','course_id'));
    return $course_id;
  

    }



    public function show(Request $request){         
    
            $course = Course::where('id',$request->course_id)->where('doctor_id',auth()->user()->id)->first();

             $students = Student::where('college_id',$course->college_id)->where('classroom_id',$course->classroom_id)->where('section_id',$course->section_id)->get();

             $courses = Course::where('doctor_id',auth()->user()->id)->get();
             return   view('Doctor.Degree.allstudentcourse',compact('students','courses')); 



    }
     
     
}
