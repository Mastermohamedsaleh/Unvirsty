<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Fee;
use App\Models\Fee_invoice;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class FeeInvoicesController extends Controller
{

    public function index()
    {
        
        $fee_invoices = Fee_invoice::all();
     
        return view('Admin.fee_invoices.index',compact('fee_invoices'));


    }

  
    public function create($id)
    {
        //
    }

 
    public function store(Request $request)
    {
            
        DB::beginTransaction();
         
        try{
            $fee = new Fee_invoice();
            $fee->invoice_date = date('Y-m-d');
            $fee->student_id = $request->student_id;
            $fee->college_id = $request->college_id;
            $fee->classroom_id = $request->classroom_id;
            $fee->section_id = $request->section_id;
            $fee->fee_id = $request->fee_id;
            $fee->amount = $request->amount;
            $fee->save();

            
             // حفظ البيانات في جدول حسابات الطلاب
             $StudentAccount = new StudentAccount();
             $StudentAccount->date = date('Y-m-d');
             $StudentAccount->fee_invoice_id = $fee->id;
             $StudentAccount->student_id = $request->student_id;
             $StudentAccount->Debit = $request->amount;
             $StudentAccount->credit = 0.00;
             $StudentAccount->save();

             DB::commit();

             Session::flash('message', 'Add Success');
             return redirect()->route('fee_invoices.index');

        }catch(\Exception $e){

            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);


        }
         
          

    }


    public function show($id)
    {
        $student = Student::findorfail($id);
        $fees = Fee::where('college_id',$student->college_id)->where('classroom_id',$student->classroom_id)->get();
        return view('Admin.fee_invoices.add',compact('student','fees'));

    
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
