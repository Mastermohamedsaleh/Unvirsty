
@include('header')
  <div class="wrapper">
    @include('sidebar_student')

      <div class="main">
 @include('nav')






 <div class="container">





 <div class="card">





<div class="card-body">





@if( isset( $studyschedule ))


@foreach($studyschedule as $schedule )


<div class="row">


<div class="col-4">
<h4 class="text-primary"> Academic Year : {{$schedule->year}}</h4> 
</div>

   
<div class="col-4">
<h4 class="text-primary "> Semester : {{$schedule->semester}}</h4>
</div>





<div class="col-4">
       
    <h4 class="text-primary "> College :  {{($schedule->section_id ? $schedule->section->name : "")}} /{{$schedule->classroom->name}}/{{$schedule->college->name}} </h4>
 
</div>

</div>



@endforeach

<table   class="table table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">

                                           <tr>
                                            <th>name Course</th>
                                            <th>Day</th>
                                            <th>Location</th>
                                            <th>Doctor</th>
                                            <th>Start time</th>
                                            <th>End time</th>
                                  
                                           </tr>
                                 @foreach($studyschedule as $schedule)
                                 <tr>
                                            <td>{{$schedule->course->name}}</td>
                                            <td>{{ $schedule->course_day }}</td>
                                            <td>{{$schedule->location}}</td>
                                            <td>{{$schedule->doctor->name}}</td>
                                            <td>{{ date('h:i A' , strtotime($schedule->start_time) ) }}  </td>
                                            <td>{{ date('h:i A' , strtotime($schedule->end_time) ) }}</td>
                                            
                                            
                                 @endforeach

</table>




@else



<h3 class="text-center text-primary">No Schedule</h3>






@endif













<!-- end card body -->
</div>








 <!-- end card -->
 </div>














 </div>


 @include('footer')