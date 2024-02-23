<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Accountant;

class AccountantController extends Controller
{


    public function index()
    {
        $accountants = Accountant::where('college_id',auth()->user()->college_id)->get();
        return view('Admin.accountants.index',compact('accountants'));
    }



    public function create()
    {
        $colleges = College::where('id',auth()->user()->college_id)->get();
        return view('Admin.accountants.index',compact('colleges'));
          
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
}
