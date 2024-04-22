<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Course;
use App\Models\Student;
use App\Models\Attendance;

class AttendanceController extends Controller
{

    public function index()
    {
        $courses_doctors = Course::where('doctor_id',auth()->user()->id)->get();
    //    $students = Student::where('college_id',$courses_doctors->college_id)->where('classroom_id',$courses_doctors->classroom_id)->where('section_id',$courses_doctors->section_id)->get();
        return view('Student.Attendance.index',compact('courses_doctors'));
    }


    public function create(Request $request)
    {
       $course = Course::where('id',$request->course_id)->select('college_id','classroom_id','section_id')->first();
       $students = Student::where('college_id',$course->college_id)->where('classroom_id',$course->classroom_id)->where('section_id',$course->section_id)->get();
       $courses_doctors = Course::where('doctor_id',auth()->user()->id)->get();

       return view('Student.Attendance.index',compact('students','courses_doctors'));
    }


    public function store(Request $request)
    {
        try {

            foreach ($request->attendences as $studentid => $attendence) {

                if( $attendence == 'presence' ) {
                    $attendence_status = true;
                } else if( $attendence == 'absent' ){
                    $attendence_status = false;
                }

                Attendance::updateorCreate(['student_id'=>$studentid],[
                    'student_id'=> $studentid,
                    'college_id'=> $request->college_id,
                    'classroom_id'=> $request->classroom_id,
                    'section_id'=> $request->section_id,
                    'doctor_id'=> auth()->user()->id,
                    'attendence_date'=> date('Y-m-d'),
                    'attendence_status'=> $attendence_status
                ]);

            }

            Session::flash('message', 'Submit Success');
            return redirect()->back();

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

  
    public function show($id)
    {
        
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
