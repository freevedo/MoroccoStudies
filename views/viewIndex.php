<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Morroco Studies</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
     <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    
  <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="assets/css/style2.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.1.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
            <i class="icofont-envelope"></i>
            <a href="mailto:"><?= $contact['email']?></a>
            <i class="icofont-phone"><?= $contact['phone']?></i>
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="<?= $contact['link1']?>" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="<?= $contact['link2']?>" class="instagram"><i class="icofont-youtube"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>Morroco Studies</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">A propos </a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Galerie</a></li>
          <li><a href="application.php">Postuler</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
    
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide1 -->
            <div class="carousel-item active" style="background-image: url('assets/img/<?= $image1['name']?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                    <h2 class='animated fadeInDown'><?= $article1['title']?></h2>
                        <p class='animated fadeInUp'><?=$article1['content']?></p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
            </div>
          <!-- Slide2 -->
            <div class="carousel-item " style="background-image: url('assets/img/<?= $image2['name']?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                    <h2 class='animated fadeInDown'><?= $article2['title']?></h2>
                        <p class='animated fadeInUp'><?= $article2['content']?></p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
            </div>
            <!-- Slide3 -->
           
            <div class="carousel-item " style="background-image: url('assets/img/<?= $image3['name']?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                    echo"<h2 class='animated fadeInDown'><?= $article3['title']?></h2>
                        <p class='animated fadeInUp'><?= $article3['content']?></p>
                <a href="application.php" class="btn-get-started animated fadeInUp scrollto">Apply</a>
              </div>
            </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- MAIN -->

  <main id = "main"> 
        <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
               <img src="assets/img/<?=$image4['name']?>" class="img-fluid" alt="">
              <a href="<?=$contact['link2']?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title">
               <h2><?= $article4['title']?></h2>
                    <p><?=$article4['content']?></p>   
            </div>
               <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-gift"></i></div>
                      <h4 class="title"><a href=""><?=$article5['title']?></a></h4>
                        <p class="description"><?= $article5['content']?></p>
                    </div>
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                          <div class="icon"><i class="bx bx-fingerprint"></i></div>
                          <h4 class="title"><a href=""><?= $article6['title']?></a></h4>
                          <p class="description"><?= $article6['content']?></p>
                        </div>
                    </div>
                  </div>
                </div>
    </section><!-- End About Us Section -->
  
    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <h2>Cinq raisons de venir etudier au Maroc</h2>
      <div class="container">

        <div class="row no-gutters">
          <?php 
          while($aboutlist = $aboutlists->fetch()){
            $x = 100;
            ?>
            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="<?=$x?>">
                            <span><?= $aboutlist['name']?></span>
                            <h4><?= $aboutlist['title']?></h4>
                            <p><?= $aboutlist['content']?></p>
                          </div>
              <?php
                    $x++;
          }?>
        </div>

      </div>
    </section><!-- End About Lists Section -->

          <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">70</span>
              <p>Happy Clients</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">70</span>
              <p>Etudiants inscrits et suivis</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">10</span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->
   
   <!-- ======= Services Section ======= -->
   <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services et Offres</h2>
        </div>
        <div class="row">
            <?php
                while ($service = $services->fetch())
                {
                  $x=100;
                ?>
                        <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="<?= $x?>">
                        <div class="icon"><i class="<?=$service['name']?>"></i></div>
                        <h4 class="title"><a href=""><?=$service['title']?></a></h4>
                      </div>
                    <?php
                    $x++;
                }
            
            ?>
        </div>

      </div>
    </section><!-- End Services Section -->
 
                <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
