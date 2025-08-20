<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header Section Start ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ route('home') }}">Portfolio</a></h1>
      {{-- <a href="{{ route('home') }}" class="logo"><img src="{{ asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a> --}}
        <!-- ==== NavBar Section Start ==== -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
          <li><a class="nav-link scrollto " href="{{ route('projects') }}">Projects</a></li>
          <li><a class="nav-link scrollto " href="{{ route('contact') }}">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ route('blog') }}">Blog</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- ==== NavBar Section End ==== -->

    </div>
  </header>
  <!-- ======= Header Section End ======= -->

  <!-- ======= Home Section Start ======= -->
  @yield("home")
  <!-- ======= Home Section End ======= -->

  <!-- ======= Main Section Start ======= -->
  <main id="main">
    <!-- ======= About Section Start ======= -->
    @yield("about")
    <!-- ======= About Section End ======= -->

    <!-- ======= Projects Section Start ======= -->
    @yield("projects")
    <!-- ======= Projects Section End ======= -->

    <!-- ======= Blog Section Start ======= -->
    @yield("blog")
    <!-- ======= Blog Section End ======= -->

    <!-- ======= Contact Section Start ======= -->
    @yield("contact")
    <!-- ======= Contact Section End ======= -->

  </main>
  <!-- ======= Main Section End ======= -->

  <!-- ======= Footer Section Start ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>No</strong>. All Rights Reserved</p>
            <div class="credits">
              Designed by <a href="#">Training Purpose</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ======= Footer Section End ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
