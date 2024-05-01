<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Formations Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('imgfile/book.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{asset('cssfile/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Apr 4 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>eduSkillmentor<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="/Formation">Our formations</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#recent-posts">News</a></li>

          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Formations Details</h2>
              <p>For more details about our courses and the price and also learning more about it</div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li>formation Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              {{-- <div class="swiper-slide">
                <img src="assets/img/portfolio/app-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/product-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/branding-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/books-1.jpg" alt="">
              </div> --}}

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
 
        <div class="row justify-content-between gy-4 mt-4">
        
          <div class="col-lg-8">

           
            <div class="portfolio-description">
              <h2>formation {{ $detailFormation->course->title}}  Details</h2>
              
           

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  This course is framed by professors and experts from all over the world, and it is based on 100% reliable sources
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                 
                  <img src="{{asset('images/'.$detailFormation->team->image)}}" class="testimonial-img" alt="">
                  <h3> {{ $detailFormation->team->nomComplete}}</h3>
                  <h4>{{ $detailFormation->team->specialites}}</h4>
                </div>
              </div>

              <p>
                {{ $detailFormation->course->description}}
              </p>

            </div> 
           
          
           </div>
         

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>la dureé de formation</strong> <span>{{ $detailFormation->course->dureé }}</span></li>
                <li><strong>le prix de la formation</strong> <span>{{ $detailFormation->course->prix }}</span></li>
                <li><strong>la date de publication</strong> <span>{{ $detailFormation->date_publication }}</span></li>
                <li><strong>a video for more details about this course</strong> <a href="#{{ $detailFormation->video_link}}">View</a></li>
                <div>
                <li><a href="{{route('learn_more')}}" class="btn-visit align-self-start">learn course</a></li>
              </div>
              </ul>
            </div>
          </div>

        </div>
       

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span>eduSkillmentor</span>
        </a>
        <p>Welcome to eduSkillmentor! We offer comprehensive training and educational services to help you achieve your learning goals. Our mission is to empower individuals through knowledge and skill development.</p>
        <div class="social-links d-flex mt-4">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="/#hero">Home</a></li>
        <li><a href="/#about">About </a></li>
        <li><a href="/#services">Services </a></li>
        <li><a href="/Formation">Our formation</a></li>
        <li><a href="/#team">Team</a></li>
        <li><a href="/#recent-posts">News</a></li>
        <li><a href="/#contact">Contact</a></li>
        </ul>
      </div>

      

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          ISTA NTIC SAFI <br>
        City, SAFI<br>
        Country MOROCCO <br><br>
          <strong>Phone:</strong> +1 234 5678 910<br>
          <strong>Email:</strong> eduSkillmentor@contact.com<br>
        </p>

      </div>

    </div>
  </div>

  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span>eduSkillmentor</span></strong>. All Rights Reserved
    </div>
  
  </div>

</footer><!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>