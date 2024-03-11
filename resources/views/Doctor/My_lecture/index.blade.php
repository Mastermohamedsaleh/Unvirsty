@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')







<div class="container mt-3">





<a href="{{route('lecture.create')}}" class="mb-2 btn btn-primary btn-sm">Add Lecture</a>

@foreach($lectures as $lecture)







<div class="row">
<div class="alert alert text-light" role="alert" style="padding:5px; background: #E6EDFB ;   border-radius: 10px;">


        <div class="col-lg-10 col-md-9 col-sm-6 py-1">
                    <div class="d-flex ">
                
                    
@if($lecture->course->image_name == "course_default.jpg")
<img src="{{URL::asset('assets/images/course_default.jpg')}}" alt="" style="width:150px">
@else
<img src="{{URL::asset('courses/'.$lecture->course->image_name)}}" alt="" style="width:150px">
@endif      
                        <ul>
                            <li> <h4 class=" text-muted">{{$lecture->title}}</h4></li>
                            <li> <span class=" text-muted">{{$lecture->course->name}}</span></li>
                            <li> <span class=" text-muted">{{$lecture->college->name}}</span></li>
                            <li> <span class=" text-muted">{{$lecture->classroom->name}}</span></li>
                            <li> <span class=" text-muted">{{  (  $lecture->section_id ? $lecture->section->name : '' ) }}</span></li>
                        </ul>
                        
                    </div>
 
                    <div class="mt-2">
                    <a href="{{route('lecture.show',$lecture->id)}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
<a href="{{route('lecture.edit',$lecture->id)}}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>





<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletelecture{{$lecture->id}}">
<i class="fa-solid fa-trash"></i>
</button><br><br>
</div>

@include('Doctor.My_lecture.delete')




 
            <!-- end col -->
        </div>

        @endforeach

</div>


</div>



</div>







@include('footer')
   