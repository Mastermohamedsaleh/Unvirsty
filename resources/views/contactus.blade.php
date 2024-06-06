<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Academy</title>
    <link rel="stylesheet" href="{{ URL::asset('Styles/bootstrap.min.css') }}  " />
    <link rel="stylesheet" href="{{ URL::asset('Styles/style.css') }} " />
    <link rel="stylesheet" href="{{ URL::asset('Styles/home.css') }} " />
    <script defer src="{{ URL::asset('script/bootstrap.bundle.min.js') }}  "></script>
    <script defer src="{{ URL::asset('Script/index.js') }}"></script>
  </head>
  <body>
   <!-- navbar -->



   <nav
      class="navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 z-1"
    >
      <div class="container-fluid">
        <a class="navbar-brand ms-4" href="#"
          ><img
            src="Assets/images/logo.png"
            alt="Smart Academy logo"
            class="w-75 h-75"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 fs-5">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
              
                href="{{url('/')}}"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active"     aria-current="page" href="{{url('about')}}"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active"  aria-current="page" href="{{url('fields')}}"
                >Fields</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active"  aria-current="page" href="{{url('event')}}"
                >Events</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                style="color: #00d084"
                href="{{url('contact_us')}}"
                >Contact us</a
              >
            </li>
            <li class="nav-item">
              <button
                class="border-0 p-1"
                style="background-color: inherit"
                id="srch-btn"
              >
                <img
                  id="srch-img"
                  style="height: 30px; width: 30px"
                  src="Assets/images/51.png"
                  alt=""
                />
              </button>
            </li>
          </ul>

          <a href="{{url('login')}}">
            <button class="button fs-5 mx-5 px-5 py-1" type="submit">
              Sign in
            </button></a
          >
        </div>
      </div>


      <div
        id="srch-toggler"
        class="position-absolute d-flex justify-content-center bg-body- collapse d-none"
        style="height: 50px; width: 100%; top: 76px; background-color: inherit"
      >
        <div class="">
          <input
            type="text"
            id="srch-field"
            class="form-control me-5"
            style="width: 420px"
            placeholder="Search"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
          />
        </div>
      </div>






    </nav>

    <!-- Hero -->
    <div
      class=""
      style="
        height: 491px;
        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.9),
            rgba(0, 0, 0, 0)
          ),
          url(Assets/images/32.png) no-repeat center;
        background-size: cover;
      "
    >
      <div
        class="h-100 d-flex position-relative flex-column justify-content-center align-items-center"
      >
        <span class="fs-4 txt-green">Discover Upcoming Events</span>
        <span class="fs-1 fw-semibold text-white">Our Events</span>
        <p class="txt-gray position-absolute" style="bottom: 70px">
          <a href="{{url('/')}}" class="text-decoration-none txt-gray">Home</a>
          <span class="px-3">></span>
          <span class="txt-green">Contact Us</span>
        </p>
      </div>
    </div>
    <!-- send a message -->
    <div class="container py-5">
      <div class="row">
        <div class="mx-auto text-center fw-bold fs-3 txt-darkblue">
          Send us a message , give us call , or better visit us.
        </div>
      </div>
      <div
        class="row p-5 mt-5 rounded-5"
        style="
          background-color: rgba(255, 255, 255, 0.479);
          box-shadow: 0px 5px 7px 0px #6666660c, 5px 0px 7px 0px #6666660c,
            -5px 0px 7px 0px #6666660c, 0px -5px 7px 0px #6666660c;
        "
      >
        <div class="row">
          <!-- form -->
          <div class="col-lg-8 col-sm-12 mb-sm-2 pe-lg-5">
            <form>
              <div class="form-floating mb-3">
                <input
                  type="name"
                  class="form-control"
                  style="background-color: #f6f6f6"
                  id="floatingName"
                  placeholder="Name"
                />
                <label class="fw-bold txt-gray" for="floatingName">Name</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="email"
                  class="form-control"
                  style="background-color: #f6f6f6"
                  id="floatingInput"
                  placeholder="name@example.com"
                />
                <label class="fw-bold txt-gray" for="floatingInput"
                  >Email address</label
                >
              </div>

              <div class="mb-3 form-floating">
                <textarea
                  class="form-control"
                  style="background-color: #f6f6f6"
                  placeholder="Leave a comment here"
                  id="floatingTextarea2"
                  style="height: 100px"
                ></textarea>
                <label class="fw-bold txt-gray" for="floatingTextarea2"
                  >type your message in here...</label
                >
              </div>
              <button
                type="submit"
                class="button3 border-0 fw-bold fs-3 w-100 py-3 rounded-4"
              >
                Send Message
              </button>
            </form>
          </div>
          <!-- contact info -->

          <?php   $setting = App\Models\Setting::all();     ?>


