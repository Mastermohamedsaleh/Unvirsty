@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')




@if(Session::has('message'))
<p class="alert alert-danger" style="width:300px; margin:0px auto">{{ Session::get('message') }}</p>
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


<h5 class="mb-3">{{$assignment->name}}</h5>

<div class="row">


<div class="col">
 
<a href="{{url('show_pdf',$assignment->id)}}">
    <img src="{{URL::asset('assets/images/unnamed.png')}}" alt="" width="20px"> {{$assignment->name}}
</a>

</div>

<div class="col">
    {{$assignment->start_time}}
</div>

</div>

<h5 class="mt-3">Submission Status</h5>

<?php   $mytime = \Carbon\Carbon::now('Africa/Cairo');
        $mytime = $mytime->toDateTimeString();
        $end_time = $assignment->end_time;
        $start_time = $assignment->start_time;
 ?>

<table class="table table-striped">
    <tr>
        <td>Start Time</td><td style=" background-color: #e9ecef;">{{  date('l' , strtotime($assignment->start_time ) )}} {{ date('h:i A' , strtotime( $assignment->start_time ) )}}</td>
    </tr>
    <tr>
        <td>End Time</td><td style=" background-color: #e9ecef;">{{  date('l' , strtotime($assignment->end_time ) )}} {{  date('h:i A' , strtotime($assignment->end_time ) )}}</td>
    </tr>
    {{ $score = \App\Models\DegreeAssignment::where('assignment_id',$assignment->id)->where('student_id',auth()->user()->id)->pluck('score')->first()}}
    <tr>
        <td>Degree</td><td>{{  ($score ? $score : 'No Socre') }}</td>
    </tr>

    @if(  $mytime <= $start_time  )                 
            <tr>  <td>No Start Unit</td> </tr>
    @else 

    @if($mytime <= $end_time)
    <form action="{{url('uploadassignment',$assignment->course_id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <tr>
        <td>Choose File</td><td><input type="file"  accept="application/pdf" name="file_name" id=""></td>
    </tr>
    <input type="hidden" value="{{$assignment->id}}" name="id">
    <tr>
        <td><input type="submit" name="insert_button" value="Submit" /></td><td><input type="submit" name="update_button" value="Update" /></td>
    </tr>
    </form>
    @else 
       <tr><td>Assignment End</td></tr>
    @endif
    @endif

</table>

<!-- end container -->
</div>










@include('footer')