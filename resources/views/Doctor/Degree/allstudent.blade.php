@include('header')
  <div class="wrapper">
    @include('sidebar_doctor')

      <div class="main">
 @include('nav')




<h3 class="text-primary text-center">students</h3>

 <div class="container mt-3">




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
                                    @foreach($allstudent as  $student)
                                <tr>
                                    <td> {{$i++}} </td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->college->name }}</td>
                                    <td>{{ $student->classroom->name }}</td>
                                    <td>{{  (  $student->section_id  ?  $student->section->name   : 'No Section' ) }}</td>
                                    <td>
                              




                                    <!-- Example single danger button -->



        
<button type="button" class="mb-2 btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletestudent{{$student->id}}" title="Delete Student">
<i class="fas fa-trash"></i>
</button>




<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>



                                    </td>

                                    @endforeach
                                        </div>

                                    </td>
                                </tr>

                      </table>
                      
  

 </div>



 </div>









 <!-- end container -->
 </div>
    

 @include('footer')
