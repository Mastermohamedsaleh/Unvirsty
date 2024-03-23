@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')










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



<table class="table table-striped">
    <tr >
        <td>Start Time</td><td style=" background-color:#e9ecef ;">{{$assignment->start_time}}</td>
    </tr>
    <tr>
        <td>End Time</td><td style=" background-color: #e9ecef;">{{$assignment->end_time}}</td>
    </tr>
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
</table>

<!-- end container -->
</div>










@include('footer')