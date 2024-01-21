<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;


use App\Http\Requests\adminrequest;


use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
  
    public function index()
    {
         $admins = Admin::all();
         return view('Admin.admins.index',compact('admins'));
    






    }

  
    public function create()
    {
        //
    }

 
    public function store(adminrequest $request)
    {
           

        try{

            $admin = new Admin();
            $admin->name = $request->name;
            $admin->email =   $request->email;
            $admin->password =   Hash::make($request->password);
 
            $admin->save();


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

    public function update(adminrequest $request, $id)
    {
        try{

            $admin = Admin::findOrFail($id);
            $admin->name = $request->name;
            $admin->email =   $request->email;
            $admin->password =   $request->oldpassword;
            $admin->update();


        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        
        $admin = Admin::findOrFail($id)->delete();
    
        return redirect()->route('Admin.admins.index');

   
    }
}
