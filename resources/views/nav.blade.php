<nav class="navbar navbar-expand px3 border-bottom">
          <button
            class="btn" id="sidebar-toggle" type="button"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="navbar-icon pe-md-0">
                  <img src="assets/images/profile.png" class="avatar img-fluid rounded" alt="">
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Setting</a>
                    <a href="#" class="dropdown-item">
      


                    
             @if(auth('web')->check())
									<form method="POST" action="{{ route('logout.user') }}">
									@elseif(auth('admin')->check())
									<form method="POST" action="{{ route('admin.logout') }}">
									@elseif(auth('student')->check())
									<form method="POST" action="{{ route('student.logout') }}">
									@elseif(auth('doctor')->check())
									<form method="POST" action="{{ route('doctor.logout') }}">
									@endif
									@csrf
                                       <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();"><i class="bx bx-log-out"></i>Sign Out</a> 
                                     
                                         </form> 












        
             </a>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </nav>