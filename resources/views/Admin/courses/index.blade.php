@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')






 <div class="container mt-5">




<a href="{{route('course.create')}}" class="btn btn-primary">Add Course</a>


<h4 class="text-primary text-center">All Course</h4>






 
@if ($errors->any())
                    <div class="alert alert-danger" style="width:500px;   margin: 0 auto ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info" style="width:500px;   margin: 0 auto ">{{ Session::get('message') }}</p>
@endif




 <div class="card">



 <div class="carrd-body">



 <table id="datatable" class="table table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">



                                           <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Classroom</th>
                                            <th>Section</th>
                                            <th>Doctor</th>
                                            <th>Proccess</th>
                                           </tr>
                                   @foreach($courses as $course)
                                           <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->college->name}}</td>
                                        <td>{{$course->classroom->name}}</td>
                                        <td> <?php
                                          if($course->section_id){
                                           echo   $course->section->name;
                                          }else{
                                             echo    'no Section';
                                          }
                                         ?>
                                            </td>
                                        <td>{{$course->doctor->name}}</td>
                                        <td>
<button type="button" class="btn btn-outline-danger btn-sm inline-block" data-bs-toggle="modal" data-bs-target="#deletescourse{{$course->id}}">
<i class="fas fa-trash"></i>
</button>
                
@include('Admin.courses.delete')

 <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editcourse{{$course->id}}">
 <i class="fas fa-edit"></i>
</button><br><br>
                                        </td>
                                           </tr>


                                   @endforeach


    </table>                     



 <!-- end card body -->
 </div>





 <!-- end Card -->
 </div>









 <!-- Container -->
 </div>














 @include('footer')