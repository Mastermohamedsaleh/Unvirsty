
  
  
  
     @include('header')
  <div class="wrapper">
    @include('sidebar')



      <div class="main">
 @include('nav')

        <!-- main -->



<div class="container mt-3">

  <?php  
    $namecollege = \App\Models\College::where('id',auth()->user()->college_id)->first();     
  ?>
     <h2 class="text-primary text-center"><?php
       if($namecollege){
        echo $namecollege->name;
       }
   ?></h2>
      
       @if(auth()->user()->status == 0)

<div class="row">

        <div class="col-lg-4">
        <div class="card card-margin">

            <div class="card-header no-border">
                <h5 class="card-title">College</h5>
            </div>

            <div class="card-body pt-0">

                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">{{\App\Models\College::count()}}</span>
                         
                        </div>

                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title"></span>
                   
                        </div>
                    </div>
                

                    <div class="widget-49-meeting-action">
                        <a href="{{route('colleges.index')}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-4">
        <div class="card card-margin">

            <div class="card-header no-border">
                <h5 class="card-title">Classroom</h5>
            </div>

            <div class="card-body pt-0">

                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">{{\App\Models\Classroom::count()}}</span>
                 
                        </div>

                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title"></span>
                           
                        </div>
                    </div>
                

                    <div class="widget-49-meeting-action">
                        <a href="{{route('classrooms.index')}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-4">
        <div class="card card-margin">

            <div class="card-header no-border">
                <h5 class="card-title">Section</h5>
            </div>

            <div class="card-body pt-0">

                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">{{\App\Models\Section::count()}}</span>
    
                        </div>

                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title"></span>
               
                        </div>
                    </div>
                

                    <div class="widget-49-meeting-action">
                        <a href="{{route('sections.index')}}" class="btn btn-sm btn-flash-border-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endif

    <!-- end row -->
    </div>
<!-- end contaienr -->
    </div>


    
 @include('footer')
