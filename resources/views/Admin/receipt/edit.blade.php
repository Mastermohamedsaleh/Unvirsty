@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')




<div class="container mt-5">








<div class="card">

<div class="card-body">



<h4 class="text-primary text-center">Update Receipt</h4>


<form action="{{route('receipt.update','test')}}" method="post">
@csrf
@method('PUT')
<div class="row">

<input  type="hidden" name="student_id" value="{{$receipt->student->id}}" class="form-control">
<input  type="hidden" name="id" value="{{$receipt->id}}" class="form-control">

<div class="col-12">
    <label for="">Amount <span class="text-danger">*</span></label>
    <input type="number" name="Debit" value="{{$receipt->Debit}}" class="form-control">
</div>


<div class="col-12">

<label for="">Description <span class="text-danger">*</span></label>
 
<textarea name="description" cols="30" rows="10" class="form-control">{{$receipt->description}}</textarea>

</div>






</div>


<button type="submit" class="btn btn-primary mt-3">Update</button>

</form>



</div>


</div>






</div>








 @include('footer')