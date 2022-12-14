<!DOCTYPE html>
<?php

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Latifah Afra</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.9.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/latifah.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Latifah Afra</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://github.com/LatifahAfraa/" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://www.instagram.com/latifahafraa/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/latifah-afra-b806b7147/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-phone"></i> <span>Contact</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Latifah Afra</h1>
      <p>I'm <span class="typed" data-typed-items="Fresh Graduate, Junior Web Developer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>saya Latifah Afra adalah fresh graduate dari Politeknik Negeri Padang, Jurusan Teknologi Informasi Prodi D3 Teknik Komputer, dengan IPK 3.68/4.00 predikat lulus Pujian.</p>

        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/latifah.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer.</h3>
            <p class="fst-italic">
              Berikut Biodata Diri Saya
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>06 Maret 2000</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Github:</strong> <span>https://github.com/LatifahAfraa/</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62852-6444-0829</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Padang, Sumatera Barat</span></li>

              </div>
              <div class="col-lg-6">
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= date("Y") - date("Y", strtotime("2000-03-06")); ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>A.Md.T</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>afralatifah@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>

            </div>
            <p>saya memiliki pengalaman magang sebagai Web Developer di CV. Mediatama Web Indonesia, dengan job desk melakukan perbaikan bug atau kodingan, menambahkan fitur pada website, serta membuat website Nagari Supayang. saya dapat menggunakan PHP Native dan Framework Laravel.</p>
            <p>Saya pernah mengikuti Pelatihan Junior Web Developer DTS 2019 dan 2021, dari pelatihan tersebut saya mempunyai sertifikat dari Bnsp dan sertifikat dari Kominfo sebagai Junior Web Developer.</p>
            <p>saya adalah seorang yang gigih, mau belajar hal baru, dapat bekerja tim, memiliki keingintahuan yang tinggi, serta menyukai tantangan baru.</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Java script <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Microsoft Office <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP Native<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MYSQL <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill">Laravel <i class="val">35%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Installasi Komputer <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Latifah Afra</h4>
              <p><em>Saya Fresh Graduate Politeknik Negeri Padang, berbeksl ilmu dari pendidikan D3 Teknik Komputer saya akan berusaha ikut memajukan perusahan bapak/ibu pimpin. </em></p>
              <ul>
                <li>Jl. Madang No. 11 Lolong Belanti, Padang Utara, Padang, Sumatera Barat</li>
                <li>085264440829</li>
                <li>afralatifah@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Politeknik Negeri Padang &amp; D3 Teknik Komputer</h4>
              <h5>2019 - 2022</h5>
              <p><em>Jl. Kampus, Limau Manis, Kec. Pauh, Kota Padang, Sumatera Barat 25164</em></p>
            </div>
            <div class="resume-item">
              <h4>SMK Negeri 5 Padang &amp; Teknik Komputer Jaringan</h4>
              <h5>2015 - 2018</h5>
              <p><em>Jl. Beringin Raya No.4, Lolong Belanti, Kec. Padang Utara, Kota Padang, Sumatera Barat</em></p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>Kasir Magang </h4>
              <h5>PT Trans Retail Indonesia</h5>
              <p><em>Kasir magang selama 3 bulan</em></p>
              <ul>
                <li>Melakukan proses transaksi pada mesin kasir di Transmart Padang.</li>
                <li>Melakukan Proses penghitungan uang masuk.</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Fotografer Freelance</h4>
              <h5>WENDYS FOTO</h5>
              <p><em>Fotografer Freelance di Wendys foto di Transmart selama bulan puasa.</em></p>
              <ul>
                <li>Mencari konsumen untuk foto</li>
                <li>Pengambilan foto konsumen</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>website Developer</h4>
              <h5>CV. MEDIATAMA WEB INDONESIA</h5>
              <p><em>Magang selama lebih kurang 5 bulan</em></p>
              <ul>
                <li>Melakukan pengecekan bug pada kodingan</li>
                <li>Melakukan perancangan Database yang diperlukan dalam pembuatan projek</li>
                <li>Melakukan pembuatan backend website Nagari Supayang</li>
                <li>Ikut dalam pembuatan frontend Nagari Supayang</li>
                <li>Membuat website profile SMK Negeri 5 Padang</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>JUNIOR WEB Developer</h4>
              <h5>Digital Talent Scholarship 2019</h5>
              <p><em>Pelatihan Setifikasi Junior Web Developer</em></p>
              <ul>
                <li>Mendapatkan sertifikat Junior Web Developer Kominfo</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>JUNIOR WEB Developer</h4>
              <h5>Digital Talent Scholarship 2021</h5>
              <p><em>Pelatihan Setifikasi Junior Web Developer</em></p>
              <ul>
                <li>Mendapatkan sertifikat Junior Web Developer BNSP</li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Berikut merupakan projek - projek yang pernah saya kerjakan</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Nagari Supayang</li>
              <li data-filter=".filter-card">SMK Negeri 5 Padang</li>
              <li data-filter=".filter-web">Tugas Akhir</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 portfolio-item filter">
            <div class="portfolio-wrap">
              <img src="assets/img/projek/git.JPG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/projek/git.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="semua projek yang pernah dikerjakan"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/LatifahAfraa?tab=repositories" title="Github"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/projek/supayang/login.JPG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/projek/supayang/login.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan Login Nagari Supayang"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/LatifahAfraa/nagarisupayang.git" title="Github"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/projek/supayang/frontend.JPG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/projek/supayang/frontend.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan frontend Nagari Supayang"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/LatifahAfraa/nagarisupayang.git" title="Github"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/projek/supayang/backend.JPG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/projek/supayang/backend.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan backend Nagari Supayang"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/LatifahAfraa/nagarisupayang.git" title="Github"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/projek/smk/frontend.JPG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/projek/smk/frontend.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan frontend SMK Negeri 5 Padang"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/LatifahAfraa/smkn5padang.git" title="Github"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/projek/smk/backend.JPG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/projek/smk/backend.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan backend SMK Negeri 5 Padang"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/LatifahAfraa/smkn5padang.git" title="Github"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/projek/ta/login.JPG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/projek/ta/login.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan Tuga Akhir dengan judul IMPLEMENTASI AWS EC2 PADA PROTOTYPE LAMPU LALU LINTAS RAMAH LANSIA BERBASIS MIKROKONTROLER MENGGUNAKAN RFID"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/LatifahAfraa/Tugas_Akhir_Latifah.git" title="Github"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/projek/ta/backend.JPG" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/projek/ta/backend.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan Tuga Akhir dengan judul IMPLEMENTASI AWS EC2 PADA PROTOTYPE LAMPU LALU LINTAS RAMAH LANSIA BERBASIS MIKROKONTROLER MENGGUNAKAN RFID"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/LatifahAfraa/Tugas_Akhir_Latifah.git" title="Github"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
   

    <!-- ======= Testimonials Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section id="services" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
         
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>JL. Madang no.11 Lolong Belanti, Padang Utara</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>afralatifah@hmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62852-6444-0829</p>
              </div>


              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.30226155946!2d100.35062701427302!3d-0.9215424355957893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8d3ab0e7293%3A0x36989fea1e3e384c!2sJl.%20Madang%20No.11%2C%20RT.001%2FRW.003%2C%20Lolong%20Belanti%2C%20Kec.%20Padang%20Utara%2C%20Kota%20Padang%2C%20Sumatera%20Barat%2025136!5e0!3m2!1sid!2sid!4v1666698660585!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
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
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Portfolio LATIFAH AFRA</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>