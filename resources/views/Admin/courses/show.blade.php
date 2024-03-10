@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')



 <div class="container">
 

 <div class="card">

 <div class="card-body">



 <div class="row">


<div class="col-6">


<form action="{{route('course.update',$course->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Update Image</label>
    <input type="file" name="image">
    <input type="hidden" name="college_id" value="{{$course->college_id}}">
    <input type="hidden" name="classroom_id" value="{{$course->classroom_id}}">
    <input type="hidden" name="section_id" value="{{$course->section_id}}">
    <input type="hidden" name="doctor_id" value="{{$course->doctor_id}}">
    <input type="hidden" name="name" value="{{$course->name}}">
    <button>update</button>
</form>


@if($course->image_name == "course_default.jpg")
<img src="{{URL::asset('assets/images/course_default.jpg')}}" alt="" style="width:300px">
@else
<img src="{{URL::asset('courses/'.$course->image_name)}}" alt="" style="width:300px">
@endif

 
<p style="font-size:40px;">Course : {{$course->name}}</p>
<p style="font-size:20px;">College : {{$course->college->name}}</p>
<p style="font-size:20px;">Classroom : {{$course->classroom->name}}</p>
<p style="font-size:20px;">Section : {{(  $course->section_id ?  $course->section->name  : 'no Section' )}}</p>
<p style="font-size:20px;">Doctor : {{$course->doctor->name}}</p>



</div>


</div>






 </div>
 </div>


 
 

  
 </div>









 @include('footer')