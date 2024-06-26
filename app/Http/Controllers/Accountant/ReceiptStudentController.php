<?php

namespace App\Http\Controllers\Accountant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentAccount;
use App\Models\FundAccount;
use App\Models\Fee_Invoice;
use App\Models\ReceiptStudent;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ReceiptStudentController extends Controller
{
  
    public function index()
    {
        $receipt_students = ReceiptStudent::paginate(PAGENATOR_COUNT);
        return view('Accountant.receipt.index',compact('receipt_students'));
    }


    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        
        DB::beginTransaction();
        try {
            // حفظ البيانات في جدول سندات القبض
            $receipt_students = new ReceiptStudent();
            $receipt_students->date = date('Y-m-d');
            $receipt_students->student_id = $request->student_id;
            $receipt_students->Debit = $request->Debit;
            $receipt_students->description = $request->description;
            $receipt_students->academic_year = date("Y");
            $receipt_students->save();

            // حفظ البيانات في جدول الصندوق
            $fund_accounts = new FundAccount();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->receipt_id = $receipt_students->id;
            $fund_accounts->Debit = $request->Debit;
            $fund_accounts->credit = 0.00;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();

            // حفظ البيانات في جدول حساب الطالب
            $student_accounts = new StudentAccount();
            $student_accounts->date = date('Y-m-d');
            $student_accounts->student_id = $request->student_id;
            $student_accounts->Debit = 0.00;
            $student_accounts->credit = $request->Debit;
            $student_accounts->receipt_id  =  $receipt_students->id;
            $student_accounts->academic_year = date("Y");
            $student_accounts->save();

            DB::commit();
            Session::flash('message', 'Add Success'); 
            return redirect()->route('receipt.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }




    }

   
    public function show($id)
    {
        $student = Student::findorfail($id);
        $fee_invoices = Fee_Invoice::where('student_id',$id)->where('college_id',$student->college_id)->where('classroom_id',$student->classroom_id)->where('section_id',$student->section_id)->first();
        return view('Accountant.receipt.add',compact('student','fee_invoices'));

    }

 
    public function edit($id)
    {
        $receipt = ReceiptStudent::findorfail($id);
        $student_id = ReceiptStudent::where('id',$id)->pluck('student_id');
        $fee_invoices = Fee_Invoice::where('student_id',$student_id)->first();
        return view('Accountant.receipt.edit',compact('receipt','fee_invoices'));
      
    }


    public function update(Request $request, $id)
    {
    

      
        
        DB::beginTransaction();
        try {
            // تعديل البيانات في جدول سندات القبض
            $receipt_students = ReceiptStudent::findorfail($request->id);
            $receipt_students->date = date('Y-m-d');
            $receipt_students->student_id = $request->student_id;
            $receipt_students->Debit = $request->Debit;
            $receipt_students->description = $request->description;
            $receipt_students->academic_year = date("Y");
            
            $receipt_students->save();


     

            // تعديل البيانات في جدول الصندوق
            $fund_accounts = FundAccount::where('receipt_id',$request->id)->first();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->receipt_id = $receipt_students->id;
            $fund_accounts->Debit = $request->Debit;
            $fund_accounts->credit = 0.00;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();

            // تعديل البيانات في جدول حساب الطالب
            $student_accounts = StudentAccount::where('receipt_id',$request->id)->first();
            $student_accounts->date = date('Y-m-d');
            $student_accounts->student_id = $request->student_id;
            $student_accounts->receipt_id = $receipt_students->id;
            $student_accounts->Debit = 0.00;
            $student_accounts->credit = $request->Debit;
            $student_accounts->academic_year = date("Y");
            $student_accounts->save();

            DB::commit();
            Session::flash('message', 'Update Success'); 
            return redirect()->route('receipt.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        






    }


    public function destroy($id)
    {
        $ReceiptStudent = ReceiptStudent::findOrFail($id)->delete();
    
        return redirect()->route('receipt.index');
    }


    public function receiptditalis($id){
        
        $student = Student::findorfail($id);
        $fee_invoices = Fee_Invoice::where('student_id',$id)->where('college_id',$student->college_id)->where('classroom_id',$student->classroom_id)->where('section_id',$student->section_id)->first();
        
        $receipt = ReceiptStudent::where('student_id',$id)->get();
        return view('Accountant.receipt.detilsreceipt',compact('fee_invoices','receipt','student'));




    }


}
