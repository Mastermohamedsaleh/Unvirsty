@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')








   <h4 class="text-color text-center mt-4">Promotion</h4>

<form action="{{route('promotion.store')}}" method="post"></form>

@csrf
   <div class="container mt-4">

   <div class="row">


   <h4 class=" mt-4">Promotion Form</h4>


   <div class="col-4">


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

</div> 




   <div class="col-4">
   <div class="form-group">

<label>Classroom: <span class="text-danger">*</span> </label>
<select name="classroom_id" class="form-select">
    <option value="" disabled>Choose Classroom</option>
       
 </select>


</div> 

   <!-- end one col -->
   </div>

   <div class="col-4">
  


<div class="form-group">

<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id" class="form-select">
        <option value="" disabled>Choose Classroom</option>
 
 </select>


</div> 


   <!-- end one col -->
   </div>





   <!-- end row -->
   </div>



   <!-- Row Tow -->
   <div class="row">


   <h4 class=" mt-4">Promotion TO</h4>


   <div class="col-4">


<div class="form-group">

<label>College: <span class="text-danger">*</span> </label>
<select name="college_id_new" class="form-select">
        <option value="" >Choose College</option>
            @foreach($colleges as $college) 
          
        <option value="{{$college->id}}" >{{$college->name}}</option>
      
            @endforeach
 </select>


 @error('college_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror
</div>

</div> 




   <div class="col-4">
   <div class="form-group">

<label>Classroom: <span class="text-danger">*</span> </label>
<select name="classroom_id_new" class="form-select">
    <option value="" disabled>Choose Classroom</option>
       
 </select>


</div> 

   <!-- end one col -->
   </div>

   <div class="col-4">
  


<div class="form-group">

<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id_new" class="form-select">
        <option value="" disabled>Choose Classroom</option>
 
 </select>


</div> 


   <!-- end one col -->
   </div>





   <!-- end row -->
   </div>




 <button class="btn button-color mt-3">Save</button>



</form>
















   <!-- container -->
   </div>


   <script>
$(document).ready(function () {

    $('select[name="college_id"]').on('change', function () {
      
        var college_id = $(this).val();
        if(college_id){
            $.ajax({
                url: "{{ URL::to('classes') }}/"+college_id,
                type: "GET",
                dataType: "json",

              success: function(data) {
                 $('select[name="classroom_id"]').empty();
                 $.each(data, function (key, value) { 
                    $('select[name="classroom_id"]').append('<option value="' + key + '">' + value + '</option>') 

                 });
        
              },
            });

        }else {
            console.log('AJAX load did not work');
            }
    });


    $('select[name="college_id"]').on('change', function () {

        var college_id = $(this).val();

        if(college_id){
            $.ajax({
                url: "{{ URL::to('getsection') }}/"+college_id,
                type: "GET",
                dataType: "json",

              success: function(data) {
                 $('select[name="section_id"]').empty();
                 $('select[name="section_id"]').append('<option selected disabled > Choose Section...</option>');      
                 $.each(data, function (key, value) { 
                    $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>')   
                 });
              },
            });

        }else{
            console.log('AJAX load did not work');

        }

    });  
    $('select[name="college_id_new"]').on('change', function () {
      
        var college_id = $(this).val();
        if(college_id){
            $.ajax({
                url: "{{ URL::to('classes') }}/"+college_id,
                type: "GET",
                dataType: "json",

              success: function(data) {
                 $('select[name="classroom_id_new"]').empty();
                 $.each(data, function (key, value) { 
                    $('select[name="classroom_id_new"]').append('<option value="' + key + '">' + value + '</option>') 

                 });
        
              },
            });

        }else {
            console.log('AJAX load did not work');
            }
    });


    $('select[name="college_id_new"]').on('change', function () {

        var college_id = $(this).val();

        if(college_id){
            $.ajax({
                url: "{{ URL::to('getsection') }}/"+college_id,
                type: "GET",
                dataType: "json",

              success: function(data) {
                 $('select[name="section_id_new"]').empty();
                 $('select[name="section_id_new"]').append('<option selected disabled > Choose Section...</option>');      
                 $.each(data, function (key, value) { 
                    $('select[name="section_id_new"]').append('<option value="' + key + '">' + value + '</option>')   
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
