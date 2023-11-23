<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\College;
use App\Models\Classroom;


class SectionController extends Controller
{
  
    public function index()
    {

        $colleges = College::all();
        $classrooms = Classroom::all();

        return view('Admin.sections.index',compact('colleges','classrooms'));
    }

  
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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



    public function getclasses($id){

        $list_classes = Classroom::where("college_id", $id)->pluck("name", "id");

        return $list_classes;

          
    }


}
