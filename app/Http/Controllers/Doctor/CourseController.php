<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Lecture;

class CourseController extends Controller
{


    public function courses(){
        $courses = Course::where('doctor_id',auth()->user()->id)->get();
        return view('Doctor.My_Lecture.course',compact('courses'));
    }





    
    public function lecturedoctor(Request $request, $id){

        $courses = Course::where('id',$id)->where('doctor_id',auth()->user()->id)->first();

if($courses){
    $search = $request->input('search');          
    if ($search) {  
        $lectures = Lecture::where('course_id',$id)->where('title', 'like', "%$search%")->where('doctor_id',auth()->user()->id)
        ->orderBy('id', 'DESC')->get();
    }else{
        $lectures = Lecture::where('course_id',$id)->where('doctor_id',auth()->user()->id)->get(); 
    }  
    if( $lectures){
    return view('Doctor.My_Lecture.index',compact('lectures','id'));
    }else{
        return redirect()->back();
    }

}else{
    return redirect()->back();

}



}




}
