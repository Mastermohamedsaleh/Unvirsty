@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
     @include('nav')





     <div class="container">
        
     
     
 <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#section">
 Add New College
</button><br><br>
      @include('Admin.sections.add')


     </div>



     <div class="accordion" id="accordionExample">





      @foreach($colleges as $college )
     <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$college->name}}" aria-expanded="false" aria-controls="collapseTwo">
            {{$college->name}}
      </button>
    </h2>
    <div id="{{$college->name}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
@endforeach






     </div>








@include('footer')