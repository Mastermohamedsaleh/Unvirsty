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
                              


               

<a href="{{route('students.edit',$student->id)}}" class="mb-2 btn btn-outline-success btn-sm"> <i class="fas fa-edit"></i></a>




<button type="button" class="mb-2 btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletestudent{{$student->id}}">
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
