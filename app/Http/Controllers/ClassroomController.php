<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\College;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
  
    public function index()
    {
        $classrooms = Classroom::all();
        $colleges = College::all();
        return view('Admin.classrooms.index', compact('classrooms', 'colleges'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Classroom $classroom)
    {
        //
    }

    public function edit(Classroom $classroom)
    {
        //
    }


    public function update(Request $request, Classroom $classroom)
    {
        //
    }

  
    public function destroy(Classroom $classroom)
    {
        //
    }
}
