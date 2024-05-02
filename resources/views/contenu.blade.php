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
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:eduSkillmentor@contact.com">eduSkillmentor@contact.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+212 585962314</span></i>
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
        <h1><i class="bi bi-book"> </i> eduSkillmentor<span>.</span></h1>
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
              <h2>Learn Course 
              </h2>
              <p>For more details about our courses and the price and also learning more about it</p></div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li>formation Details</li>
            <li>Learn Course </li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
    <main id="main">

      
    
      
    <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">
    
            <div class="row g-5">
             
              <div class="col-lg-8">
                
    
                 <h2 class="blog-details"> les partie de cours  </h2>
                 @if($content && is_iterable($content))
                 @foreach($content as $item)
                <article class="blog-details">

                  <h2 class="blog-details"> {{ $item->title}} </h2>
              
                   <div class="content">
                    <p class="blog-details"> {{ $item->content}} </p>
       
                   </div><!-- End post content -->
                 </article><!-- End blog post -->
                 @endforeach
             @else
                 {{-- If $content is not an array or collection, or is empty, display "No content found" --}}
                 <p>No content found.</p>
             @endif
             
                
              </div>   
            
    
              <div class="col-lg-4">
    
                <div class="sidebar">
    
                  @if($content && is_iterable($content))
    
                  <div class="sidebar-item categories">
                    <h3 class="sidebar-title">Categories</h3>
                    <ul class="mt-3">
                      @foreach($content as $item)
                      <li><a href="#"> {{ $item->title}}</a></li>
                 
                      @endforeach
                      @else
                      {{-- If $content is not an array or collection, or is empty, display "No content found" --}}
                      <p>No content found.</p>
                  @endif
                    </ul>
                  </div><!-- End sidebar categories-->
    
                  
    
                
    
         
    
              </div>
            </div>
    
          </div>
        </section><!-- End Blog Details Section -->
    
      </main>
    <!-- ======= Portfolio Details Section ======= -->
   

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
