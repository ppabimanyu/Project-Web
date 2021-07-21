<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LiveIn</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/icon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">


</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Logo -->
      <div class="logo">
        <h1 class="text-light"><a href="/"><span>LiveIn</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <!-- End Logo -->
      <!-- Navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          @if (Route::has('login'))
          @auth
          <li class="dropdown">
            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="user-menu d-flex">
                <div class="user-name text-end me-3 mt-4">
                  <h6 class="mb-0 text-gray-600 fs-5">{{ Auth::user()->name }}</h6>
                </div>
                <div class="user-img d-flex align-items-center">
                  <div class="avatar avatar-md">
                    <img src="{{ Auth::user()->profile_photo_url }}" width="50px" class="rounded-circle">
                  </div>
                </div>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
              <li>
                <h6 class="dropdown-header fs-5">Hello, {{ strtok(Auth::user()->name, " ") }}!</h6>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('profile.show') }}">
                  <i class="icon-mid bi bi-person me-2 fs-5"></i>
                  My Profile
                </a>
              </li>
              <li>
                @if(auth()->user()->role === 'admin')
                <a class="dropdown-item" href="{{ url('/admin') }}">
                  @else
                  <a class="dropdown-item" href="{{ route('dashboard') }}">
                    @endif
                    <i class="icon-mid bi bi-person me-2 fs-5"></i>
                    Dashboard
                  </a>
              </li>
              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <li>
                <a class="dropdown-item" href="#">
                  <i class="icon-mid bi bi-gear me-2 fs-5"></i>
                  {{ __('API Tokens') }}
                </a>
              </li>
              @endif
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
          @else
          <li><a class="getstarted scrollto" href="{{ route('register') }}">Get Started</a></li>
          @endauth
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- End Navbar -->
    </div>
  </header><!-- End Header -->

  <main>
    <div class="py-5"></div>
    <section id="services" class="services bg-white">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          @if($event == 'all')
          <h2>All Live Event</h2>
          @else
          <h2>{{$event}}</h2>
          @endif
          <p>Check out the great {{$event}}s event you can find</p>
          <!-- <p>Check out the great live broadcasts you can find</p> -->
        </div>

        @if(!$events->isEmpty())
        <div class="row portfolio-container" data-aos="zoom-in" data-aos-delay="200">
          @foreach($events as $event)
          <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-15 align-items-stretch portfolio-item {{$event->category}}">
            <a href="{{url('/details/'.$event->id)}}" class="link-detail">
              <div class="icon-box">
                <div class="d-flex p-2">
                  @if(((DB::table('users')->where('id', $event->id_user)->first())->profile_photo_path) === null)
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                  @else
                  <img src="storage/{{(DB::table('users')->where('id', $event->id_user)->first())->profile_photo_path}}" class="rounded-circle" alt="" style="width:30px; height:30px">
                  @endif
                  <p class="mt-1 ms-2">{{(DB::table('users')->where('id', $event->id_user)->first())->name}}</p>
                </div>
                @if(($event->img)===null)
                <img src="/assets/img/about-img.svg" class="rounded-3" alt="">
                @else
                <img src="/storage/images/{{$event->img}}" class="rounded-3" alt="/assets/img/about-img.svg">
                @endif
                <h4 class="title mt-2 text-break" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$event->title}}">{{$event->title}}</h4>
                <p class="description">
                  <i class="bi bi-bookmark-fill"> {{$event->category}}</i><br>
                  <i class="bi bi-stopwatch"> {{\Carbon\Carbon::parse($event->time)->format('h:i A')}}</i><br>
                  <i class="bi bi-calendar-event"> {{\Carbon\Carbon::parse($event->date)->format('l, j F Y')}}</i><br>
                  <i class="bi bi-geo-alt-fill"> {{$event->platform}}</i>
                </p>
                <hr class="mb-2">
                <p class="text-gray-600 text-end">{{$event->created_at->diffForHumans()}}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        @else
        <div class="d-flex justify-content-center"><img src="/assets/img/not_found.svg" width="500" alt=""></div>
        <div class="d-flex justify-content-center">
          <h1 class="fs-1 fw-bold">Not Found</h1>
        </div>
        <div class="d-flex justify-content-center my-5 py-5">
          <a href="{{ route('create') }}" class="btn btn-primary p-3" style="background-color:orange; border-color:orange">create your own event</a>
        </div>
        @endif
      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <!-- <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div> -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Ninestars</h3>
            <p>
              Jl. Mastrip No.164 <br>
              Kabupaten Jember<br>
              Provinsi Jawa Timur<br><br>
              <strong>Phone:</strong> +6282335772936<br>
              <strong>Email:</strong> LiveInStream@gmail.com<br>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Agar kalian tidak ketinggalan berita, follow social network kita untuk informasi terbaru</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
</body>

</html>