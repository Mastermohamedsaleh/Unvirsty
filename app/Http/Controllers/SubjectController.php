<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subject;
use App\Models\Doctor;
use App\Models\College;
use Illuminate\Support\Facades\Session;



use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{


    public function index()
    {
        $data['subjects'] = Subject::all();
        $data['colleges'] = College::all();
        $data['doctors'] = Doctor::all();
        return view('Admin.subject.index',$data);
    }

 

    public function create()
    {
        $data['subjects'] = Subject::all();
        $data['colleges'] = College::all();
        $data['doctors'] = Doctor::all();
        return view('Admin.subject.create',$data);
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
                 DB::table('subjects')->insert($insert);
            }  


            Session::flash('message', 'Add Success'); 
            return redirect()->route('subject.index');
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
        Subject::findOrFail($request->id)->delete();
        Session::flash('message', 'Delete Success');
        return redirect()->route('subject.index');
    }
}
