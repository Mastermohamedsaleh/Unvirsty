  
      <aside id="sidebar" class="js-sidebar"><!-- side bar content-->
        <div class="h-100">
            <div class="sidebar-logo">
            <a class="navbar-brand ms-4" href="#"
          ><img
            src="{{ URL::asset('Assets/images/logo2.png') }}" 
            alt="Smart Academy logo"
            class="w-75 h-75"
        /></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Doctor elements
                </li>


                <li class="sidebar-item">
                    <a href="{{url('dashboard/doctor')}}" class="sidebar-link"><i class="fa-solid fa-list"></i> Dashboard</a>
                </li>


                <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed coll" data-bs-target="#auth" data-bs-toggle="collapse" area-expanded="false"><i class="fa-solid fa-book"></i> Mylecture <i class="fa-solid fa-chevron-down float-end"></i></a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{route('lecture.index')}}" class="sidebar-link">lecture</a>
                        <a href="{{route('lecture.create')}}" class="sidebar-link">Add lecture</a>
                    </li>
                </ul>
            </li>



                <li class="sidebar-item">
                    <a href="{{URL('my_class')}}" class="sidebar-link"><i class="fa-solid fa-landmark"></i> MyClass</a>
                </li>
       
               
              <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed coll" data-bs-target="#quiz" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-regular fa-user pe-2"></i> Quiz <i class="fa-solid fa-chevron-down float-end"></i></a>
                <ul id="quiz" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{route('quizzes.index')}}" class="sidebar-link">Quiz</a>
                        <a href="{{route('quizzes.create')}}" class="sidebar-link">Add Quiz</a>
                    </li>
                </ul>
            </li>
  


            <li class="sidebar-item">
                    <a href="{{URL('doctorprofile')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-user"></i>MyProfile</a>
                </li>



            </ul>
        </div>    
    </aside>