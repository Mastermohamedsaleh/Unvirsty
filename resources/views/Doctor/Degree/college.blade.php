@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')






<div class="container">






<div class="container mt-5">
<div class="row">

<?php $i = 1 ;  ?>
@foreach($colleges as $college)
    <div class="col-lg-4">
        <div class="card card-margin">

            <div class="card-header no-border">
                <h5 class="card-title">College</h5>
            </div>

            <div class="card-body pt-0">

                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">0{{$i++}}</span>
                        </div>

                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">{{$college->name}}</span>
                            <span class="widget-49-pro-title">{{$college->college->name}}</span>
                            <span class="widget-49-meeting-time">{{$college->classroom->name}}</span>
                            <span class="widget-49-meeting-time">{{ ( $college->section  ?  $college->classroom->name : "")}}</span>
                        </div>
                    </div>
                
 
                     
                    @if($college->section_id == NULL)
                           <?php $section_id = NULL; ?> 
                          <div class="widget-49-meeting-action">
                        <a href="{{route('allstudent_to_degree',['param1'=>$college->college_id,'param2'=>$college->classroom_id,'param3'=>$college->id,'param4'=>$section_id])}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                    @else
                    <?php $section_id = $college->section_id; ?> 
                        <div class="widget-49-meeting-action">
                        <a href="{{route('allstudent_to_degree',['param1'=>$college->college_id,'param2'=>$college->classroom_id,'param3'=>$college->id,'param4'=>$section_id])}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                    @endif


                  



            
                </div>
            </div>
        </div>
    </div>


    @endforeach


</div>
</div>





</div>









@include('footer')
