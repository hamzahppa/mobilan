<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pendaftaran Mober | Mobilan Indonesia</title>
    <meta name="description" content="Advertising Technology" />
    <meta name="keywords" content="iklan, advertising technology, mobilan, impresi" />
    <meta name="author" content="Mobilan Indonesia" />

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/landio.css">
    <link rel="stylesheet" href="font-awesome/font-awesome.css">
    <style>
      .icondashboard {
        height: 100px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 30px;
        margin-top: 30px;
      }
      .centerimg {
        display: block;
        margin-left: auto;
        margin-right: auto;        
      }
      .pricing-best, input:focus {
        border-color: #449D44 !important;
      }
      .pricing-best {
        margin-right: auto !important;
        margin-left: auto !important;
      }
      .pricing-best > .card-header {
        background-color: #449D44 !important;
      }
      .nav-link.btn {
        /*padding: 1em !important;*/
      }
    </style>
  </head>

  <body>

    <!-- Navigation
    ================================================== -->
    <?php include('section/navbar-mober.php'); ?>

    <!-- Intro
    ================================================== -->
    <section id="landioCarousel" class="section-intro bg-faded text-xs-center">
      <div class="container">
        <h3 class="wp wp-1">Bergabunglah sebagai Mober <span class="text-success">Mobilan.id</span></h3>
        <p class="lead wp wp-2">Dapatkan penghasilan tambahan hingga <b>1,5 JUTA</b> tiap bulannya hanya dengan mengemudi seperti keseharian anda</p>
        <a class="btn btn-success-outline m-b-2" href="" role="button">Segera Hadir</a>
        <!-- <img src="img/mock.png" alt="iPad mock" class="img-fluid wp wp-3"> -->
      </div>
    </section>

    <!-- Features
    ================================================== -->
    <?php // include('section/section-feature.php'); ?>

    <!-- Videos
    ================================================== -->
    <?php // include('section/section-video.php'); ?>

    <!-- Pricing
    ================================================== -->
    <?php // include('section/section-pricing.php'); ?>

    <!-- Testimonials
    ================================================== -->
    <?php // include('section/section-testimonial.php'); ?>

    <!-- Text Content
    ================================================== -->
    <?php include('section/section-text-mober.php'); ?>

    <!-- News
    ================================================== -->
    <?php // include('section/section-news.php'); ?>

    <!-- Sign Up
    ================================================== -->
    <?php // include('section/section-register.php'); ?>

    <!-- Mober
    ================================================== -->
    <?php // include('section/section-mober.php'); ?>

    <!-- Footer
    ================================================== -->
    <?php include('section/footer.php'); ?>

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/landio.min.js"></script>
    <script>
      function pricingbest() {
        $('.pricing-box').addClass('pricing-best');
      }
      // hover
      $(".pricing-box").hover(function(){
          $(this).addClass('pricing-best');
          }, function(){
          $(this).removeClass('pricing-best');
      });

      // Smooth scrolling
      $(function() {
        $('a[href*="#"]:not([href="#"]):not([href="#collapsingNavbar"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      }); // Smooth scrolling
    </script>

    <!-- Chatra {literal} -->
    <script>
        (function(d, w, c) {
            w.ChatraID = 'i2NLRBstFiBHpwiqt';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
            + '//call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>
    <!-- /Chatra {/literal} -->    
  </body>
</html>
