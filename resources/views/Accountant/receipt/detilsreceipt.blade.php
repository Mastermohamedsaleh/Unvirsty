@include('header')
  <div class="wrapper">
    @include('sidebar_accountant')

      <div class="main">
 @include('nav')




 <div class="container mt-5">
 
  <h3 class="text-center txt-green">All Details</h3>




  <table class="table">


  <tr>
    <th>Name</th>
    <th>College</th>
  </tr>

  <tr>
    <td>{{$student->name}}</td>
    <td>{{$student->college->name}}</td>
  </tr>

      <tr>
        <th>Invoice Date</th>
        <th>Amount</th>
        
   
      </tr>
      <tr>
        <td>{{$fee_invoices->invoice_date}}</td>
        <td>{{$fee_invoices->amount}}</td>

      </tr>
      <tr>
        <th>Date Receipt</th>
        <th>Debit</th>
   
      </tr>
      @foreach($receipt as $r)
      <tr>
        <td>{{$r->date}}</td>
        <td>{{$r->Debit}}</td>
      </tr>
  
@endforeach

<th ><a class="text-center" href="">Print</a></th><th></th>
  </table>
  
 







</div>






 @include('footer')