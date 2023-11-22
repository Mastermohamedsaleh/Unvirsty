@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')




<h3 class="text-primary text-center">Classroom</h3>




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
       



 <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#classroom">
 Add New classroom
</button><br><br>
      @include('Admin.classrooms.add')
 

 <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>College</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <?php $i= 1  ?>
                            @foreach($classrooms as  $classroom)
                                <tr>
                                    <td> {{$i++}} </td>
                                    <td>{{$classroom->name }}</td>
                                    <td>{{$classroom->college->name}}</td>
                                    <td>
                              

<button type="button" class="btn btn-sm btn-danger inline-block" data-bs-toggle="modal" data-bs-target="#deleteclassroom{{$classroom->id}}">
<i class="fas fa-trash"></i>
</button>
                

 <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editclassroom{{$classroom->id}}">
 <i class="fas fa-edit"></i>
</button><br><br>
@include('Admin.classrooms.edit')
@include('Admin.classrooms.delete')
                          </td>
                        </div>
                     </td>
                </tr>
@endforeach

 </div>





 </div>


 <!-- end container -->
 </div>
    


   