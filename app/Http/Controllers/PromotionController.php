<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\College;


class PromotionController extends Controller
{
 
    public function index()
    {
        //
    }

   
    public function create()
    {
         $colleges =  College::all();
        return view('Admin.promotion.create' , compact('colleges'));
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
