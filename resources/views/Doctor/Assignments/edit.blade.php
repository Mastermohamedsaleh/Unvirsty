@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')






@if ($errors->any())
                    <div class="alert alert-danger" style="width:300px; margin:0px auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



<div class="container mt-5">

<form action="{{route('assignments.update',$assignment->id)}}" method="post" autocomplete="off"  enctype="multipart/form-data">

@csrf
@method('PUT')


<div class="card">

<div class="card-body">



<div class="row">


<legend><span class="number">1</span> Edit basic info</legend>

<div class="col-6">

<label > Name Assignment : <span class="text-danger">*</span></label>

<input type="text" name="name" value="{{$assignment->name}}" >

</div>
<div class="col">
                                        <div class="form-group">
                                            <label > course : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="course_id">
                                                <option selected disabled>Choose course  ...</option>
                                                @foreach($courses as $course)
                                                    <option  value="{{ $course->id }}"  {{   $course->id  == $assignment->course_id ?  "selected" :  ""  }}>{{ $course->name }}</option>
                                                @endforeach
                                            </select>
                </div>
        </div>




        <div class="col-6">
        <label > Start_time : <span class="text-danger">*</span></label>
         <input type="datetime-local" name="start_time" value="{{$assignment->start_time}}">
        </div>
        <div class="col-6">
        <label > End_time : <span class="text-danger">*</span></label>
         <input type="datetime-local" name="end_time" value="{{$assignment->end_time}}">
        </div>


<div class="col-12 mb-2">
<label > File name : <span class="text-danger">*</span></label>
<input type="file" accept="application/pdf" name="file_name" >
</div>
     


</div>


<button type="submit" class="btn btn-primary">Update</button>
</div>
</div>


</form>








</div>








@include('footer')