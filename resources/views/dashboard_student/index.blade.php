  
 @include('header')
  <div class="wrapper">
    @include('sidebar_student')

    <div class="main">
 @include('nav')
 


 
 <meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


        <!-- main -->




        <div class="container mt-3">

        <div class="row">
     <div class="col-lg-6">
        <div class="card card-margin">

            <div class="card-header no-border">
                <h5 class="card-title">Students</h5>
            </div>

            <div class="card-body pt-0">

                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">1</span>
                         
                        </div>

                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title"></span>
                   
                        </div>
                    </div>
                

                    <div class="widget-49-meeting-action">
                        <a href="{{route('students.index')}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-6">
        <div class="card card-margin">

            <div class="card-header no-border">
                <h5 class="card-title">Doctors</h5>
            </div>

            <div class="card-body pt-0">

                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">5</span>
                 
                        </div>

                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title"></span>
                           
                        </div>
                    </div>
                

                    <div class="widget-49-meeting-action">
                        <a href="{{route('doctors.index')}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- end row -->
        </div>

<!-- end contienr -->

        </div>





       
<div class="container">
<div id="calendar"></div>

</div>
  





      </div>
    </div>


    <script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:'/full-calender-student',
        selectable:true,
        selectHelper: true,
        
    });

});
  
</script>



 @include('footer')
