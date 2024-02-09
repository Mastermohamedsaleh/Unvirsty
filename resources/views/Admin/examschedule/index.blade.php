
@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')


<div class="container mt-3">



<a href="{{route('examschedule.create')}}" class="btn btn-primary mb-3">Add Schedule</a>

<div class="row">

<?php $i = 1 ;  ?>
@foreach($examschedule as $schedule)
    <div class="col-lg-4">
        <div class="card card-margin">

            <div class="card-header no-border">
                <h5 class="card-title">Schedule</h5>
            </div>

            <div class="card-body pt-0">

                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">0{{$i++}}</span>
                            <span class="widget-49-date-month">apr</span>
                        </div>

                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">{{$schedule->college->name}}</span>
                            <span class="widget-49-meeting-time">{{$schedule->classroom->name}}</span>
                            <span class="widget-49-meeting-time">{{   ( $schedule->section_id   ? $schedule->section->name  :  'no section')   }}</span>
                            <span class="widget-49-meeting-time">{{$schedule->created_at}}</span>
                        </div>
                    </div>
                

                    <div class="widget-49-meeting-action">
                        <a href="{{url('schedule',[$schedule->college_id,$schedule->classroom_id ] )}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endforeach


</div>
</div>








 @include('footer')



