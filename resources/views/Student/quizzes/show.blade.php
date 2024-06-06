@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')



@livewireStyles
<h3 class="text-success mt-3 fw-bold text-center">Number of questions => [{{$countquestion}}] </h3> 

@livewire('show-question', ['quizze_id' => $quizze_id, 'student_id' => $student_id])


@livewireScripts 




@include('footer')
