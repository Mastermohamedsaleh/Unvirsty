<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Lecture;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;


class LectureStudentController extends Controller
{
    


    public function LectureStudent(Request $request){



        $search = $request->input('search');          
        if ($search) {  
            $lectures = Lecture::where('title', 'like', "%$search%")->where('college_id',  Auth::guard('student')->user()->college_id)
            ->where('classroom_id',  Auth::guard('student')->user()->classroom_id)
            ->where('section_id', Auth::guard('student')->user()->section_id)
            ->orderBy('id', 'DESC')->paginate(PAGENATOR_COUNT);
        }else{
            $lectures = Lecture::where('college_id',  Auth::guard('student')->user()->college_id)
            ->where('classroom_id',  Auth::guard('student')->user()->classroom_id)
            ->where('section_id', Auth::guard('student')->user()->section_id)
            ->orderBy('id', 'DESC')->paginate(PAGENATOR_COUNT); 
        }  
        if( $lectures){
        return view('Student.Lecture.index',compact('lectures'));
        }else{
            return redirect()->back();
        }

    }

    public function ViewLecture($lecture_id){

        // Library::findorFail($library_id);
        $lecture = Lecture::where('id',$lecture_id)->where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',  Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)->first();
        if($lecture){
           $file_name =  $lecture->file_name;
           return view('Student.Lecture.show',compact('file_name'));
        }else{
            return redirect()->back();
        }
         
    }



}
