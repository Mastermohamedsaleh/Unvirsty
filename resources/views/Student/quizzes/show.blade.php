@include('header')
  <div class="wrapper">
  @include('sidebar_student')

      <div class="main">
@include('nav')

@livewireStyles

@livewire('show-question', ['quizze_id' => $quizze_id, 'student_id' => $student_id])


@livewireScripts 


@include('footer')
