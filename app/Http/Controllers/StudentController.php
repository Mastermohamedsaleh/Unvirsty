<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Gender;
use App\Models\Nationalitie;
use App\Models\Classroom;
use App\Models\College;
use App\Models\Section;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class StudentController extends Controller
{
 
    public function index()
    {
        $students = Student::all();
        return view('Admin.students.index',compact('students'));
    }


    public function create()
    {
      $data['genders'] = Gender::all();
      $data['nationalities']  = Nationalitie::all();
      $data['colleges'] = College::all();
    return view('Admin.students.add',$data);
    }


    public function store(Request $request)
    {
         
         

        DB::beginTransaction();

        try {
            $students = new Student();
            $students->name = $request->name;
            $students->email = $request->email;
            $students->password = Hash::make($request->password);
            $students->gender_id = $request->gender_id;
            $students->ssn = $request->ssn;
            $students->nationalitie_id = $request->nationalitie_id;    
            $students->college_id = $request->college_id;
            $students->classroom_id = $request->classroom_id;
            $students->section_id = $request->section_id;
            $students->academic_year = $request->academic_year;
            $students->save();

          
           Session::flash('message', 'Add Success');
         
     
            return redirect()->route('students.create');

        }

        catch (\Exception $e){
    
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
