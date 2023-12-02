@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')





<div class="cantainer mt-5">


<div class="card m-5">


 
<div class="card-header">
    <h4 class="text-success text-center">Doctor</h4>
    <!-- end card header -->
</div>



<div class="card-body">


 <!-- Message Success -->
 @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
<!-- End Success -->

 <!-- Message Error -->
@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
@endif
 <!-- End Message Error -->



<form action="{{route('doctors.update','test')}}" method="post">


@method('PUT')
@csrf


<div class="row">


<input type="hidden" value="{{$doctor->password}}" name="password">
<input type="hidden" value="{{$doctor->id}}" name="id">


<div class="col-md-6">

<div class="form-group">
 <label>Name : <span class="text-danger">*</span></label>
 <input  type="text" name="name"  value= "{{$doctor->name}}" class="form-control">
</div>             
<!-- end one col -->
</div>

<div class="col-md-6">


<div class="form-group">
 <label>Email : <span class="text-danger">*</span></label>
 <input  type="email" name="email"  value= "{{$doctor->email}}" class="form-control" require>
</div>   

<!-- end one two -->
</div>



<div class="col-md-6">


<div class="form-group">
 <label>Ssn : <span class="text-danger">*</span></label>
 <input  type="text" name="ssn" value= "{{$doctor->ssn}}"  class="form-control" require>
</div> 


<!-- end one four -->
</div>

<div class="col-md-6">


<div class="form-group">

<label>College: <span class="text-danger">*</span> </label>
<select name="college_id" id="college_id" class="form-select">
        <option value="" >Choose College</option>
            @foreach($colleges as $college) 
          
        <option value="{{$college->id}}" {{ $college->id == $doctor->college_id ? 'selected' : '' }}  >{{$college->name}}</option>
      
            @endforeach
 </select>


</div> 


<!-- end one five -->
</div>



<div class="col-md-6">


<div class="form-group">

<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id" class="form-select">
        <option value="" disabled>Choose Section</option>
 
 </select>


</div> 







<!-- end one seven -->
</div>


<div class="col-md-6">

<div class="form-group">
 <label>Address : <span class="text-danger">*</span></label>
 <input  type="text" name="address" value="{{$doctor->Address}}" class="form-control" require>
</div>



</div>





<div class="col-md-6">


<div class="form-group">

<label>Gender: <span class="text-danger">*</span> </label>
<select name="gender_id" class="form-select">
        <option value="" disabled>Choose Gender</option>
            @foreach($genders as $gender) 
            <option value="{{$gender->id}}" {{ $gender->id == $doctor->gender_id ? 'selected' : '' }} >{{$gender->type}}</option>
            @endforeach
 </select>


</div> 


<!-- end one eigth -->
</div>
<div class="col-md-6">


<div class="form-group">

<label>Nationalitie: <span class="text-danger">*</span> </label>
<select name="nationalitie_id" class="form-select ">
        <option value="" disabled>Choose Nationalitie</option>
            @foreach($nationalities as $nationalitie) 
            <option value="{{$nationalitie->id}}" {{ $nationalitie->id == $doctor->nationalitie_id ? 'selected' : '' }}  >{{$nationalitie->nationalitie}}</option>
            @endforeach
 </select>


</div> 


<!-- end one ten -->
</div>
<div class="col-md-6">


<div class="form-group">

<label>Current Year: <span class="text-danger">*</span> </label>


<input class="form-control" type="text" name="Joining_Date"  value="{{$doctor->Joining_Date}}" id="">


</div> 


<!-- end one ten -->
</div>





<!-- end Row -->
</div>



 
<button type="submit" class="btn btn-success m-3">UPdate</button>
 


</form>










    <!-- end card body -->
</div>





<!-- end card -->
</div>

<!-- end container -->
</div>



<script>
$(document).ready(function () {

        var college_id =   $('#college_id').find(":selected").val();

        if(college_id){
            $.ajax({
                url: "{{ URL::to('getsection') }}/"+college_id,
                type: "GET",
                dataType: "json",

              success: function(data) {
                 $('select[name="section_id"]').empty();
                 $.each(data, function (key, value) { 
                    $('select[name="section_id"]').append('<option   value="' + key + '">' + value + '</option>')   
                 });
              },
            });

        }else{
            console.log('AJAX load did not work');
        }

});



</script>







@include('footer')
