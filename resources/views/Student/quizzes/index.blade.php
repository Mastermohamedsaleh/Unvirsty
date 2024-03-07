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
                      <td>{{$quizze->Course->name}}</td>
                      <td>{{$quizze->doctor->name}}</td>


                      <td>




                      @php $student_exams = route('student_quiz.show',$quizze->id)  @endphp

                     <?php  $question = App\Models\Question::where('quizze_id',$quizze->id)->first(); ?> 
                      @if($question == null)
                            No Quetions Until Now
                      @else 
@if($quizze->degree->count() > 0 && $quizze->id == $quizze->degree[0]->quizze_id)
                {{$quizze->degree[0]->score}}
                           @else
                               <a href="{{route('student_quiz.show',$quizze->id)}}"
                                  class="btn btn-outline-success btn-sm" role="button"
                                  aria-pressed="true" onclick="alertAbuse()">
                                   <i class="fas fa-person-booth"></i></a>
                           @endif



                      @endif

                      



              </td>

                    </tr>
               @endforeach
               </tbody>

</table>

</div>

</div>



<script>
            function alertAbuse() {
                alert("برجاء عدم إعادة تحميل الصفحة بعد دخول الاختبار - في حال تم تنفيذ ذلك سيتم الغاء الاختبار بشكل اوتوماتيك ");
            }
        </script>



@include('footer')