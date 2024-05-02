@include('header')
  <div class="wrapper">
    @include('sidebar_doctor')

      <div class="main">
 @include('nav')


  
  
  <div class="container">


  @if ($errors->any())
                    <div class="alert alert-danger" style="width:300px; margin:0px auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

     <div class="card">

       <div class="card-body">



<form action="{{url('attendance_report')}}" method="post">
    @csrf
         <div class="row">
 
         <div class="col">
         <label> Course : </label>
         <select name="course_id" id="">
         <option  > Choose Course...</option>
       @foreach($courses_doctors as $course)
        <option value="{{$course->id}}">{{$course->name}}</option>
        @endforeach
     </select>
         </div>
     
          <div class="col">
         <label> Student : </label>
                <select name="student_id"  >

                </select>
          </div>
          

    <div class="col">  
    <label>  Date From : </label>
    <input type="date"  name="from">  
    </div>

    <div class="col">  
    <label>  Date To : </label>
        <input type="date" name="to">
    </div>









 



<!-- end row -->
         </div>

        
         <button class="btn btn-sm bg-color2">Search</button>

</form>








@isset($Students)
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                           style="text-align: center">
                        <thead>
                        <tr>
                            <th class="alert-success">#</th>
                            <th class="alert-success">{{trans('Students_trans.name')}}</th>
                            <th class="alert-success">{{trans('Students_trans.Grade')}}</th>
                            <th class="alert-success">{{trans('Students_trans.section')}}</th>
                            <th class="alert-success">التاريخ</th>
                            <th class="alert-warning">الحالة</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Students as $student)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{$student->students->name}}</td>
                                <td>{{$student->grade->Name}}</td>
                                <td>{{$student->section->Name_Section}}</td>
                                <td>{{$student->attendence_date}}</td>
                                <td>

                                    @if($student->attendence_status == 0)
                                        <span class="btn-danger">غياب</span>
                                    @else
                                        <span class="btn-success">حضور</span>
                                    @endif
                                </td>
                            </tr>
                        @include('pages.Students.Delete')
                        @endforeach
                    </table>
                </div>
                @endisset










       </div>




     </div>
  




  </div>
 

  
<script>


$(document).ready(function () {

$('select[name="course_id"]').on('change', function () {
  
    var course_id = $(this).val();
    if(course_id){
        $.ajax({
            url: "{{ URL::to('report_student_search') }}/"+course_id,
            type: "GET",
            dataType: "json",

          success: function(data) {
             $('select[name="student_id"]').empty();
             $('select[name="student_id"]').append('<option value="0" selected  > All...</option>');
             $.each(data, function (key, value) { 
                $('select[name="student_id"]').append('<option value="' + key + '">' + value + '</option>')   
             });
          },
        });

    }else {
        console.log('AJAX load did not work');
        }
});
});



</script>





 @include('footer')