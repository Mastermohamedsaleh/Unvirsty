@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')




<div class="container">

<h3 class="text-center text-primary mt-3">My Course</h3>


<table id="datatable"  class="table table-hover table-bordered">


<thead>
<tr>

  <td>#</td>
  <td>Title</td>
  <td>Course</td>
  <td>Doctor</td>
  <td>View</td>
  
</tr>
</thead>

<tbody>

<?php  $i = 0 ; ?>
@foreach($lectures as $lecture)
<tr>
    <td>{{++$i}}</td>
    <td>{{$lecture->title}}</td>
    <td>{{$lecture->course->name}}</td>
    <td>{{$lecture->doctor->name}}</td>
    <td>
        <a href="{{route('viewlecture',$lecture->id)}}" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></a>
    </td>
</tr>

@endforeach

</tbody>



</table>

</div>




@include('footer')
