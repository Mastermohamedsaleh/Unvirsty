@include('header')
  <div class="wrapper">
    @include('sidebar_doctor')

      <div class="main">
 @include('nav')


 
 






 





 <div class="container mt-5">


<div class="card">


<div class="card-body">



<div class="table-responsive">
                        <table  class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>email</th>
                                <th>College</th>
                                <th>Classroom</th>
                                <th>Section</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <?php $i= 1  ?>
                                    @forelse($students as  $student)
                                <tr>
                                    <td> {{$i++}} </td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->college->name }}</td>
                                    <td>{{ $student->classroom->name }}</td>
                                    <td>{{  (  $student->section_id  ?  $student->section->name   : 'No Section' ) }}</td>
                                    <td>
                                        
                              <a href="{{url('viewastudentssignment', [ $student->id , $course->id ] )}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                           
                                    </td>
                                 @endforeach
                                        </div>
                                 
                                    </td>
                                </tr>
                           
                      </table>
                 






</div>














</div>









 </div>







 @include('footer')