@foreach($setting as $s)
          <div class="col-lg-4 col-sm-12">
            <div class="py-3 mb-3 border border-2 rounded-4 text-center">
              <span class="txt-darkblue fw-bold">Email / Phone</span>
              <p class="m-0 w-75 mx-auto txt-gray fw-bold border-top">
                {{$s->email}} <br />
                {{$s->phone}}
              </p>
            </div>
            @endforeach
            <div class="py-3 mb-3 border border-2 rounded-4 text-center">
              <span class="txt-darkblue fw-bold">Our Address</span>
              <p class="m-0 w-75 mx-auto txt-gray fw-bold border-top">
                Gamal Abdel Nasser, New Cairo 1, Cairo Governorate 4722501
              </p>
            </div>
            <div class="py-3 border border-2 rounded-4 text-center">
              <div class="fw-bold">
                <span class="txt-darkblue">Opening Hours:</span>
                <span class="txt-green">8 AM - 4 PM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Our location -->
    <div class="container my-3">
      <div class="row pb-5">
        <div class="mx-auto text-center fw-bold fs-3 txt-darkblue">
          Our Location
        </div>
      </div>
        <div class="row mb-5">
          <div class="col-12">
            <!-- google maps location -->
            <div class="card p-0 my-2 border-0 rounded-4">
              <iframe
                class="rounded-4"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.468998018955!2d31.432870312056416!3d29.99468687484426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840c63ce95b0d%3A0x7db37f52d34a4d19!2sThe%20Higher%20Institute%20For%20Applied%20Arts%20-%205th%20Compound!5e0!3m2!1sen!2seg!4v1713969931046!5m2!1sen!2seg"
                style="
                  height: 650px;
                  background-color: rgba(255, 255, 255, 0.479);
                  box-shadow: 0px 5px 7px 0px #6666660c,
                    5px 0px 7px 0px #6666660c, -5px 0px 7px 0px #6666660c,
                    0px -5px 7px 0px #6666660c;
                "
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
    </div>
    <?php   $setting = App\Models\Setting::all();     ?>


<!-- Footer -->
@foreach($setting as $s)

<footer
  class="w-100"
  style="
    background-image: url(Assets/images/Vector.png);
    background-color: #181818;
    box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.7);
  "
