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
        <h1 class="text-light"><a href="index.html"><span>LiveIn</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          @auth
          @else
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          @endauth
          <li><a class="nav-link scrollto" href="#services">Event</a></li>
          @auth
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          @else
          @endauth
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          @if (Route::has('login'))
                    @auth
                    <li><a class="getstarted scrollto" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                    <li><a class="getstarted scrollto" href="{{ route('register') }}">Get Started</a></li>
                    @endauth
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!-- ======= Hero Section ======= -->
@auth
<div class="py-5"></div>
@else
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Bettter digital experience with LiveIn</h1>
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
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
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
  @endauth<!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Live Event</h2>
          <p>Check out the great live broadcasts you can find</p>
        </div>

        <div class="input-group mb-4 border rounded-pill p-1 bg-white">
          <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon3" class="form-control bg-none border-0 rounded-pill">
          <div class="input-group-append border-0">
            <button id="button-addon3" type="button" class="btn btn-link text-success"><i class="fa fa-search"></i></button>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".Seminar">Seminar</li>
              <li data-filter=".Kesehatan">Kesehatan</li>
              <li data-filter=".Gaming">Gaming</li>
              <li data-filter=".Other">Other</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="zoom-in" data-aos-delay="200">
        @foreach($events as $event)
          <div class="col-6 col-sm-6 col-md-4 col-lg-3 align-items-stretch portfolio-item {{$event->category}}">
            <a href="/details/{{$event->id}}" class="link-detail">
              <div class="icon-box">
                <div class="d-flex p-2">
                  <img src="{{$event->foto}}" class="rounded-circle" alt="" style="width:30px; height:30px">
                  <p class="mt-1 ms-2">{{$event->name}}</p>
                </div>
                @if(($event->img)===null)
                <img src="/assets/img/about-img.svg" class="rounded-3" alt="">
                @else
                <img src="/storage/images/{{$event->img}}" class="rounded-3" alt="/assets/img/about-img.svg">
                @endif
                <h4 class="title mt-2 text-break" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$event->title}}">{{$event->title}}</h4>
                <p class="description">
                  <i class="bi bi-bookmark-fill"> {{$event->category}}</i><br>
                  <i class="bi bi-stopwatch"> {{$event->time}}</i><br>
                  <i class="bi bi-calendar-event"> {{$event->date}}</i><br>
                  <i class="bi bi-geo-alt-fill"> {{$event->platform}}</i>
                </p>
                <hr class="mb-2">
                <p class="text-gray-600 text-end">{{$event->created_at->diffForHumans()}}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>  
      </div>
    </section><!-- End Services Section -->

    @auth
    <!-- ======= About Section ======= -->
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
    @else
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
    </section><!-- End F.A.Q Section -->

       <!-- ======= Team Section ======= -->
       <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our team is always here to help</p>
        </div>

        <div class="row">

          <div class="col col-md col-sm-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="/assets/img/team/mita.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mita Unziya</h4>
                  <span>Chief Executive Officer</span>
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

          <div class="col col-md col-sm-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="member">
              <img src="/assets/img/team/rifky.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rifky Roudana Imani Cahya</h4>
                  <span>Product Manager</span>
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

          <div class="col col-md col-sm-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="/assets/img/team/Abim.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Putra Prasessia Abimanyu</h4>
                  <span>CTO</span>
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

          <div class="col col-md col-sm-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member">
              <img src="/assets/img/team/rian2.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muhammad Rian </h4>
                  <span>Accountant</span>
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
                  <span>CTO</span>
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
    </section><!-- End Team Section -->
  </main><!-- End #main -->

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