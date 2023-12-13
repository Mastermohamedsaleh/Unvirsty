  
      <aside id="sidebar" class="js-sidebar"><!-- side bar content-->
        <div class="h-100">
            <div class="sidebar-logo">
                <a href="#">My College</a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Admin elements
                </li>


                <li class="sidebar-item">
                    <a href="#" class="sidebar-link"><i class="fa-solid fa-list"></i>Dashboard</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('admins.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-lock"></i>Admins</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('colleges.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-building-columns"></i>Colleges</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('classrooms.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0"  class="fa-solid fa-graduation-cap"></i>Classroom</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('sections.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-section"></i>Sections</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('sections.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-section"></i>subject</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('fee.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-comment-dollar"></i>Fee</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('receipt.index')}}" class="sidebar-link"><i style="padding: 0 10px 0  0" class="fa-solid fa-comment-dollar"></i>Receipt</a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" area-expanded="false"><i class="fa-solid fa-graduation-cap"></i> Students</a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{route('students.index')}}" class="sidebar-link">All Student</a>
                            <a href="{{route('students.create')}}" class="sidebar-link">Add Student</a>
                            <a href="{{route('promotion.create')}}" class="sidebar-link">Promotion Students</a>
                            <a href="{{route('promotion.index')}}" class="sidebar-link">Mangment Promotion Students</a>
                            <a href="{{route('graduated.index')}}" class="sidebar-link">Graduated Students</a>
                            <a href="{{route('graduated.create')}}" class="sidebar-link">Add Graduated Students</a>
                        </li>
                    </ul>
                </li>



              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" area-expanded="false"><i class="fa-solid fa-person-chalkboard"></i> Doctors</a>
                  <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="{{route('doctors.index')}}" class="sidebar-link">All Doctors</a>
                          <a href="{{route('doctors.create')}}" class="sidebar-link">Add Doctor</a>
                      </li>
                  </ul>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-regular fa-user pe-2"></i> Auth</a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Log in</a>
                        <a href="#" class="sidebar-link">Register</a>
                        <a href="#" class="sidebar-link">Forgot Password</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-header">
              Multi level menu
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-solid fa-share-nodes pe-2"></i> Multi dropdown</a>
              <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" >
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" area-expanded="false" data-bs-target="#level-1">level 1</a>
                    <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link">level 1.1</a>
                          <a href="#" class="sidebar-link">level 1.2</a>
                      </li>
                  </ul>
            </ul>
            </li>
            </ul>
        </div>    
    </aside>