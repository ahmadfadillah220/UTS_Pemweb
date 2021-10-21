<?php
session_start();
include "config.php";
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ahmad Fadillah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Hidayah - v4.6.0
  * Template URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
         
    $query = "SELECT * FROM biodata";
    $data = mysqli_query($koneksi,$query);

    while($d = mysqli_fetch_array($data)){
    $nama_lengkap = $d['namaLengkap'];
    $profile = $d['profile'];
    $email = $d['email'];
    $phone = $d['phone'];
    $aboutUs = $d['aboutUs'];

        }
?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">AF</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Education</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">My Hobby</a></li>
          <li><a class="nav-link scrollto" href="#team">Galerry</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown"><span>Ahmad Fadillah</span></h2>
              <p class="animated fadeInUp">Selamat datang</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>About Me</h3>
            <p><span class="title-s"></span> <span><?php echo $aboutUs; ?></span></p>
    
            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <br>
              <h1 class="title"><a href="">Biodata</a></h1>

            </div>
            <div class="row">
              <div class="col-lg-6">
                    <p><span class="title-s">Nama : </span> <span><?php echo $nama_lengkap; ?></span></p>
                    <p><span class="title-s">profile : </span> <span><?php echo $profile; ?></span></p>
                    <p><span class="title-s">Email : </span> <span><?php echo $email; ?></span></p>
                    <p><span class="title-s">Nomor HP : </span> <span><?php echo $phone; ?></span></p>
              </div>
             </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container-fluid">
      <div class="section-title">
          <h2>Skill</h2>
          <h3>My <span>Skill</span></h3>
        </div>

        <div class="row justify-content-center skills-content">

          <div class="col-xl-5 col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-xl-5 col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container-fluid">
      <?php
         
         $query = "SELECT * FROM education";
         $data = mysqli_query($koneksi,$query);
     
         while($d = mysqli_fetch_array($data)){
         $PM = $d['PM'];
         $LI = $d['LI'];
         $UPJ = $d['UPJ'];
     
             }
     ?>

        <div class="section-title">
          <h2>Education</h2>
          <h3>My <span>Education</span></h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-pie-chart-line"></i></div>
                <h4 class="title"><a href="">SMP Paramarta</a></h4>
                <p><span class="description"></span> <span><?php echo $PM; ?></span></p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-pie-chart-line"></i></div>
                <h4 class="title"><a href="">SMK Letris Indonesia 1</a></h4>
                <p><span class="description"></span> <span><?php echo $LI; ?></span></p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-pie-chart-line"></i></div>
                <h4 class="title"><a href="">Universitas Pembangunan Jaya</a></h4>
                <p><span class="description"></span> <span><?php echo $UPJ; ?></span></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

      </div>
    </section><!-- End Cta Section -->
    <?php
         
    $query = "SELECT * FROM hobi";
    $data = mysqli_query($koneksi,$query);

    while($d = mysqli_fetch_array($data)){
    $deskripsi = $d['deskripsi'];

        }
?>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h3>My <span>Hoby</span></h3>
          <p><span class="title-s"></span> <span><?php echo $deskripsi; ?></span></p>
        </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Galerry</h2>
          <p>Hasil dari karya saya</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member">
                  <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Botol Minum</h4>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                <div class="member">
                  <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Kopi</h4>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                <div class="member">
                  <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Tanaman</h4>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                <div class="member">
                  <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Kaca mata</h4>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container-fluid">
      <?php
         
         $query = "SELECT * FROM kontak";
         $data = mysqli_query($koneksi,$query);
     
         while($d = mysqli_fetch_array($data)){
         $alamat = $d['alamat'];
         $email = $d['email'];
         $phone = $d['phone'];
         $jam_kerja = $d['jam_kerja'];
     
             }
     ?>

        <div class="section-title">
          <h2>Contact</h2>
          <h3>My <span>Contact</span></h3>
          <p>Jika tertarik kalian bisa menghubungi kontak dibawah ini</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>Alamat</h4>
                    <p><span class="title-s"></span> <span><?php echo $alamat; ?></span></p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>No Handphone</h4>
                    <p><span class="title-s"></span> <span><?php echo $phone; ?></span></p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>Email</h4>
                    <p><span class="title-s"></span> <span><?php echo $email; ?></span></p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-time-five"></i>
                    <h4>Jam Kerja</h4>
                    <p><span class="title-s"></span> <span><?php echo $jam_kerja; ?></span></p>
                  </div>

                </div>

              </div>

              <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="email">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" rows="8" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Education</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#team">My Hobby</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                </ul>
              </div>


              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p><span class="title-s"></span> <span><?php echo $phone; ?></span></p>
                <p><span class="title-s"></span> <span><?php echo $email; ?></span></p>

              </div>

              <div class="col-lg-3 col-md-6 footer-info">
                <h3>Ahmad Fadillah</h3>
                <p>Terimakasih telah mengunjungi website saya, jika tertarik bisa kontak dibawah ini</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ahmad fadillah</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>