<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eduSkillmentor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('imgfile/book.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">





  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('cssfile/main.css')}}">

 
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
        <h1> <i class="bi bi-book"> </i> eduSkillmentor<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/">About</a></li>
          <li><a href="/">Services</a></li>
          <li><a href="/Formation">Our formation</a></li>
          <li><a href="/">Team</a></li>
          <li><a href="/">News</a></li>
          
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->






  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
  
      <div class="section-header">
        <h2>Programming Languages</h2>
        <p>Explore some of the programming languages we work with.</p>
      </div>
  
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
  
        <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-html">HTML</li>
            <li data-filter=".filter-css">CSS</li>
            <li data-filter=".filter-js">JavaScript</li>
            <li data-filter=".filter-php">PHP</li>
            <li data-filter=".filter-python">Python</li>
            <li data-filter=".filter-poo">Object-Oriented Programming (OOP)</li>
          </ul><!-- End Portfolio Filters -->
        </div>
  
        <div class="row gy-4 portfolio-container">
  
          <div class="col-xl-4 col-md-6 portfolio-item filter-html">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('imgfile/html.png')}}" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
               
                <h4>HTML</h4>
                <p>HTML is the standard markup language for creating web pages and web applications.</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
  
          <div class="col-xl-4 col-md-6 portfolio-item filter-css">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('imgfile/css.png')}}" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                
                <h4>CSS</h4>
                <p>CSS is a style sheet language used for describing the presentation of a document written in HTML.</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
  
          <div class="col-xl-4 col-md-6 portfolio-item filter-js">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('imgfile/js.png')}}" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4>JavaScript</h4>
                <p>JavaScript is a programming language that enables interactive web pages and is essential for web development.</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
  
          <div class="col-xl-4 col-md-6 portfolio-item filter-php">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('imgfile/php.png')}}" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4>PHP</h4>
                <p>PHP is a server-side scripting language used for web development and creating dynamic web pages.</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
  
          <div class="col-xl-4 col-md-6 portfolio-item filter-python">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('imgfile/python.png')}}" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4>Python</h4>
                <p>Python is a versatile and easy-to-learn programming language used for web development, data analysis, and more.</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
          <div class="col-xl-4 col-md-6 portfolio-item filter-poo">
            <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{asset('imgfile/python.png')}}" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4>Poo</h4>
                <p>OOP is a programming paradigm based on the concept of "objects," which can contain data and code: data in the form of fields (often known as attributes or properties), and code in the form of procedures (often known as methods).</p>
              </div>
            </div>
          </div>
        </div><!-- End Portfolio Container -->
  
      </div>
  
    </div> 
  </section><!-- End Portfolio Section -->
  

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
            <li><a href="#">Home</a></li>
            <li><a href="#">About </a></li>
            <li><a href="#">Nos Formation</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
  
        
  
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            123 Example Street <br>
            City, State 12345 <br>
            Country <br><br>
            <strong>Phone:</strong> +1 234 5678 910<br>
            <strong>Email:</strong> info@example.com<br>
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
  
     <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  
  
    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
  
</body>