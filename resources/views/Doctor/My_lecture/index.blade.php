@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')








<div class="container mt-3">

<a href="{{route('lecture.create')}}" class="btn btn-primary">Add</a>

@foreach($lectures as $lecture)





<div class="alert alert-success text-light" role="alert" style="padding:5px; background: #1f60dd ;   border-radius: 10px;">
    

<div class="row">



<div class="col">

<h4 class="text-light">{{$lecture->title}}</h4>
      <p>{{$lecture->course->name}}</p>

</div>


<div class="col">
<h4 class="text-light">{{$lecture->classroom->name}}</h4>
<p>{{$lecture->college->name}}</p>


</div>


<div class="col">
<label for="">Action</label>
<a href="{{route('lecture.show',$lecture->id)}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
<a href="{{route('lecture.edit',$lecture->id)}}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>





<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletelecture{{$lecture->id}}">
<i class="fa-solid fa-trash"></i>
</button><br><br>


@include('Doctor.My_lecture.delete')

</div>






</div>





       
</div>


@endforeach

</div>


@include('footer')