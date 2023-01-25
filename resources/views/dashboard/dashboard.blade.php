<!DOCTYPE html>
<html lang="en">
@yield('template')
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sibaling - SMK Negeri 4 Malang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('BizLand/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('BizLand/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('BizLand/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('BizLand/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('BizLand/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizLand/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('BizLand/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizLand/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizLand/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('BizLand/assets/css/style.css') }}" rel="stylesheet">

</head>
@yield('body')
<body>

  <!-- ======= Top Bar ======= -->
  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Sibaling<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat Datang di <span>Sibaling</span></h1><br>
      <p class="description">Sibaling adalah Sistem Bimbingan Konseling SMK Negeri 4 Malang</p> <br>
      <p class="description">Login sebagai?</p>
      <div class="d-flex">
        <a href="{{url('/login-admin')}}" class="btn-get-started scrollto">Admin / Guest</a> &nbsp
        <span>
        <a href="{{url('/login-siswa')}}" class="btn-get-started scrollto">Siswa</a>
      </div>
    </div>
  </section><!-- End Hero -->
</body>
 

 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="BizLand/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="BizLand/assets/vendor/aos/aos.js"></script>
  <script src="BizLand/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="BizLand/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="BizLand/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="BizLand/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="BizLand/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="BizLand/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="BizLand/assets/js/main.js"></script>

</body>

</html>