>
  <div class="container py-2">
    <div class="row">
      <div class="col-lg-3">
        <div class="container">
          <a class="navbar-brand" href="#"
            ><img
              src="Assets/images/logo3.png"
              alt="Smart Academy logo"
              class="w-100 h-100 py-2"
          /></a>
          <!-- google maps location -->
          <div class="card my-2 border">
            <iframe
              class=""
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.468998018955!2d31.432870312056416!3d29.99468687484426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840c63ce95b0d%3A0x7db37f52d34a4d19!2sThe%20Higher%20Institute%20For%20Applied%20Arts%20-%205th%20Compound!5e0!3m2!1sen!2seg!4v1713969931046!5m2!1sen!2seg"
              style="border: 3px solid #00d084; border-radius: 5px"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="fs-5 color text-white py-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="22"
              height="22"
              fill="currentColor"
              class="bi bi-envelope-at-fill mb-1"
              viewBox="0 0 16 16"
            >
              <path
                d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"
              />
              <path
                d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"
              />
            </svg>
            <a
              class="text-decoration-none"
              style="color: #fdfdfd"
              href="mailto:info@cis.edu.eg"
              target="_blank"
              >{{$s->email}}</a
            >
          </div>
          <div class="fs-5 color fw-bold py-1" style="color: #fdfdfd">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="22"
              height="22"
              fill="currentColor"
              class="bi bi-telephone-fill mb-1"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
              ></path>
            </svg>
            {{$s->phone}}
          </div>
        </div>
      </div>
      <div class="col-lg-3 py-5">
        <div class="container">
          <div class="fs-6 fw-bold py-2 px-1 text-white">About</div>
          <div style="border-top: 3px solid #00d084"></div>
          <ol
            class="txt-gray fw-normal px-1 py-2"
            style="list-style-type: none"
          >
            <li>Safety First</li>
            <li>Regular Classes</li>
            <li>Certified Teachers</li>
            <li>Sufficient Classrooms</li>
            <li>Sports facilities</li>
          </ol>
        </div>
      </div>
      <div class="col-lg-3 py-5">
        <div class="container">
          <div class="fs-6 fw-bold py-2 px-1 text-white">Fields</div>
          <div style="border-top: 3px solid #00d084"></div>
          <ol
            class="txt-gray fw-normal px-1 py-2"
            style="list-style-type: none"
          >
            <li>Electric Engineering</li>
            <li>Computer Science</li>
            <li>Archetictural Engineering</li>
            <li>Business Adminstration</li>
          </ol>
        </div>
      </div>
      <div class="col-lg-3 py-5">
        <div class="container">
          <div class="fs-6 fw-bold py-2 px-1 text-white">Contact us</div>
          <div style="border-top: 3px solid #00d084"></div>
          <ol
            class="txt-gray fw-normal px-1 py-2"
            style="list-style-type: none"
          >
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="18"
                height="18"
                fill="currentColor"
                class="bi bi-envelope-at-fill mb-1"
                viewBox="0 0 16 16"
              >
                <path
                  d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"
                />
                <path
                  d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"
                />
              </svg>
              <a
                class="text-decoration-none txt-gray"
                href="mailto:info@cis.edu.eg"
                target="_blank"
                >{{$s->email}}</a
              >
            </li>
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="18"
                height="18"
                fill="currentColor"
                class="bi bi-telephone-fill mb-1"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
                ></path>
              </svg>
              {{$s->phone}}
            </li>
            <li>FAQs</li>
            <li>Prvacy Policy</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div
    class="row w-100 text-white m-0 py-3 px-2"
    style="background-color: #272727"
  >
    <div class="container d-flex flex-row justify-content-between">
      <p class="m-0 mx-3 fs-5">Copyright &#169;2024 All rights reserved</p>
      <div class="">
        <a
          class="text-decoration-none txt-green"
          style="text-decoration: none"
          target="_blank"
          href="{{$s->link_facebook}}"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            fill="currentColor"
            class="bi bi-facebook mx-2"
            viewBox="0 0 16 16"
          >
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
            /></svg
        ></a>
        <a
          class="text-decoration-none txt-green"
          target="_blank"
          href="{{$s->link_linked_in}}"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            fill="currentColor"
            class="bi bi-linkedin mx-2"
            viewBox="0 0 16 16"
          >
            <path
              d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
            /></svg
        ></a>
        <a
          href="https://www.youtube.com/channel/UCoRUJ2St0Bx7WjKdbTqOvkQ"
          class="text-decoration-none txt-green"
          target="_blank"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="30"
            height="30"
            fill="currentColor"
            class="bi bi-youtube mx-2"
            viewBox="0 0 16 16"
          >
            <path
              d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
            /></svg
        ></a>
      </div>
    </div>
  </div>
</footer>
@endforeach
  </body>
</html>
