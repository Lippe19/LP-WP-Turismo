
<!-- Barra WP -->
<?php wp_footer(); ?>



  <!-- Bootstrap core JavaScript -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-easing/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-easing/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-easing/scrolling-nav.js"></script>







  <!-- Optional JavaScript -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

  <!-- Fontawesome -->
  <script src="<?php bloginfo('template_url'); ?>/fontawesome/all.min.js"></script>

  <!-- Animacao Rolagem -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>

  <script src="<?php bloginfo('template_url'); ?>/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">

$(window).scroll(function () {
//Navbar
$('nav').toggleClass('scrolled-um', $(this).scrollTop() > 40);

if($(this).scrollTop() <= 29){//Medida menor que 29px
    $('.logo-nav').removeClass('ln-pequeno');
}else if($(this).scrollTop() >= 30){//Medida maior que 30px
    $('.logo-nav').addClass('ln-pequeno');
}

});

    $(function () {
      if ($('.beneficioss').length) {
        $(".beneficioss").slick({
          infinity: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
          speed: 1000,
          dots: true,
          autoplaySpeed: 4000,
        });
      }
      if ($('.pacotes').length) {
        $(".pacotes").slick({
          infinity: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
          speed: 1000,
          dots: true,
          autoplaySpeed: 4000,/**/
          responsive: [
            {
              breakpoint: 1080,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
              }
            }
          ]
        });
      }

      if ($('.campanhas_1').length) {
        $(".campanhas_1").slick({
          infinity: true,
          slidesToShow: 4,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
          speed: 1000,
          dots: true,
          autoplaySpeed: 4000,
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
              }
            }
          ]
        });
      }

    });
  </script>


</body>

</html>