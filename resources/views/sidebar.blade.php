  
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
                    <a href="{{route('admins.index')}}" class="sidebar-link"><i class="fa-solid fa-lock"></i>Admins</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('colleges.index')}}" class="sidebar-link"><i class="fa-solid fa-building-columns"></i>Colleges</a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('classrooms.index')}}" class="sidebar-link"><i class="fa-solid fa-building-columns"></i>Classroom</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-solid fa-file-lines pe-2"></i> Pages</a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Page 1</a>
                            <a href="#" class="sidebar-link">Page 2</a>
                        </li>
                    </ul>
                </li>
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" area-expanded="false"></i><i class="fa-solid fa-sliders pe-2"></i> Posts</a>
                  <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link">Post 1</a>
                          <a href="#" class="sidebar-link">Post 2</a>
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