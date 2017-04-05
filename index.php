<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mobilan Indonesia | Advertising Technology</title>
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
      .pricing-best, input.form-control:focus, select.form-control:focus {
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
      .list-mobilan-feature {
        font-size: 0.9em !important;
        font-weight: bold;
      }
      @media (max-width: 767px) {
        ul.nav.navbar-nav > li.active > a.nav-link {
          color: white !important;
          background-color: #7F8799 !important;
        }
      }
    </style>
  </head>

  <body>

    <!-- Navigation
    ================================================== -->
    <?php include('section/navbar.php'); ?>

    <!-- Hero Section
    ================================================== -->
    <?php include('section/section-hero-slide.php'); ?>

    <!-- Intro
    ================================================== -->
    <section id="section-intro" class="section-intro bg-faded text-xs-center">
      <div class="container">
        <h3 class="wp wp-1">Tentukan tujuan, target atau dimana anda ingin beriklan</h3>
        <p class="lead wp wp-2">Kami akan menyampaikan iklan anda sesuai target, untuk mencapai tujuan iklan anda</p>
        <img src="img/mock.png" alt="iPad mock" class="img-fluid wp wp-3">
      </div>
    </section>

    <!-- Features
    ================================================== -->
    <?php include('section/section-feature.php'); ?>

    <!-- Videos
    ================================================== -->
    <?php // include('section/section-video.php'); ?>

    <!-- Pricing
    ================================================== -->
    <?php include('section/section-pricing.php'); ?>

    <!-- Text Content
    ================================================== -->
    <?php include('section/section-text.php'); ?>

    <!-- Testimonials
    ================================================== -->
    <?php // include('section/section-testimonial.php'); ?>

    <!-- News
    ================================================== -->
    <?php // include('section/section-news.php'); ?>

    <!-- Sign Up
    ================================================== -->
    <?php include('section/section-contact.php'); ?>

    <!-- Footer
    ================================================== -->
    <?php include('section/footer.php'); ?>

    <!-- Modal
    ================================================== -->
    <?php include('section/section-modal.php'); ?>

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap/modal.js"></script>
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

      $('#adserForm').submit(function( event ) {
        event.preventDefault();
        $("#mobilanModal").modal("show");
        var adserPackage  = $('#adserPackage').val();
        var adserName     = $('#adserName').val();
        var adserContact  = $('#adserContact').val();
        // var adserBaseURL  = 'http://localhost:8000';
        // var originAllowed = 'http://localhost';
        var adserBaseURL  = 'https://api.mobilan.id';
        // For Demo
        var originAllowed = 'https://v2.mobilan.id';
        // For Real Site
        // var originAllowed = 'https://mobilan.id';

        // Ajax Form Register
        $.ajax({
            method: 'POST',
            url: adserBaseURL + '/noapi/telegram/ajax',
            data: {
                adserPackage  : adserPackage,
                adserName     : adserName,
                adserContact  : adserContact,
                originAllowed : originAllowed
             },
            dataType: 'json',
            success:function(data){
                $("#mobilanModal").modal("hide");
                alert('Terimakasih, ' + adserName + '. Kami akan menghubungi anda segera.');
                console.log(data);
            },error:function(data){
                $("#mobilanModal").modal("hide");
                alert('Terjadi gangguan. Maaf atas ketidaknyamanan ini, silahkan ulangi pengiriman form');
                console.log(data);
            }
        });
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
