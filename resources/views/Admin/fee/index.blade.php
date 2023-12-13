@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')








 <h4 class="text-primary text-center">All Fee</h4>




 
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


<div class="container mt-5">


     <a  href="{{route('fee.create')}}" class="btn btn-primary" >Add Fee</a>


<div class="table-responsive">
                        <table  id="datatable" class="table table-hover key-buttons text-md-nowrap">
                          
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>amount</th>
                                <th>College</th>
                                <th>Classroom</th>
                                <th>Section</th>
                                <th>Academic Year</th>
                                <th>Process</th>
                            </tr>
                            
                            @foreach($fee as $f)
                           <tr>
                           <td>{{$loop->index+1}}</td>
                           <td>{{$f->title}}</td>
                            <td>{{$f->amount}}</td>
                            <td>{{$f->college->name}}</td>
                            <td>{{$f->classroom->name}}</td>
                            <td>                    
                                  <?php
                                 if($f->section_id){
                                  echo $f->section->name;
                                 }else{
                                echo 'no Section';
                                 }
                                ?>
                            </td>
                            <td>{{$f->academic_year}}</td>
                          


                            <td>
                               <a href="{{route('fee.edit',$f->id)}}"class="mb-2 btn btn-outline-success btn-sm"> <i class="fas fa-edit"></i></a>



<button type="button" class="mb-2 btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Delete_Fee{{ $f->id }}" >  <i class="fas fa-trash"></i></button>


@include('Admin.fee.delete')
                            </td>


                           </tr>

                         @endforeach


</table>
</div>













<!-- end container -->
</div>






 @include('footer')
