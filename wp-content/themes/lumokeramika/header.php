<?php
// ** Header with menu **
?>



<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=1141">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title><?php echo wp_get_document_title();?></title>

    <?php wp_head(); ?>
    <meta name="yandex-verification" content="4fdccee49ff52b0e" />
    <meta name="yandex-verification" content="f7830f36d89e70ab" />
</head>
<body>
     <header>
         <div class="header">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-3 col-md-3">
                         <div class="wrap">
                             <div class="logo">
                                 <img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="Люмокерамика">
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6 col-md-6">
                         <div class="wrap">
                             <div class="wrap-phone">
                                 <p>8 (347) 271-54-28</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-3 col-md-3">
                         <div class="wrap">
                             <div class="wrap-button">
                                 <button class="btn-order">
                                     <img src="<?php echo get_template_directory_uri()?>/images/call.svg" alt="Call">
                                     <p>Заказать звонок</p>
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <nav class="navbar">
             <div class="container">
                 <!-- Brand and toggle get grouped for better mobile display -->
<!--                 <div class="navbar-default navbar-header">-->
<!--                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">-->
<!--                         <span class="sr-only">Toggle navigation</span>-->
<!--                         <span class="icon-bar"></span>-->
<!--                         <span class="icon-bar"></span>-->
<!--                         <span class="icon-bar"></span>-->
<!--                     </button>-->
<!--                     <div class="navbar-header-call">-->
<!--                         <div class="navbar-header-call-img">-->
<!--                             <img src="img/header/logo-mobile.svg" alt="Логотип">-->
<!--                         </div>-->
<!--                         <div class="navbar-header-call-phones">-->
<!--                             <p>8 (347) <span>271-54-28</span></p>-->
<!--                             <p>8 (937) <span>363-30-00</span></p>-->
<!--                         </div>-->
<!--                         <div class="navbar-header-call-handset">-->
<!--                             <div class="navbar-header-call-handset-img btn-order">-->
<!--                                 <img src="img/header/call.svg" alt="Телефонная трубка">-->
<!--                             </div>-->
<!--                         </div>-->
<!--                     </div>-->
<!--                 </div>-->
                 <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                         <ul class="nav navbar-nav">
                             <li><a class="slowly" href="#main">О компании</a></li>
                             <li><a class="slowly" href="#triggers">Преимущества</a></li>
                             <li><a class="slowly" href="#make">Производство</a></li>
                             <li><a class="slowly" href="#offer">Склад</a></li>
                             <li><a class="slowly" href="#production">Продукция</a></li>
                             <li><a class="slowly" href="#clients">Наши клиенты</a></li>
                             <li><a class="slowly" href="#feedback">Сертификаты</a></li>
                             <li><a class="slowly" href="#feedback">Отзывы</a></li>
                             <li><a class="slowly" href="#contacts">Контакты</a></li>
                         </ul>
                     </div>

             </div>

         </nav>


     </header>