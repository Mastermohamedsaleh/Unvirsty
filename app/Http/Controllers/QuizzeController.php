<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\College;
use App\Models\Quizze;
use App\Models\Subject;
use App\Models\Doctor;
use Illuminate\Support\Facades\Session;


class QuizzeController extends Controller
{


    public function index()
    {
        $quizzes = Quizze::get();
        return view('Doctor.Quizzes.index', compact('quizzes'));
    }


    public function create()
    {
        $data['colleges'] = College::all();
        $data['subjects'] = Subject::all();
        $data['doctors'] = Doctor::all();
        return view('Doctor.Quizzes.create', $data);
    }


    public function store(Request $request)
    {
        try {
            $quizzes = new Quizze();
            $quizzes->name = $request->name;
            $quizzes->subject_id = $request->subject_id;
            $quizzes->college_id = $request->college_id;
            $quizzes->classroom_id = $request->classroom_id;
            $quizzes->section_id = $request->section_id;
            $quizzes->doctor_id = $request->doctor_id;
            $quizzes->save();
            Session::flash('message', 'Add Success');
            return redirect()->route('quizzes.index');
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
        $quizz = Quizze::findorFail($id);
        $data['colleges'] = College::all();
        $data['subjects'] = Subject::all();
        $data['doctors'] = Doctor::all();
        return view('Doctor.Quizzes.edit', $data, compact('quizz'));
    }


    public function update(Request $request, $id)
    {
        try {
            $quizz = Quizze::findorFail($request->id);
            $quizzes->name = $request->name;
            $quizzes->subject_id = $request->subject_id;
            $quizzes->college_id = $request->college_id;
            $quizzes->classroom_id = $request->classroom_id;
            $quizzes->section_id = $request->section_id;
            $quizzes->doctor_id = $request->doctor_id;
            $quizz->save();
            Session::flash('message', 'Update Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request ,$id)
    {
        try {
            Quizze::destroy($request->id);
            Session::flash('message', 'Delete Success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
