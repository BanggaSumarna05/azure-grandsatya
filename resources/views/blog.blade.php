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
                <a href="{{route('front.blog1')}}">Periodic Minor Car Servicing</a>
              </h2>



              <div class="entry-content">
                <p>
                  5.000 Km Periodic Service
                  Periodic light servicing of the car begins at a distance of 5,000 to 20,000 km. In this 5,000 km
                  periodic service, there are usually several components that must be checked and replaced by the
                  workshop. The components that are checked are usually the same as in the 1,000 km service. But in this
                  5.000 km service, the oil in the car engine is recommended to be replaced. In addition, other parts
                  that are also checked include the steering system, brake pads, and fluids in the car.
                  For information, when the repair shop replaces the engine oil, it is also accompanied by changing the
                  oil filter to keep the circulation maintained. For this service, usually there is no charge or free.
                  <!-- 5.000 Km Periodic Service
                  Periodic light servicing of the car begins at a distance of .... -->
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
                <a href="{{route('front.blog2')}}">Car Tire Indications Need to Be Replaced</a>
              </h2>



              <div class="entry-content">
                <p>
                  1 Baldness from TWI (Tread Wear Indicator)
                  <br>
                  On the tire wall there is TWI and there is a transverse line between the tire treads, if the mark has
                  disappeared, it means that the tire must be replaced immediately.
                  <hr>
                  2. Torn Tires
                  <br>
                  The tire was torn due to being hit by a sharp object on the wall, this condition cannot be repaired
                  and must be replaced.
                  <hr>
                  3. Bump Tires
                  <br>
                  Be careful if there is a lump in the tire, because it will erupt at any time, this lump occurs due to
                  a break in the steel wire in the tire rubber.
                  <hr>
                  4. Presence of Fine Cracks
                  <br>
                  This happens due to a decrease in quality due to the influence of ozone, wind pressure, and tires that
                  are less clean (due to soil, mud).
                  <hr>
                  5. Patched Too Often
                  <br>
                  Because it has been patched frequently, the tires will be more vulnerable and leak instantly
                  during the trip.
                  <!-- 1 Baldness from TWI (Tread Wear Indicator)
                  On the tire wall there is TWI and there .... -->
                </p>
                <!-- <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div> -->
              </div>

              <!-- <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div> -->
            </article>

            <article class="entry">
              <div class="entry-img">
                <center>
                  <img src="{{ asset('anyar/img/clients/hilux.jpeg') }}" alt="" class="img-fluid">
                </center>
              </div>
              <h2 class="entry-title">
                <a href="{{route('front.blog3')}}">4 Ways To Maintain Air Quality In Cars
                </a>
              </h2>



              <div class="entry-content">
                <p>
                  Clean the air vents
                  <br>
                  One of the most common causes of bad odor in a car is the condition of the air vents. When dirt and
                  germs accumulate, the air that enters the car will smell. To start, clean the top vents and bottom
                  vents, also check the cabin air filter which should be changed regularly to keep the car smelling
                  fresh.
                  <hr>
                  Use natural fresheners
                  <br>
                  Choose natural fresheners such as coffee beans and essential oils that can absorb bad odors in the
                  car.
                  Put some coffee beans (powder) into a small bag and for essential oil you can drip a cotton ball with
                  essential oil, put it in the vent and leave it under the chair. Don't forget to replace it every few
                  days to keep it fresh.

                  <hr>
                  Keep the car clean
                  <br>
                  In addition to cleaning the car regularly, keep the air clean in the car by avoiding smoking in the
                  car and throwing away the trash as soon as you get home. Leaving garbage in the car will cause a bad
                  smell that is difficult to get rid of.

                  <hr>
                  Clean the car carpet

                  <br>
                  Car carpets protect the car because they collect the dirt that we carry every time we get in the car.
                  Check the floors and trunk mats as it might be time to give them a thorough cleaning.
                  <!-- 1 Baldness from TWI (Tread Wear Indicator)
                  On the tire wall there is TWI and there .... -->
                </p>
                <!-- <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div> -->
              </div>

              <!-- <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div> -->
            </article>

            <article class="entry">
              <div class="entry-img">
                <center>
                  <img src="{{ asset('anyar/img/clients/alphard.jpeg') }}" alt="" class="img-fluid">
                </center>
              </div>
              <h2 class="entry-title">
                <a href="{{route('front.blog4')}}">How to Get Rid of Car Window Fungus with Toothpaste</a>
              </h2>
              <div class="entry-content">
                <p>
                  1.) apply toothpaste on the part of the glass affected by mold, let stand for five minutes. <br>
                  2.) Then rub with a microfiber cloth until clean. <br>
                  3.) Repeat the process if there is mold on other parts of the glass, then rinse with clean water.
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
                <a href="{{route('front.blog5')}}">11 recommendations for the best glass fungus cleaners that are widely
                  sold on the market. Here are the options.</a>
              </h2>
              <div class="entry-content">
                <p>
                  1.) Auto Dazzling <br>
                  2.) Glass Scrubs<br>
                  3.) Waxco Glass Clean Polish<br>
                  4.) Glass polish kits<br>
                  5.) Zerone Glass Super Cleaner<br>
                  6.) Otobi Waterspot Remover<br>
                  7.) Otogeek Glass Polish Compound<br>
                  8.) Masterpiece Glass Compound<br>
                  9.) Sabusa Waterspot<br>
                  10.) Maxxim Pro Glass<br>
                  11.) Mothers Revision<br>
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