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
use App\Http\Requests\StudentRequest;




class StudentController extends Controller
{
 
    public function index(Request $request)
    {

        $search = $request->input('search');          
        if ($search) {  
            $students = Student::where('college_id',auth()->user()->college_id)->where('name', 'like', "%$search%")->orwhere('email', 'like', "%$search%")->paginate(PAGENATOR_COUNT);
        }else{
            $students = Student::where('college_id',auth()->user()->college_id)->paginate(PAGENATOR_COUNT);  
        }

        return view('Admin.students.index',compact('students'));
    }


    public function create()
    {
      $data['genders'] = Gender::all();
      $data['nationalities']  = Nationalitie::all();
      $data['colleges'] = College::where('id',auth()->user()->college_id)->get();
    return view('Admin.students.add',$data);
    }


    public function store(StudentRequest $request)
    {
         
         
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
            return redirect()->route('students.index');

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
        
        
         $student = Student::where('id',$id )->where('college_id',auth()->user()->college_id)->first();

         if( !$student  ){
            return redirect()->back();
         }


         $data['genders'] = Gender::all();
         $data['nationalities']  = Nationalitie::all();
         $data['colleges'] = College::where('id',auth()->user()->college_id)->get();

        return view('Admin.students.edit',compact('student') , $data);
    }


    public function update(StudentRequest $request, $id)
    {
        try {
            $students =  Student::findOrfail($id);
            $students->name = $request->name;
            $students->email = $request->email;
            $students->password = $request->password;
            $students->gender_id = $request->gender_id;
            $students->ssn = $request->ssn;
            $students->nationalitie_id = $request->nationalitie_id;    
            $students->college_id = $request->college_id;
            $students->classroom_id = $request->classroom_id;
            $students->section_id = $request->section_id;
            $students->academic_year = $request->academic_year;
            $students->save();

          
           Session::flash('message', 'Update Success');
            return redirect()->route('students.index');

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request  , $id)
    {
        $student = Student::findOrFail($request->id)->delete();
        Session::flash('message', 'Delete Success');
        return redirect()->route('students.index');
    }
}
