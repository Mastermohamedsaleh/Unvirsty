  
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
                    Student elements
                </li>


                <li class="sidebar-item">
                    <a href="#" class="sidebar-link"><i class="fa-solid fa-list" style="padding: 0 10px 0  0"></i>Dashboard</a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route('lecturestudent')}}" class="sidebar-link"><i class="fa-solid fa-book" style="padding: 0 10px 0  0"></i> Mylecture</a>
                </li>
<!-- 
                <li class="sidebar-item">
                    <a href="{{URL('examschedule')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-clipboard-user"></i> My Schedule</a>
                </li> -->

                <li class="sidebar-item">
                    <a href="{{URL('fee_student')}}" class="sidebar-link"><i class="fa-solid fa-list" style="padding: 0 10px 0  0"></i>My Fee</a>
                </li>
                <!-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-lock"></i>Admins</a>
                </li> -->
         

<!-- 
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" area-expanded="false"><i class="fa-solid fa-graduation-cap"></i> Students</a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Student</a>
                      
                        </li>
                    </ul>
                </li> -->


<!-- 
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" area-expanded="false"><i class="fa-solid fa-person-chalkboard"></i> Doctors</a>
                  <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="{{route('doctors.index')}}" class="sidebar-link">All Doctors</a>
                          <a href="{{route('doctors.create')}}" class="sidebar-link">Add Doctor</a>
                      </li>
                  </ul>
              </li> -->
              <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" area-expanded="false"></i><i style="padding: 0 10px 0  0" class="fa-regular fa-user pe-2"></i> Quizzes <i class="fa-solid fa-chevron-down float-end"></i>  </a> 
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{route('student_exams.index')}}" class="sidebar-link">All Quizze </a>
                    
                    </li>
                </ul>
            </li>

              <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#Schedule" data-bs-toggle="collapse" area-expanded="false"><i style="padding: 0 10px 0  0" class="fa-solid fa-clipboard-user"></i> My Schedule <i class="fa-solid fa-chevron-down float-end"></i> </a> 
                <ul id="Schedule" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{URL('examschedule')}}" class="sidebar-link">Exam Schedule</a>
                        <a href="{{URL('examschedule')}}" class="sidebar-link">Studey Schedule</a>
                    
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                    <a href="{{URL('studentprofile')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-user"></i>MyProfile</a>
                </li>
            
            </ul>
        </div>    
    </aside>