<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GRAND SATYA - Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('anyar/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('anyar/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('anyar/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('anyar/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('anyar/vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('anyar/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('anyar/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('anyar/vendor/swiper/swiper-bundle.min.css') }}">
  <link href="{{ asset('anyar/css/style.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Anyar
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="{{ route('front.index') }}"><b>GRAND SATYA</b></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar" sty>
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <!--<li><a class="nav-link scrollto" href="#about">About</a></li>-->
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#hero5">Portfolio</a></li>
          <li><a class="nav-link scrollto " href="{{ route('front.blog') }}">Blog</a></li>
          <!--<li><a class="nav-link scrollto" href="#team">Team</a></li>-->
          <!--<li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>-->
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry">
              <div class="entry-img">
                <center>
                  <img src="{{ asset('anyar/img/clients/pajero_1.jpg') }}" alt="" class="img-fluid">
                </center>
              </div>
              <h2 class="entry-title">
                <a href="{{route('front.blog1')}}">Servis Ringan Mobil Berkala</a>
              </h2>

              <div class="entry-content">
                <p>
                  <b>Servis Berkala 5.000 Km</b> <br>
                  Servis ringan secara berkala pada mobil mulai dilakukan pada jarak tempuh 5.000 hingga 20.000 km. Di
                  servis berkala 5.000 km ini, biasanya terdapat beberapa komponen yang harus dicek dan diganti oleh
                  pihak bengkel. <br>
                  Komponen yang dicek biasanya mirip seperti pada servis 1.000 km. Namun di servis 5.000 km ini, oli
                  pada mesin mobil disarankan untuk diganti. <br>
                  Selain itu, bagian lainnya yang juga dicek antara lain sistem steering, kampas rem, serta cairan di
                  mobil. <br>
                  <b>Servis Berkala 10.000 Km</b> <br>
                  Pada servis ini, pengecekan akan dilakukan lebih banyak...
                </p>
                <!-- <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div> -->
              </div>

            </article><!-- End blog entry -->

            <article class="entry">
              <div class="entry-img">
                <center>
                  <img src="{{ asset('anyar/img/clients/hilux.jpeg') }}" alt="" class="img-fluid">
                </center>
              </div>
              <h2 class="entry-title">
                <a href="{{route('front.blog2')}}">Indikasi Ban Mobil Harus Diganti </a>
              </h2>

              <div class="entry-content">
                <p>
                  <b>Kebotakan dari TWI (Tread Wear Indicator)</b> <br>
                  Pada dinding ban terdapat TWI serta ada garis melintang di antara tapak ban, jika tanda itu sudah
                  menghilang berarti ban harus segera diganti <br> <br>
                  <b>Ban sobek</b> <br>
                  Ban sobek karena terkena benda tajam dibagian dinding, kondisi seperti ini tidak bisa diperbaiki dan
                  harus diganti <br><br>
                  <b>
                    Ban Benjol
                  </b>
                  <br>
                  Hati hati bila ada benjolan pada ban, karena akan Meletus sewaktu waktu, benjolan ini terjadi karena
                  putusnya kawat baja didalam karet ban <br><br>
                  <b>Adanya retak halus</b><br>
                  Hal ini terjadi akibat penurunan kualitas karena pengaruh ozon, tekanan angin, dan ban...
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <center>
                  <img src="{{ asset('anyar/img/clients/hilux.jpeg') }}" alt="" class="img-fluid">
                </center>
              </div>
              <h2 class="entry-title">
                <a href="{{route('front.blog3')}}">4 Cara Menjaga Kualitas Udara Pada Mobil
                </a>
              </h2>



              <div class="entry-content">
                <p>
                  <b>Bersihkan ventilasi udara</b> <br>
                  Salah satu penyebab paling umum dari bau tak sedap pada mobil adalah kondisi ventilasi udara. Saat
                  kotoran dan kuman menumpuk, udara yang masuk ke dalam mobil akan berbau. Untuk memulai, bersihkan
                  ventilasi atas dan ventilasi bawah, periksa juga filter udara kabin yang harus diganti secara berkala
                  agar mobil tetap harum. <br> <br>
                  <b>Gunakan penyegar alami</b> <br>
                  Pilih pengharum alami seperti biji kopi dan...
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <center>
                  <img src="{{ asset('anyar/img/clients/alphard.jpeg') }}" alt="" class="img-fluid">
                </center>
              </div>
              <h2 class="entry-title">
                <a href="{{route('front.blog4')}}">Cara Menghilangkan Jamur Jendela Mobil dengan Pasta Gigi</a>
              </h2>
              <div class="entry-content">
                <p>
                  Oleskan pasta gigi pada bagian kaca yang terkena jamur, diamkan selama lima menit. <br>
                  Lalu gosok dengan kain microfiber hingga bersih....
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <center>
                  <img src="{{ asset('anyar/img/clients/isuzu.jpeg') }}" alt="" class="img-fluid">
                </center>
              </div>
              <h2 class="entry-title">
                <a href="{{route('front.blog5')}}">11 rekomendasi obat pembersih jamur kaca terbaik yang banyak dijual
                  di pasaran. Berikut ini pilihannya.</a>
              </h2>
              <div class="entry-content">
                <p>
                  1.) Auto Dazzling <br>
                  2.) Glass Scrubs...
                </p>
              </div>
            </article>
          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            {{-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> --}}
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>-->
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>-->
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>-->
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Air Ticketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Car Rental</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>-->
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>-->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Talavera Office Park lt.11<br>
              Jl. T.B. Simatupang kav 22-26<br>
              Indonesia, Jakarta Selatan<br><br>
              <!--<strong>Phone:</strong> +6289636463189<br>-->
              <strong>Email:</strong> Cs@grandsatya.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About GRAND SATYA</h3>
            <p>Catered to a large volume of corporate and industrial clients providing rapid growth in
              services offered of air ticketing service , hotel reservations with an instant confirmation
              , travel document arrengement , car rental , etc.
              Based in Jakarta and certainly having a wide network throughout National, managed by
              professional teams who adept at their tasks.</p>
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

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>GRAND SATYA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('anyar/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('anyar/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('anyar/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('anyar/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('anyar/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('anyar/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('anyar/js/main.js') }}"></script>

</body>

</html>