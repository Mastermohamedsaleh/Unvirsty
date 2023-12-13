<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\FeeRequest;

use App\Models\College;
use App\Models\Fee;

class FeeController extends Controller
{

    public function index()
    {
        $fee = Fee::all();
        return view('Admin.fee.index',compact('fee'));
    }

 
    public function create()
    {
        $colleges = College::all();
        return view('Admin.fee.add',compact('colleges'));
        
    }





    public function show(){
        //
    }


    public function edit($id)
    {
         $fee = Fee::findOrfail($id); 
         $colleges = College::all();
         return  view('Admin.fee.edit',compact('fee','colleges'));      
    }



    public function store(FeeRequest $request)
    {
         
        try{
            $fee = new Fee();
            $fee->amount = $request->amount;
            $fee->title = $request->title;
            $fee->college_id = $request->college_id;
            $fee->classroom_id = $request->classroom_id;
            $fee->section_id = $request->section_id;
            $fee->academic_year = $request->academic_year;
            $fee->save();

        Session::flash('message', 'Add Success');
        return redirect()->route('fee.index');
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
          
         
    }

    



    public function update(FeeRequest $request, $id)
    {
        

        try{
            $fee =  Fee::findOrfail($request->id);
            $fee->amount = $request->amount;
            $fee->title = $request->title;
            $fee->college_id = $request->college_id;
            $fee->classroom_id = $request->classroom_id;
            $fee->section_id = $request->section_id;
            $fee->academic_year = $request->academic_year;
            $fee->save();

        Session::flash('message', 'update Success');
        return redirect()->route('fee.index');
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }



    }


    public function destroy(Request $request,$id)
    {
        $fee = Fee::findOrFail($request->id)->delete();
        Session::flash('message', 'Delete Success');
        return redirect()->route('fee.index');
    }
}
