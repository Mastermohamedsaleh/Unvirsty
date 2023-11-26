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


 <div class="container mt-3">




 <div class="card">

 <div class="card-body">
       



 <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#student">
 Add New student
</button><br><br>
      @include('Admin.students.add')
 

 <div class="table-responsive">
                        <table id="datatable"  class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>email</th>
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
                                    <td>
                              

<button type="button" class="btn btn-sm btn-danger inline-block" data-bs-toggle="modal" data-bs-target="#deletestudent{{$student->id}}">
<i class="fas fa-trash"></i>
</button>
                

 <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editstudent{{$student->id}}">
 <i class="fas fa-edit"></i>
</button><br><br>

@include('Admin.students.edit')

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
