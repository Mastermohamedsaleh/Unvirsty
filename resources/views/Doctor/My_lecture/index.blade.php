@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')







<div class="container mt-3">




<div class="row">


<div class="col-3">
<a href="{{route('lecture.create')}}" class="mb-2 btn btn-primary btn-sm">Add Lecture</a>
</div>


<div class="col-lg-5 col-md-5 col-sm-12">

<form action="{{route('lecture.index')}}" method="get">
<div class="search-container">  
<input type="text" name="search" placeholder = "Name Lecture">
  <button class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
</div>
</form>
</div>







<div class="container">







@forelse($lectures as $lecture)
<div  class="alert alert text-light" role="alert" style="padding:5px; background: #E6EDFB ;   border-radius: 10px;">


<div class="d-flex ">
                                
@if($lecture->course->image_name == "course_default.jpg")
<img src="{{URL::asset('assets/images/course_default.jpg')}}" alt="" style="width:150px">
@else
<img src="{{URL::asset('courses/'.$lecture->course->image_name)}}" alt="" style="width:150px">
@endif     
<ul>
                            <li><a href="{{route('lecture.show',$lecture->id)}}"><h4 >{{$lecture->title}}</h4></a> </li>
                            <li> <span class=" text-muted">{{$lecture->course->name}}</span></li>
                            <li> <span class=" text-muted">{{$lecture->college->name}}</span></li>
                            <li> <span class=" text-muted">{{$lecture->classroom->name}}</span></li>
                            <li> <span class=" text-muted">{{  (  $lecture->section_id ? $lecture->section->name : '' ) }}</span></li>
                        </ul>
                          
                      </div>
          
                      <div class="mt-2">

                    <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-share"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

    <li><button type="button" class="btn btn-danger btn-sm dropdown-item" data-bs-toggle="modal" data-bs-target="#deletelecture{{$lecture->id}}">
<i class="fa-solid fa-trash"></i>Delete
</button></li>
     <li><a href="{{route('lecture.edit',$lecture->id)}}" class="btn btn-success btn-sm dropdown-item"><i class="fa-solid fa-pen-to-square"></i>Edit</a></li>
      <li><a href="{{route('lecture.show',$lecture->id)}}" class="btn btn-primary btn-sm dropdown-item"><i class="fa-solid fa-eye"></i>Show</a></li>
    </ul>
  </div>
</div>





</div>

@empty

<div class="alert alert text-light" role="alert" style="padding:5px; background: #E6EDFB ;   border-radius: 10px;">
  <h4 class="text-center">No Leacture</h4> 
</div>
      
        @endforelse
 {{ $lectures->links() }}










</div>












</div>







@include('footer')
   