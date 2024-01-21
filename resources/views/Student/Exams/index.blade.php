@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')






<h3 class="text-primary text-center">Quizze</h3>



@if ($errors->any())
                    <div class="alert alert-danger" style="width:300px; margin:0px auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info" style="width:300px; margin:0px auto">{{ Session::get('message') }}</p>
@endif














<div class="container mt-3">






















<div class="table-responsive">
                        <table id="datatable"  class="table table-hover table-bordered">


                        <thead>
                        <tr>
                                <th>#</th>
                                <th>Name Quizze</th>
                                <th>Name Subject</th>
                                <th>Name Doctor</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i= 1  ?>
             @foreach($quizzes as $quizze)
                            <tr>
                            <td> {{$i++}} </td>
                      <td>{{$quizze->name}}</td>
                      <td>{{$quizze->subject->name}}</td>
                      <td>{{$quizze->doctor->name}}</td>


                      <td>
<a href="#" class="mb-2 btn btn-outline-success btn-sm"><i class="fa-solid fa-eye"></i></a>

                      </td>

                    </tr>
               @endforeach
               </tbody>

</table>

</div>

</div>





@include('footer')