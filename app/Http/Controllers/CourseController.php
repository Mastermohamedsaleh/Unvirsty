<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Doctor;
use App\Models\College;
use Illuminate\Support\Facades\Session;



use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{


    public function index()
    {
        $data['courses'] = Course::all();
        $data['colleges'] = College::all();
        $data['doctors'] = Doctor::all();
        return view('Admin.courses.index',$data);
    }

 

    public function create()
    {
        $data['courses'] = Course::all();
        $data['colleges'] = College::all();
        $data['doctors'] = Doctor::all();
        return view('Admin.courses.create',$data);
    }

 
    public function store(Request $request)
    {
        try {


            $name = $request->name;
            $college = $request->college_id;
            $classroom = $request->classroom_id;
            $section = $request->section_id;
            $doctor = $request->doctor_id;

            for($i =0 ; $i < count($name) ; $i++){
                  $insert = [
                    'name' => $name[$i],
                    'doctor_id'=>$doctor[$i],
                    'college_id'=>$college,
                    'classroom_id'=>$classroom,
                    'section_id'=>$section,
                  ];
                 DB::table('courses')->insert($insert);
            }  


            Session::flash('message', 'Add Success'); 
            return redirect()->route('course.index');
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


    public function destroy(Request $request)
    {
        Course::findOrFail($request->id)->delete();
        Session::flash('message', 'Delete Success');
        return redirect()->route('course.index');
    }
}
