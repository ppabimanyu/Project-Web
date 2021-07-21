<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Ninestars Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
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

  <!-- =======================================================
  * Template Name: Ninestars - v4.3.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="/"><span>LiveIn</span></a></h1>
      </div>

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
      <!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Event Details</h2>
        </div>
      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <a href="{{url('/profile/'.$event->id_user)}}">
              <div class="d-flex p-3 m-2 rounded-pill position-absolute text-white countdown" data-count="{{$event->date}}" style="background-color:rgba(37, 37, 37, 0.219);">
                <h4>%d : %h : %m : %s</h4>
              </div>
            </a>
            @if(($event->img)===null)
            <img src="/assets/img/about-img.svg" alt="">
            @else
            <img src="/storage/images/{{$event->img}}" alt="">
            @endif
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Event information</h3>
              <i class="bi bi-bookmark-fill"> {{$event->category}}</i>
              <i class="bi bi-stopwatch"> {{\Carbon\Carbon::parse($event->time)->format('h:i A')}}</i>
              <i class="bi bi-calendar-event"> {{\Carbon\Carbon::parse($event->date)->format('l, j F Y')}}</i>
              <i class="bi bi-geo-alt-fill"> {{$event->platform}}</i>
              <i class="bi bi-link"> <a href="{{$event->link}}">{{$event->link}}</a></i>
            </div>
            <div class="portfolio-description overflow-auto">
              <h3 class="text-break fw-bold border-bottom pb-3">Event Organizer</h3>
              <a href="/profile/{{$event->id_user}}">
                <div class="d-flex p-2 mt-4">
                  @if(($user->profile_photo_path) === null)
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle text-dark" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                  @else
                  <img src="/storage/{{$user->profile_photo_path}}" class="rounded-circle" alt="" style="width:30px; height:30px">
                  @endif
                  <p class="mt-1 ms-2 text-dark">{{$user->name}}</p>
                </div>
              </a>
            </div>
          </div>
          <div class="portfolio-description">
            <h2 class="text-break">{{$event->title}}</h2>
            <p>
              <?= htmlspecialchars_decode($event->description); ?>
            </p>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
    <section class="content-item" id="comments">
      <div class="container">
        <form>
          <h3 class="mb-4">New Comment</h3>
          <hr class="mb-4">
          <div class="mb-4">
            <div class="d-flex mb-4">
              <img class="mx-4" height="120px" width="120px" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
              <textarea class="form-control" id="message" placeholder="Your message" rows="10" required=""></textarea>
            </div>
            <div class="d-flex justify-content-end col">
              <button type="submit" class="btn btn-primary justify-content-end">Submit</button>
            </div>
          </div>
        </form>

        <h3>4 Comments</h3>
        <hr class="mb-4">

        <div class="d-flex my-5">
          <a href="#"><img class="mx-4" height="120px" width="120px" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
          <div class="">
            <div class="d-flex justify-content-between">
              <h4 class="fw-bold">John Doe</h4>
              <p class="fw-bold fs-6"><i class="bi bi-calendar-week mx-2 fs-5"></i>27/02/2014</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="d-flex my-5">
          <a href="#"><img class="mx-4" height="120px" width="120px" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
          <div class="">
            <div class="d-flex justify-content-between">
              <h4 class="fw-bold">John Doe</h4>
              <p class="fw-bold fs-6"><i class="bi bi-calendar-week mx-2 fs-5"></i>27/02/2014</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <!-- COMMENT 1 - END -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Ninestars</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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