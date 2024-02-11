
@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')


<div class="container mt-3">



<a href="{{route('examschedule.create')}}" class="btn btn-primary mb-3">Add Schedule</a>







<div class="card">


<div class="card-body">




<form action="{{route('examschedule.show','test')}}" method="get">

<div class="row">


<div class="col-3">
   

<label>Collge: <span class="text-danger">*</span> </label>

<select name="college_id" >
<option value="" >Choose College</option>
@foreach($colleges as $college)
<option value="{{$college->id}}">{{$college->name}}</option>
@endforeach
</select>

</div>


<div class="col-3">

<label>Classroom: <span class="text-danger">*</span> </label>
<select name="classroom_id" >
 <option value="" disabled>Choose Classroom</option>
       
 </select>

</div>


<div class="col-3">
<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id" >
        <option value="" disabled>Choose Classroom</option>

 </select>

</div>




    <button type="submit" class="btn btn-primary">Search</button>






<!-- end Row -->
</div>


</form>





<!-- End Card Body -->
</div>



<!-- end Card -->
</div>





<!-- Card Show Schedule -->



<div class="card mt-3">




<div class="card-body">





@if( isset( $examschedule ))






<table   class="table table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">




                                           <tr>
                                            <th>name Course</th>
                                            <th>Day</th>
                                            <th>Exam Date</th>
                                            <th>Start time</th>
                                            <th>End time</th>
                                            <th>Action</th>
                                           </tr>
                                 @foreach($examschedule as $schedule)
                                           <tr>
                                            <td>{{$schedule->course->name}}</td>
                                            <td>{{ date('l' , strtotime($schedule->exam_date) ) }}</td>
                                            <td>{{$schedule->exam_date}}</td>
                                            <td>{{ date('h:i A' , strtotime($schedule->start_time) ) }}  </td>
                                            <td>{{ date('h:i A' , strtotime($schedule->end_time) ) }}</td>
                                            <td>




<button type="button" class="mb-2 btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#editschedule{{$schedule->id}}">
<i class="fas fa-edit"></i>
</button>


<button type="button" class="mb-2 btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteschedule{{$schedule->id}}">
<i class="fas fa-trash"></i>
</button>

@include('Admin.examschedule.edit')
@include('Admin.examschedule.delete')


                                            </td>
                                           </tr>
                                 @endforeach

</table>











@endif



<!-- end Card Body -->
</div>





<!-- end Card -->
</div>
















</div>








 @include('footer')



