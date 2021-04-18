<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Selecao Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animatecss/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v4.1.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">IntHelp</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">О нас</a></li>
          <li><a class="nav-link scrollto" href="index.php#testimonials">Отзывы</a></li>
          <li><a class="nav-link scrollto" href="inner-page.html">Вопросы</a></li>
          <li><a class="nav-link scrollto" href="login.php">Войти</a></li>
          <a href="account.php?id=<?php echo $_GET['id']?>"><img src="img/1.jpg" alt="" class="" style="width: 50px; height: 50px;">

          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Личный кабинет</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Личный кабинет</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <?php 
      $con = mysqli_connect('127.0.0.1', 'root', 'root', 'hackaton');
      $join = mysqli_query($con, "SELECT * FROM users INNER JOIN questions ON users.id = questions.user_id WHERE users.id='{$_GET['id']}'");
    ?>
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Ваши вопросы</p>
        </div>

        <div class="" data-aos="zoom-in" data-aos-delay="100">
          <?php 
            for($i=0;$i<mysqli_num_rows($join);$i++){
              $result = $join->fetch_assoc();
          ?>
          <div class="col-lg-12 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <div class="course-content">
                <h3><a href="course-details.html"><?php echo $result['heading'] ?></a></h3>
                <p><?php echo $result['question'] ?></p>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php } ?>
        </div>

      </div>
    </section><!-- End Popular Courses Section -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Задать вопрос</h2>
          <p>Запишите свой вопрос</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-2">

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="admin.php" method="GET">
                <input   class="form-control"name="heading" id="name" placeholder="Заголовок">
                <p></p>
                <input   class="form-control"style="display: none;" name="user_id" class="form-control" value="<?php echo $_GET['id']?>">
                <input   class="form-control"name="question" placeholder="Опишите ваш вопрос">
                <p></p>
              <div class="text-center col-6"><button class="form-control bg-primary" style="color: white;">Отправить вопрос</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>IntHelp</h3>
   
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>IntHelp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="">Me</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>