<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\College;


class CollegeController extends Controller
{
  
    public function index()
    {
         $colleges = College::all();
         return view('Admin.colleges.index',compact('colleges'));
    }

  
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
           

        try{

            $college = new College();
            $college->name = $request->name;
            $college->note = $request->note;
            $college->save();

            return redirect()->route('colleges.index');
        }catch (\Exception $e) {
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
        try{

            $college = College::findOrFail($id);
            $college->name = $request->name;        
            $college->note = $request->note;        
            $college->save();
            return redirect()->route('colleges.index');

        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        College ::destroy($id);
        session()->flash('delete');
        return redirect()->back();

   
    }
}

