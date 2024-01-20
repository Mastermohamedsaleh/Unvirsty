@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
@include('nav')



<div class="container mt-5">

<form action="{{route('questions.store')}}" method="post" autocomplete="off">




@csrf


<div class="row">



<legend><span class="number">1</span> Write New Question</legend>


<div class="col-12">
<label for="title">Name Question </label>
    <input type="text" name="title" id="input-name" autofocus>
</div>


<div class="col-12">
<label for="title">Answers</label>
                                        <textarea name="answers"  id="exampleFormControlTextarea1"
                                                  rows="4"></textarea>
</div>




<div class="col-6">
      <label for="title"> Right Answer</label>
      <input type="text" name="right_answer" id="input-name"
            autofocus>
</div>


<div class="col-6">


<label for="Grade_id">Name Quizze  : <span
                                                    class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="quizze_id">
                                                <option selected disabled> Chooces Quizze...</option>
                                                @foreach($quizzes as $quizze)
                                                    <option value="{{ $quizze->id }}">{{ $quizze->name }}</option>
                                                @endforeach
     </select>



</div>








<div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">الدرجة : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="score">
                                                <option selected disabled> حدد الدرجة...</option>
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                            </select>
                                        </div>
                                    </div>









</div>



<button type="submit" class="btn btn-success">Save</button>



</form>


</div>



@include('footer')
