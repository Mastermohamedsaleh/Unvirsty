@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')




<h3 class="text-primary text-center">students</h3>



@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif








 <div class="container mt-3">




 <div class="card">

 <div class="card-body">
       
 
 <a href="{{route('students.create')}}" class="mb-2 btn btn-outline-primary btn-sm">Add New Student</a>
 

 <div class="table-responsive">
                        <table id="datatable"  class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>email</th>
                                <th>College</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <?php $i= 1  ?>
                            @foreach($students as  $student)
                                <tr>
                                    <td> {{$i++}} </td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->college->name }}</td>
                                    <td>
                              




                                    <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li>  <a href="{{route('fee_invoices.show',$student->id)}}" class="mb-2 btn btn-outline-info btn-sm dropdown-item" title="Add Fee">  <i class="fa-solid fa-sack-dollar"></i> </a></li>
    <li><a href="{{route('receipt.show',$student->id)}}" class="mb-2 btn btn-outline-info btn-sm dropdown-item" title="Receipt">  <i class="fa-solid fa-hand-holding-dollar"></i> </a></li>
    <li><a href="{{route('students.edit',$student->id)}}" class="mb-2 btn btn-outline-warning btn-sm dropdown-item" title="Data Student"> <i class="fa-solid fa-database"></i> </a></li>
    <li><a href="{{route('students.edit',$student->id)}}" class="mb-2 btn btn-outline-success btn-sm dropdown-item" title="Edit Student"> <i class="fas fa-edit"></i></a>
</li>
  </ul>
</div> 


        
<button type="button" class="mb-2 btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletestudent{{$student->id}}" title="Delete Student">
<i class="fas fa-trash"></i>
</button>

@include('Admin.students.delete')


                                    </td>

                                        </div>

                                    </td>
                                </tr>
@endforeach

 </div>




 </div>









 <!-- end container -->
 </div>
    

 @include('footer')
