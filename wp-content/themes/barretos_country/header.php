<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<html>

<head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/1/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/all.min.css">

  <!-- Animacao Rolagem -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Slide -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick-theme.css">


  
  <style type="text/css">
    .slider {
      width: 70%;
      margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 30px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      /*opacity: .2;*/
    }

      .beneficioss .slick-dots li button:before{
        font-size: 16px;
        color: white;
      }.campanhas_1 .slick-dots li button:before{
        font-size: 16px;
        color: #5f227e;
      }.pacotes .slick-dots li button:before{
        font-size: 16px;
        color: #45006a;
      }


    /*  PACOTES - HOME */

    .PacotesHome {
      padding: 40px 0;
      overflow: hidden;
    }

    /*

        .PacotesLista {
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
        }

        .PacotesLista */
    .PacotesItem {
      width: calc(33% - 10px);
      background: #ebf5f4;
      height: 400px;
      position: relative;
      padding: 3px;
      margin: 5px;
    }

    /*

        .PacotesLista */
    .PacotesItem:hover {
      -webkit-box-shadow: 10px 0 10px 10px rgba(0, 0, 0, .5);
      -moz-box-shadow: 10px 0 10px 10px rgba(0, 0, 0, .5);
      box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, .3);
      z-index: 10;
      transform: translateY(-20px) scale(1.05);
    }

    .PacotesItem .BallonPrice {
      background: url(https://www.barretoscountry.com.br/themes/barretoscountry2019/imgs/iconpacotes001.png) no-repeat;
      width: 132px;
      height: 111px;
      position: absolute;
      padding: 30px 0 0 25px;
      top: 200px;
    }

    .PacotesItem .Cover {
      width: 100%;
      object-fit: cover;
      height: 220px;
      object-position: top;
    }

    .PacotesItem h3 {
      padding-top: 20px;
      font-size: 1.5em;
      text-align: center;
      font-weight: 700;
      font-style: italic;
      color: #232859;
    }

    .PacotesItem p {
      text-align: center;
      padding: 0 20px;
      font-size: .9em;
    }

    .PacotesItem .BallonPrice p:nth-child(1),
    .PacotesItem .BallonPrice p:nth-child(2) {
      padding: 0;
      font-weight: 700;
      text-align: left;
      margin: 0;
    }

    .PacotesItem .BallonPrice p:nth-child(1) {
      color: #fff;
      text-transform: uppercase;
      font-size: .75em;
      line-height: .9em;
    }

    .PacotesItem .BallonPrice p:nth-child(2) {
      color: #232859;
      font-style: italic;
    }

    .PacotesItem:hover .BallonPrice {
      transform: scale(1.3) rotate(-5deg);
    }

    /* /PACOTES - HOME */






    .sc6_1 {
      padding-top: 60px;
    }

    .sc6_2 {
      padding-bottom: 80px;
      margin-top: 20px;
    }

  </style>

  
    <!-- Barra WP -->
    <?php wp_head(); ?>
</head>
