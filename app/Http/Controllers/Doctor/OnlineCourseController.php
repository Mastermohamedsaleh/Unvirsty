<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OnlineCourse;
use App\Models\Course;
use Illuminate\Support\Facades\Session;

class OnlineCourseController extends Controller
{
    
    public function index()
    {
        $onlinecourse =  OnlineCourse::where('doctor_id',auth()->user()->id)->get();
        return  view('Doctor.onlinecourse.index',compact('onlinecourse'));
    }


    public function create()
    {
       $courses = Course::where('doctor_id',auth()->user()->id)->get();
       return  view('Doctor.onlinecourse.create',compact('courses'));

    }

   
    public function store(Request $request)
    {


        try{
     $course =   Course::where('id',$request->course_id)->first();

        OnlineCourse::create([
        'doctor_id'=>auth()->user()->id,
         'college_id'=>$course->college_id,
         'classroom_id'=>$course->classroom_id,
         'section_id'=>$course->section_id,
         'course_id'=>$request->course_id,
         'meeting_id'=>$request->meeting_id,
         'topic'=>$request->topic,
         'start_at'=>$request->start_time,
         'duration'=>$request->duration,
         'password'=>$request->password,
         'start_url'=>$request->start_url,
         'join_url'=>$request->join_url,
        ]);
        Session::flash('message', 'Add Success');
        return redirect()->route('onlinecourse.index');
          
    
    
        } catch (\Exception $e) {
             return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

  
    public function show($id)
    {
        //
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
