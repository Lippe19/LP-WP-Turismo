<?php get_header(); ?>

<body id="page-top">

  <!-- Menu -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">


      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <?php
        //define dinamicamente a logo no menu 
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

        //caso não tenha imagem 
        if (has_custom_logo()) {
          echo '<img src="' . esc_url($logo[0]) . '" class="logo-nav">';
        } else {
          echo '<h1>' . get_bloginfo('name') . '</h1>';
          echo '<p class="lead">' . get_bloginfo('description') . '</p>';
        }
        ?>
      </a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="font-size: 20px;
            padding: 3px 18px;
    border: 2px solid #45006a;
    color: #45006a;
            margin-right: 5px;" href="#a3">Cadastre sua agência</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://barretoscountry.com.br/agente/admin/login" target="_blank">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#a2">Benefícios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#a4">Downloads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#a6">Pacotes</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

















  <header class="bg-primary text-white margem-sc1" id="a1">

  <!-- SEÇÃO 1 | Desktop -->
  <div class="d-none d-md-block">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
        // args
        $my_args_banner = array('post_type' => 'banners_desktop', 'posts_per_page' => 6,);
        // query
        $my_query_banner = new WP_Query($my_args_banner);
        
        if ($my_query_banner->have_posts()) :
          $banner = $banners[0];
          $c = 0;
          while ($my_query_banner->have_posts()) :
            $my_query_banner->the_post();
        ?>
            <div class="carousel-item <?php $c++; if ($c == 1) { echo 'active'; } ?>">

              <?php the_post_thumbnail('post-thumbnail', array('class' => 'w-100 img-fluid')) ?>
              
              <div class="carousel-caption">
                <div class="row margin-text-sc1">
                  <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 text-left">

                    <p class="font-sc1-title"><?php wp_count_posts(); ?><br><?php the_title(); ?></p>
                    <p class="font-sc1-text"><?php the_content(); ?></p>

                  </div>
                  <div class="col-12 col-sm-12 col-md-2 col-lg-4 col-xl-6"></div>
                </div>
              </div>
            </div>

        <?php
          endwhile;
        endif;
        ?>
        <?php wp_reset_query(); ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="<?php $c ?>" class="<?php $c++;if ($c == 1) {echo 'active';} ?>"></li>
      </ol>
    </div>
  </div>
  <!-- Fim SEÇÃO 1 | Desktop -->

  <!-- SEÇÃO 1 | Mobile -->
  <div class="d-block d-md-none">
    <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
        // args
        $my_args_banner = array('post_type' => 'banners_mobile', 'posts_per_page' => 6,);
        // query
        $my_query_banner = new WP_Query($my_args_banner);
        
        if ($my_query_banner->have_posts()) :
          $banner = $banners[0];
          $c = 0;
          while ($my_query_banner->have_posts()) :
            $my_query_banner->the_post();
        ?>
            <div class="carousel-item <?php $c++; if ($c == 1) { echo 'active'; } ?>">

              <?php the_post_thumbnail('post-thumbnail', array('class' => 'w-100 img-fluid')) ?>
              
              <div class="carousel-caption">
                <div class="row margin-text-sc1">
                  <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 text-left">

                    <p class="font-sc1-title"><?php wp_count_posts(); ?><br><?php the_title(); ?></p>
                    <p class="font-sc1-text"><?php the_content(); ?></p>

                  </div>
                  <div class="col-12 col-sm-12 col-md-2 col-lg-4 col-xl-6"></div>
                </div>
              </div>
            </div>

        <?php
          endwhile;
        endif;
        ?>
        <?php wp_reset_query(); ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions1" data-slide-to="<?php $c ?>" class="<?php $c++;if ($c == 1) {echo 'active';} ?>"></li>
      </ol>
    </div>
  </div>
  <!-- Fim SEÇÃO 1 | Mobile -->


  </header>












































































































































































































  <!-- SEÇÃO 2 -->
  <section id="a2">
    <div class="sc2">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-justify text-sm-center">
            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sc2-titulo.png" alt="">
            <div class="traco mt-3"></div>
            <p class="font-sc2-text mt-5 mb-4">
              Além das experiências inesquecíveis para seus clientes, a nossa parceria tem benefícios exclusivos, que garantem a sua empresa condições especiais e atendimento prioritário. Preparamos cada detalhe para que você tenha as melhores opor-tunidades e condições incríveis de lucrar com esta parceria de sucesso. Confira alguns dos benefícios de ser parceiro do Barretos Country Thermas Park.
            </p>
          </div>
        </div>

        <div class=" d-none d-sm-block">
          <div class="row text-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
              <div class="cardSc mb-4" style="background-color: #7e65a9;">
                <div class="card-body">
                  <p class="font-sc2-title-card" style="">Comissão</p>
                  <p class="font-sc2-text-card" style="">
                    de até 15% de acordo <br>
                    com os pacotes</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
              <div class="cardSc mb-4" style="background-color: #bb60a3;">
                <div class="card-body">
                  <p class="font-sc2-title-card" style="">Faturamento</p>
                  <p class="font-sc2-text-card" style="">
                    em até 15 dias <br>
                    após o checkout</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
              <div class="cardSc mb-4" style="background-color: #eb5c87;">
                <div class="card-body">
                  <p class="font-sc2-title-card" style="">Bloqueio</p>
                  <p class="font-sc2-text-card" style="">
                    de apartamentos <br>
                    mediante consulta</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
              <div class="cardSc mb-4" style="background-color: #f18749;">
                <div class="card-body">
                  <p class="font-sc2-title-card" style="">Suporte</p>
                  <p class="font-sc2-text-card" style="">
                    com materiais e conteúdos <br>
                    próprios para sua agência </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="beneficioss text-center d-block d-sm-none" style="">
          <div class="">
            <div class="cardSc mb-4" style="background-color: #7e65a9;">
              <div class="card-body">
                <p class="font-sc2-title-card" style="">Comissão</p>
                <p class="font-sc2-text-card" style="">
                  de até 15% de acordo <br>
                  com os pacotes</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="cardSc mb-4" style="background-color: #bb60a3;">
              <div class="card-body">
                <p class="font-sc2-title-card" style="">Faturamento</p>
                <p class="font-sc2-text-card" style="">
                  em até 15 dias <br>
                  após o checkout</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="cardSc mb-4" style="background-color: #eb5c87;">
              <div class="card-body">
                <p class="font-sc2-title-card" style="">Bloqueio</p>
                <p class="font-sc2-text-card" style="">
                  de apartamentos <br>
                  mediante consulta</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="cardSc mb-4" style="background-color: #f18749;">
              <div class="card-body">
                <p class="font-sc2-title-card" style="">Suporte</p>
                <p class="font-sc2-text-card" style="">
                  com materiais e conteúdos <br>
                  próprios para sua agência </p>
              </div>
            </div>
          </div>
        </div>


        <div class="row justify-content-center mt-5 mt-sm-3">
          <a href="https://reservas.barretoscountry.com.br/infotravel/" class="" target="_blank">
            <button type="button" class="btn btn-outline-light">faça sua reserva</button>
          </a>
        </div>
      </div>
    </div>

  </section>
  <div class="bg-sc2"></div>

































  <!-- SEÇÃO 3 -->
  <section id="a3">
    <div class="sc6_1">

      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="text-center">
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sc3-titulo.png" alt="">
              <div class="traco mt-3" style="border-bottom: 4px solid #45006a;"></div>
            </div>
            <p class="font-sc2-text mt-5 text-justify text-sm-center" style="color: #191919;">
              A cada reserva cadastrada em nosso portal, você ganha pontos que podem ser trocadas por diárias em nosso programa exclusivo de pontuação. Seus pontos, suas diárias. Com o nosso programa de pontuação, suas diárias podem ser utili-zadas por você, sua família, amigos ou terceiros. Venda, acumule e troque. Ao atingir a pontuação adequada, você pode resgatar suas diárias para qualquer período disponível.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="campanhas_1 slider" style="margin-top: 20px;margin-bottom: 10px;">

        <?php
          // args
          $my_args_banner = array('post_type' => 'campanhas', 'posts_per_page' => 30,);
          // query
          $my_query_banner = new WP_Query($my_args_banner);
        ?>

        <?php
          if ($my_query_banner->have_posts()) :
            $banner = $banners[0];
            while ($my_query_banner->have_posts()) :
              $my_query_banner->the_post();
        ?>
            <div class="">
              <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid mb-4')) ?>
            </div>

        <?php
            endwhile;
          endif;
        ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>

  <div class="sc6_2" style="background-color: #bb60a300;">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <a href="https://barretoscountry.com.br/agente/admin/login" class="" target="_blank">
          <button type="button" class="btn btn-outline-dark">portal do agente</button>
        </a>
      </div>
    </div>
  </div>
