@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')








<div class="container mt-5" style="width:600px">

<h4 class="text-center text-color fs-1 fw-bold fst-italic">Doctor</h4>

<img src="{{URL::asset('assets/images/edd01-1.jpg')}}" class="img-thumbnail rounded-circle mx-auto d-block"   alt="..." style="width:200px;hieght:300px">





 <!-- Message Success -->
 @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
<!-- End Success -->





<form action="{{route('doctors.store')}}" method="post">



@csrf


<div class="row">





<div class="col-md-6">

<div class="form-group">
 <label>Name : <span class="text-danger">*</span></label>
 <input  type="text" name="name"  class="form-control">
</div>     


@error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror
<!-- end one col -->
</div>

<div class="col-md-6">


<div class="form-group">
 <label>Email : <span class="text-danger">*</span></label>
 <input  type="email" name="email"  class="form-control" require>
</div>   

@error('email')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror

<!-- end one two -->
</div>

<div class="col-md-6">


<div class="form-group">
 <label>Password : <span class="text-danger">*</span></label>
 <input  type="password" name="password"  class="form-control" require>
</div> 
@error('password')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror

<!-- end one three -->
</div>

<div class="col-md-6">


<div class="form-group">
 <label>Ssn : <span class="text-danger">*</span></label>
 <input  type="text" name="ssn"  class="form-control" require>
</div> 
@error('ssn')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror

<!-- end one four -->
</div>
<div class="col-md-6">


<div class="form-group">
 <label>Address : <span class="text-danger">*</span></label>
 <input  type="text" name="address"  class="form-control" require>
</div> 

@error('Address')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror


<!-- end one four -->
</div>

<div class="col-md-6">


<div class="form-group">

<label>College: <span class="text-danger">*</span> </label>
<select name="college_id" class="form-select">
        <option value="" >Choose College</option>
            @foreach($colleges as $college) 
          
        <option value="{{$college->id}}" >{{$college->name}}</option>
      
            @endforeach
 </select>


 @error('college_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror


</div> 


<!-- end one five -->
</div>


<div class="col-md-6">


<div class="form-group">

<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id" class="form-select">
        <option value="" disabled>Choose Classroom</option>
 
 </select>

 @error('section_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror

</div> 


<!-- end one seven -->
</div>
<div class="col-md-6">


<div class="form-group">

<label>Gender: <span class="text-danger">*</span> </label>
<select name="gender_id" class="form-select">
        <option value="" disabled>Choose Gender</option>
            @foreach($genders as $gender) 
            <option value="{{$gender->id}}" >{{$gender->type}}</option>
            @endforeach
 </select>
 @error('gender_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror

</div> 


<!-- end one eigth -->
</div>
<div class="col-md-6">


<div class="form-group">

<label>Nationalitie: <span class="text-danger">*</span> </label>
<select name="nationalitie_id" class="form-select ">
        <option value="" disabled>Choose Nationalitie</option>
            @foreach($nationalities as $nationalitie) 
            <option value="{{$nationalitie->id}}" >{{$nationalitie->nationalitie}}</option>
            @endforeach
 </select>


 @error('nationalitie_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror

</div> 


<!-- end one ten -->
</div>
<div class="col-md-6">


<div class="form-group">

<label>Joining_Date: <span class="text-danger">*</span> </label>


<input  name="Joining_Date" class="form-control"type="date" id="start" name="trip-start" value="2023-07-22" min="2018-01-01" max="2023-12-31" />


        @error('Joining_Date')
            <div class="alert alert-danger">{{ $message }}</div>
         @enderror


</div> 


<!-- end one ten -->
</div>





<!-- end Row -->
</div>



 
<button type="submit" class="btn mt-3 button-color d-block">Save</button>
 


</form>







<!-- end container -->
</div>



<script>
$(document).ready(function () {


    $('select[name="college_id"]').on('change', function () {

        var college_id = $(this).val();

        if(college_id){
            $.ajax({
                url: "{{ URL::to('getsection') }}/"+college_id,
                type: "GET",
                dataType: "json",

              success: function(data) {
                 $('select[name="section_id"]').empty();
                 $.each(data, function (key, value) { 
                    $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>')   
                 });
              },
            });

        }else{
            console.log('AJAX load did not work');

        }

    });  
});



</script>







@include('footer')
