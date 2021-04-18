<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selecao Bootstrap Template - Index</title>
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
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">IntHelp</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">О нас</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Отзывы</a></li>
          <li><a class="nav-link scrollto" href="inner-page.html">Вопросы</a></li>
          <li><a class="nav-link scrollto" href="login.php">Войти</a></li>
          <li><a class="nav-link scrollto" href="admin_panel.php">AdminPanel</a></li>
          <a href="account.php?id=<?php echo $_GET['id']?>"><img src="img/1.jpg" alt="" class="" style="width: 50px; height: 50px;">

          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>IntHelp</span></h2>
          <p class="animate__animated fanimate__adeInUp">Здесь ты можешь задать любой вопрос по цифровой безопасностию Мы обязательно на него ответим.</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Библеотека вопросов</h2>
          <p class="animate__animated animate__fadeInUp">Здесь ты можешь найти ответ на уже заданный вопрос.</p>
        </div>
      </div>

      <!-- Slide 3 -->

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
    

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>О нас</h2> <p>Кто мы</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Наш проект IntHelp, с ответами на любой вопрос по информационной безопасности, помогает людям, которые не разбираются в интернете и которые хотят задать нужный им вопрос тем, 
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             что помогает обучиться в сфере информационной безопасности и найти ответ на свой вопрос, с помощью нас, мы ответим на него и улучшим цифровую грамотность.
            </p>
            <a href="#features" class="btn-learn-more">Узнать больше</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <section id="features" class="features">
      <div class="container">


        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Наши преимущества</h3>
                <p class="fst-italic">
                  Не бойся что не знаешь - бойся, что не учишься
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Быстрый ответ на ваш вопрос</li>
                  <li><i class="ri-check-double-line"></i> Легкость задавания вопроса</li>
                  <li><i class="ri-check-double-line"></i> Высокое качество ответов</li>
                </ul>
                <p>
                  Наш сервис лучше остальных так как у других на ответы отвечают лишь письменно, а мы будем делать наглядное видео с 
                  подробным объяснением решения вашего вопроса. Мы отвечаем за высокое качество ответов,которые будут поступать к вам.


                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="bg.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        
        </div>

      </div>
    </section><!-- End Features Section -->

    

    <!-- ======= Services Section ======= -->
   

    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Отзывы</h2>
          <p>Что о нас говорят?</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  сайт очень удобен и прост в управлении. Ответы на вопросы подробны и понятны. я нашел решение на свой вопрос.
                  Замечательный сайт, рекомендую тем кто еще ишет решение на свой вопрос
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman255</h3>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Я хотела просто попробовать, но не ожидала на такой результат. все просто и доступно объяснили мне.
                  Этот сайт помог мне решить проблему быстро и без лишних хлопотов. рекомендую всем!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson13</h3>
                
              </div>
            </div><!-- End testimonial item -->

            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
<!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Часто задаваемые вопросы</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">БЕЗОПАСЕН ЛИ ОНЛАЙН-БАНКИНГ?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Онлайн-банкинг удивительно безопасен и использует новейшие и постоянно развивающиеся методологии шифрования безопасности. На каждом уровне онлайн-процесса есть защита военного уровня, и вряд ли это взломают.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">МОЖНО ЛИ ПОДЫГРЫВАТЬ МОШЕННИКУ, КОГДА ОН МНЕ ЗВОНИТ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Да, вас ничто не останавливает. Школа мысли заключается в том, что пока вы держите его на линии, превращая это в шутливый звонок, вы спасаете кого-то еще от обмана. Однако лучше просто сказать мошеннику, что вы знаете, что он пытается вас обмануть, и повесить трубку.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">ДОПОЛНИТЕЛЬНАЯ БЕЗОПАСНОСТЬ - ПЛАТНАЯ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Большинство функций для обеспечения дополнительной безопасности - бесплатные, с ними вы будете более осведомлены о том, что происходит. Что касается антивирусного продукта, на большинство из лучших комплектов общей защиты предлагается оформить годовую подписку.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">КАК ЧАСТО НУЖНО ВСЕ ОБНОВЛЯТЬ?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Windows 10 поддерживает непрерывный цикл обновлений, предоставляя последние обновления в фоновом режиме. Однако всегда лучше ежедневно проверять наличие обновлений как для Windows, так и для любых программ, которые вы регулярно используете.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">ЧТО ДЕЛАТЬ, ЕСЛИ МЕНЯ ОБМАНУЛИ?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Если вы считаете, что вас обманули, быстро внесите некоторые изменения: измените пароль Windows, сообщите банку о том, что ваши данные могут быть украдены; напишите друзьям и родственникам, что вы были обмануты; подайте заявление в полицию; отсканируйте компьютер на наличие угроз и проверьте отчеты по своей кредитной карте.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Я ОТКРЫЛ ВЛОЖЕНИЕ МОШЕННИЧЕСКИХ ПИСЕМ, ЧТО МНЕ ТЕПЕРЬ ДЕЛАТЬ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Существует большая вероятность того, что на вашем компьютере вирус. Закройте все открытые программы, откройте защитник Windows и выполните полное сканирование системы. Если что-то обнаружится, защитник сообщит вам, что делать. Затем рассмотрите сторонний AV-пакет и повторите сканирование компьютера.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->
  

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