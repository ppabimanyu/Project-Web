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
                @if(auth()->user()->role === 'admin')
                <a class="dropdown-item" href="{{ url('/admin') }}">
                  @else
                  <a class="dropdown-item" href="{{ route('dashboard') }}">
                    @endif
                    <i class="icon-mid bi bi-person me-2 fs-5"></i>
                    Dashboard
                  </a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('profile.show') }}">
                  <i class="icon-mid bi bi-person me-2 fs-5"></i>
                  My Profile
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

  @auth
  <div class="py-5"></div>
  @else

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Better digital experience with LiveIn</h1>
          <h2>Make your live broadcast reach many people</h2>
          <div>
            <a href="{{ route('register') }}" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="/assets/img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section id="about" class="about">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="/assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Apa itu LiveIn?</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              LiveIn adalah sebuah website informasi yang memiliki tujuan untuk menyebarkan informasi jadwal livestreaming, seminar, workshop, training, dan lain lain. Dengan adanya LiveIn pengunjung bisa mendapatkan informasi tentang jadwal-jadwal dengan terperinci
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endauth

    <section id="services" class="services bg-white">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Live Event</h2>
          <p>Check out the great live broadcasts you can find</p>
        </div>

        <!-- Searching -->
        <form action="{{ url('/search') }}" method="post">
          @csrf
          <div class="mb-5 d-flex bg-white rounded-pill border border-1 border-secondary">
            <button class="btn text-dark" style="border-color: transparent;"><i class="bi bi-search fs-5 fw-bold"></i></button>
            <input type="text" name="keyword" class="form-control rounded-pill fs-5" id="search" placeholder="Search" required style="border-color: transparent;">
          </div>
        </form>
        <!-- End Searching -->

        <!-- <div class=" row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".Seminar">Seminar</li>
              <li data-filter=".Kesehatan">Kesehatan</li>
              <li data-filter=".Gaming">Gaming</li>
              <li data-filter=".Other">Other</li>
            </ul>
          </div>
        </div> -->

        <div id="category" class="d-flex justify-content-center mb-5 pb-5">
          <a href="{{ url('/events/all') }}">
            <div id="all" class="card px-4 py-3 mx-4">
              <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                  </svg>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <p>All</p>
              </div>
            </div>
          </a>
          <a href="{{ url('/events/Seminar') }}">
            <div id="seminar" class="card px-4 py-3 mx-4">
              <div class="d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                </svg>
              </div>
              <div class="d-flex justify-content-center">
                <p>Seminar</p>
              </div>
            </div>
          </a>
          <a href="{{ url('/events/Health') }}">
            <div id="healthy" class="card px-4 py-3 mx-4">
              <div class="d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                </svg>
              </div>
              <div class="d-flex justify-content-center">
                <p>Healthy</p>
              </div>
            </div>
          </a>
          <a href="{{ url('/events/Game') }}">
            <div id="game" class="card px-4 py-3 mx-4">
              <div class="d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                  <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z" />
                  <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z" />
                </svg>
              </div>
              <div class="d-flex justify-content-center">
                <p>Game</p>
              </div>
            </div>
          </a>
          <a href="{{ url('/events/Education') }}">
            <div id="academic" class="card px-4 py-3 mx-4">
              <div class="d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
              </div>
              <div class="d-flex justify-content-center">
                <p>Education</p>
              </div>
            </div>
          </a>
          <a href="{{ url('/events/Other') }}">
            <div id="other" class="card px-4 py-3 mx-4">
              <div class="d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
                  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z" />
                  <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z" />
                </svg>
              </div>
              <div class="d-flex justify-content-center">
                <p>Other</p>
              </div>
            </div>
          </a>
        </div>

        <div class="list-category">
          @if(!$seminars->isEmpty())
          <div data-aos="slide-left">
            <div id="seminar" class="d-flex justify-content-between mt-5">
              <a href="{{ url('/events/Seminar') }}">
                <h2 class="fw-bold">Seminar</h2>
              </a>
              <a href="{{ url('/events/Seminar') }}">
                <h4 class="text-decoration-underline">more >></h4>
              </a>
            </div>
            <hr>
          </div>
          <div class="swipper-slider">
            <div class="swiper-wrapper">
              @foreach($seminars as $event)
              <div class="swiper-slide" data-aos="slide-right">
                <div class="portfolio-item" style="width: 300px;">
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
                      <h3 class="title mt-2 text-break" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$event->title}}">{{$event->title}}</h3>
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
              </div>
              @endforeach
            </div>
          </div>
          @endif

          @if(!$healths->isEmpty())
          <div data-aos="slide-left">
            <div id="healthy" class="d-flex justify-content-between mt-5">
              <a href="{{ url('/events/Healthy') }}">
                <h2 class="fw-bold">Healthy</h2>
              </a>
              <a href="{{ url('/events/Healthy') }}">
                <h4 class="text-decoration-underline">more >></h4>
              </a>
            </div>
            <hr>
          </div>
          <div class="swipper-slider">
            <div class="swiper-wrapper">
              @foreach($healths as $event)
              <div class="swiper-slide" data-aos="slide-right">
                <div class="portfolio-item" style="width: 300px;">
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
                      <h3 class="title mt-2 text-break" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$event->title}}">{{$event->title}}</h3>
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
              </div>
              @endforeach
            </div>
          </div>
          @endif

          @if(!$games->isEmpty())
          <div data-aos="slide-left">
            <div id="game" class="d-flex justify-content-between mt-5">
              <a href="{{ url('/events/Game') }}">
                <h2 class="fw-bold">Game</h2>
              </a>
              <a href="{{ url('/events/Game') }}">
                <h4 class="text-decoration-underline">more >></h4>
              </a>
            </div>
            <hr>
          </div>
          <div class="swipper-slider">
            <div class="swiper-wrapper">
              @foreach($games as $event)
              <div class="swiper-slide" data-aos="slide-right">
                <div class="portfolio-item" style="width: 300px;">
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
                      <h3 class="title mt-2 text-break" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$event->title}}">{{$event->title}}</h3>
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
              </div>
              @endforeach
            </div>
          </div>
          @endif

          @if(!$academics->isEmpty())
          <div data-aos="slide-left">
            <div id="academic" class="d-flex justify-content-between mt-5">
              <a href="{{ url('/events/Education') }}">
                <h2 class="fw-bold">Academic</h2>
              </a>
              <a href="{{ url('/events/Education') }}">
                <h4 class="text-decoration-underline">more >></h4>
              </a>
            </div>
            <hr>
          </div>
          <div class="swipper-slider">
            <div class="swiper-wrapper">
              @foreach($academics as $event)
              <div class="swiper-slide" data-aos="slide-right">
                <div class="portfolio-item" style="width: 300px;">
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
                      <h3 class="title mt-2 text-break" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$event->title}}">{{$event->title}}</h3>
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
              </div>
              @endforeach
            </div>
          </div>
          @endif

          @if(!$others->isEmpty())
          <div data-aos="slide-left">
            <div id="other" class="d-flex justify-content-between mt-5">
              <a href="{{ url('/events/Other') }}">
                <h2 class="fw-bold">Other</h2>
              </a>
              <a href="{{ url('/events/Other') }}">
                <h4 class="text-decoration-underline">more >></h4>
              </a>
            </div>
            <hr>
          </div>
          <div class="swipper-slider">
            <div class="swiper-wrapper">
              @foreach($others as $event)
              <div class="swiper-slide" data-aos="slide-right">
                <div class="portfolio-item" style="width: 300px;">
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
                      <h3 class="title mt-2 text-break" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$event->title}}">{{$event->title}}</h3>
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
              </div>
              @endforeach
            </div>
          </div>
          @endif
        </div>
      </div>
    </section>

    <!-- ======= About Section ======= -->
    @auth
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="/assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Apa itu LiveIn?</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              LiveIn adalah sebuah website informasi yang memiliki tujuan untuk menyebarkan informasi jadwal livestreaming, seminar, workshop, training, dan lain lain. Dengan adanya LiveIn pengunjung bisa mendapatkan informasi tentang jadwal-jadwal dengan terperinci
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endauth

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>
        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Bagaimana cara mendaftar di LiveIn? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Untuk mendaftar akun dapat dengan cara tekan tombol pada pojok kanan atas "Get Started" kemudian isi data yang ada, apabila telah memiliki akun dapat menekan tombol "Already registered?".
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Apakah kita memasang event di LiveIn diharuskan membayar? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Memasang event pada Livein tidak diharuskan membayar, kami menyediakannya 100% gratis tanpa biaya apapun.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Bagaimana jika ingin menghapus event yang sudah kita posting di LiveIn? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pada menu "Your Event" terdapat tampilan jadwal event yang telah dibuat, untuk menghapus event dapat dengan cara tekan event yang ingin dihapus kemudian terdapat pilihan "Edit" untuk mengedit event dan "Deleted" untuk menghapus event.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apakah kita bisa memasang lebih dari satu jadwal event di LiveIn? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pada Livein anda bisa memasang lebih dari satu jadwal event sesuai dengan yang dibutuhkan.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Bagaimana cara kerja LiveIn? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pertama membuat akun Livein terlebih dahulu. Setelah itu membuat event dengan mengisi data event kemudian tunggu hingga event dimulai
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Bagaimana cara mengatasi error pada saat mendaftar di LiveIn? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Apabila terjadi error saat mendaftar akun, Anda dapat menghubungi customer service melalui email yang telah disediakan.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our team is always here to help</p>
        </div>
        <div class="row">
          <div class="col" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="/assets/img/team/mita.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mita Unziya</h4>
                  <!-- <span>Chief Executive Officer</span> -->
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="zoom-in" data-aos-delay="200">
            <div class="member">
              <img src="/assets/img/team/rifky.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rifky Roudana Imani Cahya</h4>
                  <!-- <span>Product Manager</span> -->
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="/assets/img/team/Abim.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Putra Prasessia Abimanyu</h4>
                  <!-- <span>CTO</span> -->
                </div>
                <div class="social">
                  <a href="https://twitter.com/PpAbimanyu" target="blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://web.facebook.com/abimanyu.ppa/" target="blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/abimanyu_ppa/" target="blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/putra-prassiesa-abimanyu-140336213/" target="blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="zoom-in" data-aos-delay="400">
            <div class="member">
              <img src="/assets/img/team/rian2.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muhammad Rian </h4>
                  <!-- <span>Accountant</span> -->
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="/assets/img/team/anton.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Anton Setyo</h4>
                  <!-- <span>CTO</span> -->
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->
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