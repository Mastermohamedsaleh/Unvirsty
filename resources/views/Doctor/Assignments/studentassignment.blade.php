@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')




@if(Session::has('message'))
<p class="alert alert-info" style="width:300px; margin:0px auto">{{ Session::get('message') }}</p>
@endif

@if ($errors->any())
                    <div class="alert alert-danger" style="width:300px; margin:0px auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif





<div class="container mt-2">


<h5 class="mb-3">{{$viewassignment->name}}</h5>

<div class="row">


<div class="col">
 
<a href="{{url('show_pdf_student',[$viewassignment->id , $viewassignment->course_id ])}}">
    <img src="{{URL::asset('assets/images/unnamed.png')}}" alt="" width="20px"> {{$viewassignment->assignment->name}}
</a>

</div>

<div class="col">
    {{$viewassignment->assignment->start_time}}
</div>

</div>

<h5 class="mt-3">Submission Status</h5>

<table class="table table-striped">
    <tr>
        <td>Send Time</td><td style=" background-color: #e9ecef;">{{  date('l' , strtotime($viewassignment->created_at ) )}} {{ date('h:i A' , strtotime( $viewassignment->start_time ) )}}</td>
    </tr>
    <tr>
        <td>Update Time</td><td style=" background-color: #e9ecef;">{{  date('l' , strtotime($viewassignment->udpated_at ) )}} {{  date('h:i A' , strtotime($viewassignment->end_time ) )}}</td>
    </tr>

    {{ $score = \App\Models\DegreeAssignment::where('assignment_id',$viewassignment->assignment_id)->pluck('score')->first()}}
    <tr>
        <td>Degree</td><td>{{  ($score ? $score : 'No Socre') }}</td>
    </tr>
   
    <form action="{{url('degreeassignment')}}" method="post" >
        @csrf
    <tr>
        <td>Add Degree</td><td><input type="number"   name="score" id=""></td>
    </tr>
    <input type="hidden" value="{{$viewassignment->assignment_id}}" name="assignment_id">
    <input type="hidden" value="{{$viewassignment->student_id}}" name="student_id">
    <input type="hidden" value="{{$viewassignment->course_id}}" name="course_id">
    <tr>
        <td><input type="submit" name="insert_button" value="Submit" /></td><td><input type="submit" name="update_button" value="Update" /></td>
    </tr>
    </form>



</table>

<!-- end container -->
</div>










@include('footer')