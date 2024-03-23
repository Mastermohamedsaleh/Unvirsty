<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Assignment;


use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
 
    public function index(){

       $assignments = Assignment::where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',    Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)
        ->orderBy('id', 'DESC')
        ->get();
     return view('Student.Assignments.index', compact('assignments'));
    }
 
    public function show($id){     
      $assignment = Assignment::where('id',$id)->where('college_id',  Auth::guard('student')->user()->college_id)
      ->where('classroom_id', Auth::guard('student')->user()->classroom_id)
      ->where('section_id', Auth::guard('student')->user()->section_id)->first();
      if($assignment ){
        return view('Student.Assignments.show',compact('assignment'));
      }else{
        return redirect()->back();
      }
    }
     
}
