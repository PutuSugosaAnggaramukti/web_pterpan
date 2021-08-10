
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beasiswa UKDW</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('website/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('website/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('website/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('website/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('website/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('website/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/card.css')}}" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: OnePage - v4.3.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Beasiswa UKDW</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Beasiswa</a></li>
          <li><a class="nav-link scrollto" href="#services"></a></li>
          <li><a class="getstarted scrollto" href="#about">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->

  <main id="main">
        
    <!-- ======= About Section ======= -->
    <section id="about">
    <br>
    @foreach($data_syarat as $syarat)
        <h1 margin-right="50px">{{DB::table('informasi')->where('id',$syarat['id'])->value('nama_beasiswa')}}</h1>
        <br>
        <h4> -> syarat IPK Mahasiswa : {{$syarat->ipk}}</h4>
        <h4> -> syarat Semester Mahasiswa : {{$syarat->Semester}}</h4>
        <h4> -> syarat SKS Mahasiswa : {{$syarat->sks}}</h4>
        <h4> -> syarat Lainnya : {{$syarat->syarat_lain}}</h4>
        <ul class="postcard__tagbox">
            <li class="tag__item play blue">
                 <a href="">Daftar Beasiswa</a>
            </li>
        </ul>
        @endforeach
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <!-- ======= About Video Section ======= -->
    <!-- End About Video Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End testimonial item -->

    <!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Sevices Section -->

    <!-- ======= Cta Section ======= -->
   <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
   <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>UKDW</h3>
            <p>
            Jl. dr. Wahidin Sudirohusodo no. 5-25 <br>
            Yogyakarta, Indonesia – 55224<br>
              <br>
              <strong>Phone:</strong> +62274563929<br>
              <strong>Email:</strong> +62274513235<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Beasiswa</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Beasiswa</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Saran dan Kritik Webiste</h4>
            <p>Silahkan Isi saran dan kritik Website baru kami</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="kirim">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mochpina</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">Mochpina</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('website/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('website/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('website/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('website/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('website/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('website/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('website/js/main.js')}}"></script>

</body>

</html>