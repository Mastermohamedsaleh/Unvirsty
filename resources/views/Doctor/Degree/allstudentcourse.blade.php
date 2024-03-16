@include('header')
  <div class="wrapper">
    @include('sidebar_doctor')

      <div class="main">
 @include('nav')


 
 <div class="container">



   <div class="card">

   <div class="card-body">

      
   <div class="row mt-2">


<div class="col">

<form  action="{{route('show_student_to_degree')}}" method="get">
<label>Course: <span class="text-danger">*</span> </label>
<select name="course_id" >
    <option value="">Choose Course ...</option>
 @foreach($courses as $course)
 <option value="{{$course->id}}">{{$course->name}}</option>
@endforeach
</select>

<button type="submit">Search</button>

</form>


</div>

</div>
    

   </div>

   </div>






 </div>
 



 @if( isset( $students ))

 <div class="container">


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
                                        
                              <a href="{{url('viewallquiz', [ $student->id  , $course->id ] )}}" class="btn btn-primary">view</a>

                                    </td>

                                        </div>

                                    </td>
                                </tr>

                      </table>
                      
                      @empty

<h1 class="text-center text-danger">No Student</h1>










@endforelse



@endif





</div>














</div>









 </div>







 @include('footer')