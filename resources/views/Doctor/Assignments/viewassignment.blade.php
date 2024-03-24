@include('header')
  <div class="wrapper">
    @include('sidebar_doctor')

      <div class="main">
 @include('nav')




 @if ($errors->any())
                    <div class="alert alert-danger" style="width:300px; margin:0px auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info" style="width:300px; margin:0px auto">{{ Session::get('message') }}</p>
@endif
 
   <div class="container">
   
           
        <table class="table">

         <th>
         
            <td>name</td>
            <td>course</td>
            <td>Pdf</td>
            <td>Degree</td>
         </th>
         <?php $i= 1  ?>
          @foreach($viewassignments as $viewassignment )
           <tr>
           <td> {{$i++}} </td>
            <td>{{$viewassignment->assignment->name}}</td>
            <td>{{$viewassignment->Course->name}}</td>
            <td> <a href="{{url('show_pdf_student', [$viewassignment->id , $viewassignment->course_id ])}}">Pdf</a> </td>
            <form action="{{url('degreeassignment')}}" method="post">
                @csrf
                <input type="hidden" name="assignment_id[]" value="{{$viewassignment->assignment_id}}">
                <input type="hidden" name="course_id" value="{{$viewassignment->course_id}}">
                <input type="hidden" name="student_id" value="{{$viewassignment->student_id}}">
     
      <td>
      @php  $degrees = \App\Models\DegreeAssignment::where('assignment_id',$viewassignment->assignment_id)->where('course_id',$viewassignment->student_id)->where('student_id',$viewassignment->student_id)->get();@endphp
      @if(isset($degrees))
            @foreach($degrees as $degree)
           <input type="number" name="score[]" class="form-control" value="{{  ( $degree->score ? $degree->score : ''  ) }}"  >
            @endforeach
      @else
            <input type="number" name="score[]" class="form-control"  >
      @endif
            </td>

         
           </tr>
          @endforeach
        </table>
        <button type="submit" name="insert_button" value="Submit" class="btn btn-primary">Submit</button>
        <button type="submit" name="update_button" value="Submit" class="btn btn-primary">Update</button>
        </form>
     
    
   </div>
  
  



 @include('footer')
