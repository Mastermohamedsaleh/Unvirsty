<nav class="navbar navbar-expand px3 border-bottom">
          <button class="btn" id="sidebar-toggle" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="navbar-icon pe-md-0">
                 <!-- <legend><span class="number ">{{substr(auth()->user()->email , 0 ,1)}}</span>{{auth()->user()->name}} <i class="fa-solid fa-caret-down"></i></legend> -->

              <img src="{{ url::asset( 'Assets/images/defualt.jpg' )}}" alt="" style="width:40px; height:40px;   border-radius:50% ;"><h4 class="d-inline">{{auth()->user()->name}} <i class="fa-solid fa-caret-down"></i></h4>  
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