<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Assignment;
use App\Models\Course;
 
use App\Http\Requests\AssignmentRequest;

use Illuminate\Support\Facades\Session;

use File;

class AssignmentController extends Controller
{

    public function index()
    {
         
        $assignments = Assignment::where('doctor_id',auth()->user()->id)->get();
        return view('Doctor.Assignments.index',compact('assignments'));

    }


    public function create()
    {
        $data['courses'] = Course::where('doctor_id',auth()->user()->id)->get();
        return view('Doctor.Assignments.create', $data);
    }


    public function store(AssignmentRequest $request)
    {





        $course = Course::where('id' , $request->course_id)->first();
        try {
            $fileName = time().'.'.$request->file('file_name')->extension();  
            $request->file('file_name')->move(public_path('Assignment_Doctor'), $fileName);
            $quizzes = new Assignment();
            $quizzes->name = $request->name;
            $quizzes->course_id =  $request->course_id;
            $quizzes->college_id =  $course->college_id;
            $quizzes->classroom_id =  $course->classroom_id;
            $quizzes->section_id =  $course->section_id;
            $quizzes->start_time =  $request->start_time;
            $quizzes->end_time =  $request->end_time;
            $quizzes->file_name =   $fileName;
            $quizzes->doctor_id = auth()->user()->id;
            $quizzes->save();
            Session::flash('message', 'Add Success');
            return redirect()->route('assignments.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

          
         
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $assignment = Assignment::where('id',$id)->where('doctor_id',auth()->user()->id)->first();
        if(  $assignment ){
            $courses =  Course::where('doctor_id',auth()->user()->id)->get();
            return view('Doctor.Assignments.edit', compact('courses','assignment'));
        }else{
            return redirect()->back();
        }
    }


    public function update(AssignmentRequest $request, $id)
    {

        try{
             $course = Course::where('id' , $request->course_id)->first();     
             $Assignment = Assignment::findOrfail($id);         
               if (request()->hasFile('file_name')){
                   $file_name = public_path('Assignment_Doctor/'.$Assignment->file_name);
                   if(File::exists($file_name)){
                       unlink($file_name);
                   }
                   $file_name = time().'.'.$request->file('file_name')->extension();  
                   $request->file('file_name')->move(public_path('Assignment_Doctor'), $file_name); 
                   } else {
                       $file_name =  $Assignment->file_name;
                   }
       
                   $Assignment->name = $request->name;
                   $Assignment->file_name =   $file_name;
                   $Assignment->doctor_id =  auth()->user()->id;
                   $Assignment->course_id =  $request->course_id;
                   $Assignment->college_id =  $course->college_id;
                   $Assignment->classroom_id =  $course->classroom_id;
                   $Assignment->section_id =  $course->section_id;
                   $Assignment->save();
                   Session::flash('message', 'Update Success');
                   return redirect()->route('assignments.index');
       
               } catch (\Exception $e) {
                   return redirect()->back()->withErrors(['error' => $e->getMessage()]);
              }

    }

    public function destroy($id)
    {
          
        $Assignment = Assignment::findOrFail($id);
        $Assignment_path = public_path("Assignment_Doctor/{$Assignment->file_name}");
    
        if (File::exists($Assignment_path)) {
            File::delete($Assignment_path);
        }
        $Assignment->delete();
        Session::flash('message', 'Delete Success');
        return redirect()->route('assignments.index');

         
    }
}
