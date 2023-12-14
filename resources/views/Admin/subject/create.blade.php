@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')









 <div class="container mt-5">





 <div class="card">

<div class="card-body">



<h4 class="text-primary text-center">Add Subject</h4>

<form action="{{route('subject.store')}}" method="post">


@csrf
 <div class="row">





 <div class="col-4">
    <label>Collge: <span class="text-danger">*</span> </label>

    <select name="college_id" id=""class="form-select">
    <option value="" >Choose College</option>
@foreach($colleges as $college)
  <option value="{{$college->id}}">{{$college->name}}</option>
@endforeach
</select>

    </div>



    

    <div class="col-4">


    <div class="form-group">

<label>Classroom: <span class="text-danger">*</span> </label>
<select name="classroom_id" class="form-select">
 <option value="" disabled>Choose Classroom</option>
       
 </select>


</div> 
    

    </div>

    <div class="col-4">

    <div class="form-group">

<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id" class="form-select">
        <option value="" disabled>Choose Classroom</option>
 
 </select>


</div>
    </div>


<hr class="mt-3">



<div class="create" id="create"></div>
       
      



<!-- end Row -->

</div>



<a href="javascript:void(0)" class="btn btn-danger addrow mt-3" id="addrow">+</a>



<button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
</form>
<!-- end card-body -->


</div>

<!-- end card -->

</div>

 <!-- end container -->
 </div>


 @include('footer')

<script>
$(document).ready(function(){
  $(".addrow").click(function(){
    var row = `
    <div class="row mt-2">
    <div class="col">
    <input type="text" name="name[]" class="form-control">
    </div>
    <div class="col">
    <select name="doctor_id[]" id=""class="form-select">
    <option value="" disabled>Choose Doctor</option>
@foreach($doctors as $doctor)
  <option value="{{$doctor->id}}">{{$doctor->name}}</option>
@endforeach
</select>

    </div>
    <div class="col">
    <a hreg="javascript:void(0)" class="btn btn-danger deleteRow" >-</a>
    </div>
    </div>
      `
     $('.create').append(row);

     $(".deleteRow").click(function(){

      $(this).parent().parent().remove();
           
     });


  });
});
</script>