<!--on peut rendre le titre dynamique comme on peut vraiment tout laisser comme ca -->
        <div class="section-title">
          <h2>Images</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Quelques images du Maroc</li>
              <li data-filter=".filter-card">Nos étudiants</li>
              <li data-filter=".filter-web">Organisations</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
            <?php 
                
                while($image= $app->fetch())
                {
                  $x =100 ;
                  ?>
                       <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                  <img src="assets/img/<?= $image['name']?>" class="img-fluid" alt="">
                                  <div class="portfolio-info">
                                    <h4>Images du Maroc</h4>
                                    // <p>App</p>
                                    <div class="portfolio-links">
                                      <a href="assets/img/<?= $image['name']?>" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-eye"></i></a>
                                      <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                                    </div>
                                  </div>
                                </div>
                              </div>

                  <?php
                    $x++;
                      }
                    ?>
                    <?php 
                      
                      while ($image= $web->fetch()) {
                        # code...
                        $x  = 100;
                      ?>
                      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-wrap">
                                  <img src="assets/img/<?= $image['name']?>" class="img-fluid" alt="">
                                  <div class="portfolio-info">
                                    <h4>Organisations</h4>
                                    // <p>App</p>
                                    <div class="portfolio-links">
                                      <a href="assets/img/<?= $image['name']?>" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-eye"></i></a>
                                      <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                      <?php
                        $x++;
                      }
                        ?>
                      <?php
                        
                        while($image = $card->fetch()){
                          $x = 100;
                          ?>
                      
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <div class="portfolio-wrap">
                                  <img src="assets/img/<?= $image['name']?>" class="img-fluid" alt="">
                                  <div class="portfolio-info">
                                    <h4>Etudiants</h4>
                                    <div class="portfolio-links">
                                      <a href="assets/img/<?= $image['name']?>" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-eye"></i></a>
                                      <a href="#" title="More Details"><i class="icofont-external-link"></i></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                    <?php
                      $x++;
                    } 
                    ?>
        </div>           
      </div>
    </section><!--End Our Portfolio Section -->


    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
<!--faire une table special pour team pour faciler le developpement surtout quil ya des liens-->
        <div class="section-title">
          <h2>Quelques avis</h2>
        </div>

        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="assets/img/<?= $team1['image']?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?= $team1['name']?></h4>
                <h6 style="color: #FFCC00;"><?= $team1['title']?></h6>
                <div class="commentaire">
                <p style = "color: #fff;"><?= $team1['content']?></p>
                </div>
              </div>
            </div>
          </div>
          <?php
              while($opinion = $team->fetch()){
                $x = 100;
              ?>
          <div class="col-xl-12 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?=$x?>">
            <div class="member">
              <div class="pic"><img src="assets/img/<?= $opinion['image']?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?= $opinion['name']?></h4>
                <h6 style="color: #FFCC00;"><?= $opinion['title']?></h6>
                <div class="commentaire">
                <p style = "color: #fff;"><?= $opinion['content']?></p>
                </div>
              </div>
            </div>
          </div>
            <?php
                    $x++;
                }
            ?>
            
        </div>

      </div>
    </section><!-- End Our Team Section -->
    
      
        <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Questions frequentes</h2>
        </div>

        <div class="row  d-flex align-items-stretch">
            <?php 
                while($faq = $faqs->fetch())
                {
                  $x=100;
            ?>
            <div style= "text-transform : uppercase;" class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="<?= $x?>">
              <h4><?= $faq['title']?></h4> <p><?= $faq['content']?> </p>
            </div>
                    
                    <!-- else{
                        echo ' <div style= "text-transform : uppercase;" class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="'.$x.'">
                                <h4>'.$article['title'].'</h4>
                                <p>'.$article['content'].'
                                  
                                </p>
                              </div>'; -->
                  
               <?php         
                    $x++;
                }       
            ?>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
        
                <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
<!--Ne pas oublier ici que la soummisssion du formualire nest pas prise en compte essayer de le modifier-->
        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Notre adresse</h3>
              <p><?=$contact['adress']?></p>
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p><?=$contact['email']?><br></p>
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Appelez-nous</h3>
              <p><?= $contact['phone']?><br></p>
              <p>+212 633199794<br></p>
              <p>+225 53217753<br></p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Us Section -->



  </main>
  <!-- END MAIN -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Mamba</h3>
            <p><?= $contact['adress']?>
              <br>
              <strong>Phone:</strong>+ <?= $contact['phone']?><br>
              <strong>Email:</strong> <?= $contact['email']?><br>
            </p>
            <div class="social-links mt-3">
              <a href="<?= $contact['link1']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="<?= $contact['link2']?>" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>
            <div class="admin-connection">
                <h4>Se connecter Adminstration?</h4>
                <a href="admin/login.php"><span class="fas fa-user-lock"> Connexion
                    </span></a>
            </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
<!--    gestion js avec des liens-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>