@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
     @include('nav')





<div class="container mt-3">  
 <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#section">
 <i class="fa-solid fa-plus"></i>  Add New Section
</button><br><br>
  @include('Admin.sections.add')
</div>



     




     <div class="container">

 <!-- Message Success -->
@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
<!-- End Success -->

 <!-- Message Error -->
@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
@endif
 <!-- End Message Error -->




     <div class="row mt-3">
     @foreach($colleges as $college )






     <div class="col-sm-12  mt-3">





     <div class="card" >
  <div class="card-header">
   {{$college->name}}
  </div>
  <ul class="list-group list-group-flush">
   <a href="{{route('sections.show',$college->id)}}"><li class="list-group-item text-primary">View Section {{$college->name}}</li></a> 
  
  </ul>
</div> 



      <!-- end col one -->
     </div>

@endforeach
<!-- end Row -->
</div>

<!-- end container -->
</div>



 








@include('footer')