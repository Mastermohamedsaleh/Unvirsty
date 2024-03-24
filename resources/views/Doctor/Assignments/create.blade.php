@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')



<div class="container mt-5">

<form action="{{route('assignments.store')}}" method="post" autocomplete="off"  enctype="multipart/form-data">

@csrf



<div class="card">

<div class="card-body">



<div class="row">


<legend><span class="number">1</span> Write basic info</legend>

<div class="col-6">

<label > Name Assignment : <span class="text-danger">*</span></label>

<input type="text" name="name"  value="{{old('name')}}">


@error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror
</div>

<div class="col">
                                        <div class="form-group">
                                            <label > course : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="course_id">
                                                <option selected disabled>Choose course  ...</option>
                                                @foreach($courses as $course)
                                                    <option  value="{{ $course->id }}">{{ $course->name }}</option>
                                                @endforeach
                                            </select>
                </div>
                @error('course_id')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror
        </div>
   



        <div class="col-6">
        <label > Start_time : <span class="text-danger">*</span></label>
         <input type="datetime-local" name="start_time" value="{{old('start_time')}}">
         @error('start_time')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror
        </div>

        <div class="col-6">
        <label > End_time : <span class="text-danger">*</span></label>
         <input type="datetime-local" name="end_time" value="{{old('end_time')}}">
         @error('end_time') 
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror
        </div>
 


<div class="col-12 mb-2">
<label > File name : <span class="text-danger">*</span></label>
<input type="file" accept="application/pdf" name="file_name" >
@error('file_name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
         @enderror
</div>
     


</div>


<button type="submit" class="btn btn-primary">Save</button>
</div>
</div>


</form>








</div>








@include('footer')