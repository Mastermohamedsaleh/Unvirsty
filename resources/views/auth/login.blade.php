















    <style>
        .panel {display: none;}
    </style>


    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{ URL::asset('Styles/sidemenu-responsive-tabs') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>



      <script
        src="https://kit.fontawesome.com/c1ef89d5e0.js"
        crossorigin="anonymous"
        defer
      ></script>



      <section class="vh-100" style="background-color:#002db3;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{ URL::asset('assets/images/startingcollege-58d177633df78c3c4ff303ba.jpg') }}" style="height: 100%;"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                

                    


  
                    <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color:#0062cc;"></i>
                      <span class="h1 fw-bold mb-0">Login</span>
                    </div>


                    

                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Enter</label>
                    <select class="form-control" id="sectionChooser">
                        <option value="" selected disabled>Choose list</option>
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="accountant">Accountant</option>
                     
                    </select>
                  </div>

                  <div class="main-signup-header">
                                         
                                            @if ($errors->any())
                                                <div class="alert alert-danger mt-3">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
</div>
  
         

                                            {{--form admin--}}
                                            <div class="panel" id="admin">
                                                <h2> Enter  as Admin</h2>
                                                <form method="POST" action="{{route('admin.login')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-primary mt-3">Login</button>
                                                  
                                            </div>
                                            </form>

                                            {{--form Accountant--}}
                                            <div class="panel" id="accountant">
                                                <h2> Enter  as Accountant</h2>
                                                <form method="POST" action="{{route('accountant.login')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-primary mt-3">Login</button>
                                                  
                                            </div>
                                            </form>
                                         
                                            {{--form Doctor--}}
                                            <div class="panel" id="doctor">
                                                <h2>Enter  as Doctor</h2>
                                                <form method="POST" action="{{route('doctor.login')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-primary mt-3">Login</button>

                                                </form>

                                            </div>


                                            {{--form user--}}
                  <div class="panel" id="student">
                                                <h2> Enter  as Student</h2>
                                                <form method="POST" action="{{route('student.login')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-primary mt-3">Login</button>
                                                  
                                            </div>
                                            </form> 





  
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>











   
                                            





    <script>
        $('#sectionChooser').change(function(){
            var myID = $(this).val();
            $('.panel').each(function(){
                myID === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
    </script>

