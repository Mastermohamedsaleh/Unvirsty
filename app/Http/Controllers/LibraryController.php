<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





use App\Models\Library;
use App\Models\Course;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LibraryRequest;


use Illuminate\Support\Facades\Auth;


use File;

class LibraryController extends Controller
{
     
    public function index()
    {
        $libraries = Library::where('doctor_id',auth()->user()->id)->get();

        return view('Doctor.My_Library.index',compact('libraries'));

    }


    public function create()
    {
        $courses = Course::where('doctor_id',auth()->user()->id)->get();

        return view('Doctor.My_Library.create',compact('courses'));
    }



    public function store(LibraryRequest $request)
    {

try{
    $fileName = time().'.'.$request->file('file_name')->extension();  
    $request->file('file_name')->move(public_path('Library'), $fileName);
    $library = new Library();
    $library->title = $request->title;
    $library->file_name =   $fileName;
    $library->doctor_id =  auth()->user()->id;
    $library->course_id =  $request->course_id;
    $library->save();
    Session::flash('message', 'Add Success');
    return redirect()->back();
      
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
    }



    public function ShowToStudent(){
        $courses = Course::where('college_id',  Auth::guard('student')->user()->college_id)
        ->where('classroom_id',  Auth::guard('student')->user()->classroom_id)
        ->where('section_id', Auth::guard('student')->user()->section_id)
        ->orderBy('id', 'DESC')
        ->get();

        return view('Student.Library.index',compact('courses'));

    }


    public function ViewCourse($course_id){

        $libraries = Library::where('course_id',$course_id)->get();
        foreach($libraries as $l ){
             $file_name = $l->file_name;
       } 
         return view('Student.Library.show',compact('file_name'));
         
    }



}
