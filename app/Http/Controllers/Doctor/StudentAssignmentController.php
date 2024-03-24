<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Student;
use App\Models\ViewAssignment;
use App\Models\DegreeAssignment;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class StudentAssignmentController extends Controller
{
    

    public function index(){
        $courses = Course::where('doctor_id',auth()->user()->id)->get();
        return view('Doctor.Assignments.course',compact('courses'));
    }

    public function show($course_id){      
        $course =    Course::where('id',$course_id)->where('doctor_id',auth()->user()->id)->first();
        if($course){
           $students =  Student::where('college_id',$course->college_id)->where('classroom_id',$course->classroom_id)->where('section_id',$course->section_id)->get();
           return   view('Doctor.Assignments.allstudentcourse',compact('students','course'));
        }else{
           return redirect()->back();
        }
      
   }

   public function viewastudentssignment($student_id , $course_id){
    
      $id_course = Course::where('doctor_id',auth()->user()->id)->where('id',$course_id)->pluck('id')->first(); 

       if($id_course == $course_id){
     
        $viewassignments =  ViewAssignment::where('course_id',$course_id)->where('student_id',$student_id)->get();
       
  
         return view('Doctor.Assignments.viewassignment',compact('viewassignments'));
       }else{
        return redirect()->back();
       }

     
     

   }

    public function show_pdf_student($viewassignment_id,$coure_id){
        $assignment = ViewAssignment::where('id',$viewassignment_id)->where('course_id',$coure_id)->pluck('file_name')->first();
        if($assignment){
          return view('Doctor.Assignments.show_pdf',compact('assignment'));
        }else{
          return redirect()->back();
        }
    }

    public function degreestudentassignment(Request $request){
        

        if($request->insert_button){ 


            $score = $request->score;
            $assignment_id = $request->assignment_id;
            $course_id = $request->course_id;
            $student_id = $request->student_id;
    
            for($i =0 ; $i < count($score) ; $i++){
                  $insert = [
                    'score' =>  $score[$i],
                    'assignment_id'=>$assignment_id[$i],
                    'student_id'=>$student_id,
                    'course_id'=>$course_id
                  ];
                 DB::table('degree_assignments')->insert($insert);
            }  
            Session::flash('message', 'Add Success'); 
            return redirect()->back();
    
        }else{

        }
       
    }

}