</section>



































    <!-- SEÇÃO 4 -->
    <div class="container-fluid container-fluid-grid" id="downloads">
      <div class="row row-nomargin font-opensans-bold-sc3-home">

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="container-fluid-grid-item" style="width:100%;height:100%">
            <a href="#page-to">
              <div class="imagem-sc3-home position-relative">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sc4-1.png" alt="">
                <div class="texto-sc3-home card-img-overlay position-absolute d-flex justify-content-center align-items-center">
                  <p class="font-sc2-subtitle">materiais de<br>
                    <font class="font-sc2-title">campanha</font>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="container-fluid-grid-item" style="width:100%;height:100%">
            <a href="#page-to">
              <div class="imagem-sc3-home2 position-relative">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sc4-2.png" alt="">
                <div class="texto-sc3-home2 card-img-overlay position-absolute d-flex justify-content-center align-items-center">
                  <p class="font-sc2-subtitle">mídia kit e<br>
                    <font class="font-sc2-title">downloads</font>
                  </p>
                </div>
              </div>
            </a>

          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="container-fluid-grid-item" style="width:100%;height:100%">
            <a href="#page-to">
              <div class="imagem-sc3-home3 position-relative">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sc4-3.png" alt="">
                <div class="texto-sc3-home3 card-img-overlay position-absolute d-flex justify-content-center align-items-center">
                  <p class="font-sc2-subtitle">anúcios<br>
                    <font class="font-sc2-title" style="color: blue;">personalizados</font>
                  </p>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="container-fluid-grid-item" style="width:100%;height:100%">
            <a href="#page-to">
              <div class="imagem-sc3-home4 position-relative">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sc4-4.png" alt="">
                <div class="texto-sc3-home4 card-img-overlay position-absolute d-flex justify-content-center align-items-center">
                  <p class="font-sc2-subtitle">conteúdos em<br>
                    <font class="font-sc2-title">primeira mão</font>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>






































    <!-- SEÇÃO 5 -->
  <section class="" id="a4" style="background-color: #195da8; padding-top: 60px;">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-justify text-sm-center">
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sc5-titulo.png" alt="">
          <div class="traco mt-3"></div>
          <p class="font-sc2-text mt-5 mb-4">
            Ao se cadastrar em nosso Portal do Agente, sua agência terá acesso aos melhores materiais de divulgação do Barretos Country Thermas Park. Desfrute de um conteúdo exclusivo e personalizado com a marca da sua empresa. Além de con-teúdos em PRIMEIRA MÃO, você ainda contará com o auxílio de nossa equipe de marketing, que fornecerá o suporte e acesso exclusivo a Mídia Kit completo, anúncios, materiais de campanha, flyers e muito mais, tudo isso com a sua marca.
          </p>
        </div>
      </div>
      <div class="row justify-content-center mt-3 sc5">
        <a href="https://barretoscountry.com.br/agente/marketing" class="" target="_blank">
          <button type="button" class="btn btn-outline-success">marketing</button>
        </a>
      </div>
    </div>
  </section>
  <div class="bg-sc5"></div>
















































    <!-- SEÇÃO 6 -->
  <section class="sc6_1" id="a6">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sc6-titulo.png" alt="">
          <div class="traco mt-3" style="border-bottom: 4px solid #ea5e85;"></div>
          <p class="font-sc2-text mt-5 mb-4 text-justify text-sm-center" style="color: #191919;">
            Já imaginou ter um ano todo com diversão, segurança e conforto garantidos? No Barretos Country Thermas Park, além de todos os benefícios, sua empresa aproveita de um vasto calendário de pacotes com ofertas imperdíveis de janeiro a janeiro. Agências cadastradas recebem com exclusividade nossos pacotes, valores e condições, além dos benefícios e comissionamento. 
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="pacotes slider sc6_2">
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/voucher">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/07/voucher-sub-1594653681.jpg&w=400&h=300">
        </a>
        <h3>Voucher da Diversão!</h3>
        <p>Aproveite agora, use até 2021 :D As férias que você merece, do jeito que você quiser!
        </p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/independencia">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/04/independencia-sub-1585744438.png&w=400&h=300">
        </a>
        <h3>Feriadão da Independência</h3>
        <p>Seu feriado com muito mais diversão no Resort Pé na Areia mais Country do Brasil</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/diadascriancas">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/06/diadascriancas-sub-1591303423.jpg&w=400&h=300">
        </a>
        <h3>Dia das Crianças</h3>
        <p>Venha se divertir igual criança no Resort Pé na Areia mais Country do Brasil</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/festa-do-peao">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/06/festa-do-peao-sub-1591990319.jpg&w=400&h=300">
        </a>
        <h3>Festa do Peão</h3>
        <p>Coloque o seu chapéu e curta o complexo mais Country do Brasil
        </p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/proclamacao-da-republica">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/06/proclamacao-da-republica-sub-1591301633.jpg&w=400&h=300">
        </a>
        <h3>Proclamação da República</h3>
        <p>Proclame a felicidade aqui no Barretos Country</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/natal">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/04/natal-sub-1586196866.png&w=400&h=300">
        </a>
        <h3>Natal</h3>
        <p>Se Papai Noel tivesse folga, ele iria correr pra curtir o BC!</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/reveillon">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/04/reveillon-sub-1586196173.png&w=400&h=300">
        </a>
        <h3>Réveillon 2021</h3>
        <p>Curta seu Réveillon na praia do BC</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/ferias-de-janeiro">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/04/ferias-de-janeiro-sub-1586259042.png&w=400&h=300">
        </a>
        <h3>Férias de Janeiro 2021</h3>
        <p>Fuja do Calor com muita diversão para toda a família.</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/carnaval2021">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/07/carnaval2021-sub-1594149716.png&w=400&h=300">
        </a>
        <h3>Carnaval 2021</h3>
        <p>Entre no Bloquinho do BC e curta a folia de Pé na Areia</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/pascoa">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/07/pascoa-sub-1594177217.png&w=400&h=300">
        </a>
        <h3>Páscoa 2021</h3>
        <p>Saboreie o melhor feriado no Resort mais Country do país.</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/tiradentes">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/07/tiradentes-sub-1594178261.png&w=400&h=300">
        </a>
        <h3>Tiradentes 2021</h3>
        <p>Fuja da correria do dia-a-dia e aproveite ao máximo o feriadão aqui no BC.</p>
      </div>

      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/diadotrabalho">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/07/diadotrabalho-sub-1594176949.png&w=400&h=300">
        </a>
        <h3>Dia do Trabalho 2021</h3>
        <p>No dia do trabalho dê folga ao stress e relaxe na praia!</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/corpus-christ">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/07/corpus-christ-sub-1594152371.png&w=400&h=300">
        </a>
        <h3>Corpus Christi 2021</h3>
        <p>Tenha o descanso merecido acompanhado de toda a família no feriadão de Corpus Christi</p>
      </div>
      <div class="PacotesItem t150">
        <a href="https://www.barretoscountry.com.br/ferias-de-julho">
          <img class="Cover"
            src="https://www.barretoscountry.com.br/tim.php?src=uploads/pages/2020/07/ferias-de-julho-sub-1594152306.png&w=400&h=300">
        </a>
        <h3>Férias de Julho 2021</h3>
        <p> As férias mais country do Brasil estão aqui</p>
      </div>
    </div>
  </section>












































  <section class="secao-footer" style="background-color: ;">
    <div class="container">

        <div class="row align-items-center">

          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 pb-3 d-block d-md-none"
          style="background-color: rgba(255, 0, 0, 0); width: 100%;margin-top: -150px;">
              <div class="news" style="background-color: rgba(52, 165, 42, 0);">
                  <div class="row h-100" style="">
                      <div class="col-6 col-sm-6 col-md-12 col-lg-12 col-xl-12 text-center text-md-left"
                          style="background-color: rgba(42, 50, 165, 0);">
                          <center>
                            <img src="<?php bloginfo('template_url'); ?>/images/footer-col2.png" height="" class="" style="max-height: 310px;">
                          </center>
                      </div>
                  </div>
              </div>
          </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"
                style="background-color: rgba(229, 255, 0, 0);">
                <div class="new" style="background-color: rgba(52, 165, 42, 0);margin-top: -10px;">
                    <div class="row justify-content-center justify-content-md-start">
                        <p class="font-footer-col1 text-center text-md-left">
                            <a href="https://barretoscountry.com.br/agente/admin/login" target="_blank" style="text-decoration: none;">login</a>
                        </p>
                    </div>
                    <div class="row justify-content-center justify-content-md-start" style="">
                        <p class="font-footer-col1 text-center text-md-left">
                            <a href="#a2" style="text-decoration: none;" class="js-scroll-trigger">benefícios</a>
                        </p>
                    </div>
                    <div class="row justify-content-center justify-content-md-start" style="">
                        <p class="font-footer-col1 text-center text-md-left">
                            <a href="#a3" style="text-decoration: none;" class="js-scroll-trigger">Cadastre sua agência</a>
                        </p>
                    </div>
                    <div class="row justify-content-center justify-content-md-start" style="">
                        <p class="font-footer-col1 text-center text-md-left">
                            <a href="#a4" style="text-decoration: none;" class="js-scroll-trigger">downloads</a>
                        </p>
                    </div>
                    <div class="row justify-content-center justify-content-md-start" style="">
                        <p class="font-footer-col1 text-center text-md-left">
                            <a href="#a6" style="text-decoration: none;" class="js-scroll-trigger">pacotes</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 d-none d-md-block"
            style="background-color: rgba(255, 0, 0, 0); width: 100%;margin-top: -150px;">
                <div class="news" style="background-color: rgba(52, 165, 42, 0);">
                    <div class="row h-100" style="">
                        <div class="col-6 col-sm-6 col-md-12 col-lg-12 col-xl-12"
                            style="background-color: rgba(42, 50, 165, 0);">
                            <img src="<?php bloginfo('template_url'); ?>/images/footer-col2.png" height="" class="secao-footer-img img-fluid" style="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"
                style="background-color: rgba(229, 255, 0, 0);">
                <div class="new" style="background-color: rgba(52, 165, 42, 0);">
                    <div class="row justify-content-center">
                        <img src="<?php bloginfo('template_url'); ?>/images/logo-footer.png" class="img-fluid mb-3" style="max-height: 60px;">
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 "
                            style="background-color: rgba(42, 50, 165, 0);">
                            <div class="text-center">
                              <a href="" class="icons text-right">
                                <span class="fab fa-facebook-square"></span>
                              </a>
                              <a href="" class="icons ml-1 text-right">
                                <span class="fab fa-instagram-square"></span>
                              </a>
                            </div>
                            
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8"
                            style="background-color: rgba(42, 50, 165, 0);">
                            <p class="font-footer-col3_1 text-center text-md-left">@barretoscountry</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <p class="font-footer-col3_2 text-center">Copyright 2020 © <b>Barretos Country Thermas Park</b></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>













    <?php get_footer(); ?>