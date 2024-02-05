@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')




<div class="container">

<h3 class="text-center text-primary mt-3">My Course</h3>


<table   class="table table-hover table-bordered">


<thead>
<tr>

  <td>#</td>
  <td>Course</td>
  <td>Doctor</td>
  <td>View</td>
  
</tr>
</thead>

<tbody>

<?php  $i = 0 ; ?>
@foreach($courses as $course)
<tr>
    <td>{{++$i}}</td>
    <td>{{$course->name}}</td>
    <td>{{$course->doctor->name}}</td>
    <td>
        <a href="{{route('viewcourse',$course->id)}}" class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></a>

        <a href="#" title="تحميل الكتاب" class="btn btn-outline-warning" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
    </td>
</tr>

@endforeach

</tbody>



</table>

</div>




@include('footer')
