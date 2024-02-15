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
                        <table id="datatable"  class="table table-hover table-bordered">
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



        
<button type="button" class="mb-2 btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletestudent{{$student->id}}" title="Delete Student">
<i class="fas fa-trash"></i>
</button>




<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="{{route('fee_invoices.show',$student->id)}}"> <i class="fa-solid fa-sack-dollar"></i> Add Fee</a></li>
    <li><a class="dropdown-item" href="{{route('receipt.show',$student->id)}}" > <i class="fa-solid fa-hand-holding-dollar"></i> Receipt</a></li>
    <li><a class="dropdown-item" href="{{route('students.edit',$student->id)}}"><i class="fa fa-edit"></i> Edit Student</a></li>
  </ul>
</div>



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
