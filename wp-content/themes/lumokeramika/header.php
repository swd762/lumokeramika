<?php

//** Theme header */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?php echo wp_get_document_title();?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/images/favicon.png" type="image/png">


    <?php wp_head(); ?>
<!--    <meta name="yandex-verification" content="4fdccee49ff52b0e" />-->
<!--    <meta name="yandex-verification" content="f7830f36d89e70ab" />-->
</head>
<body>
     <header>
         <div class="header">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-3 col-md-3">
                         <div class="wrap">
                             <div class="logo">
                                 <a href="/"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="Люмокерамика"></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6 col-md-6">
                         <div class="wrap">
                             <div class="wrap-phone">
                                 <a href="tel:+79272848574">+7 (927) 284-85-74</a>
                                 <a href="https://www.instagram.com/lumokeramika/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/insta-icon.png" alt="" style="width:30px">lumokeramika</a>
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
         <nav class="navbar navbar-default">
             <div class="container">
                 <!-- Toggler for mobile display -->
                 <div class="navbar-default navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>

                  <!-- New header block for mobile version instead native -->
                     <div class="navbar-header-call">
                         <div class="navbar-header-call-img">
                             <img src="<?php echo get_template_directory_uri()?>/images/favicon.png" alt="logo">
                         </div>
                         <div class="navbar-header-call-phones">
                             <a href="tel:+79272848574" class="small-visible-2">ООО "Люмокерамика"</a>
                             <a href="tel:+79272848574" class="small-visible-1">"Люмокерамика"</a>
                             <a href="tel:+79272848574">+7 (927) <span>284-85-74</span></a>
                         </div>
                         <div class="navbar-header-call-handset">
                            <div class="insta-button">
                                <a href="https://www.instagram.com/lumokeramika/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/instagram.svg" alt="instagram"></a>
                            </div>
                         </div>
                     </div>
                 </div>

                 <!-- Collect the nav links toggling -->
                 <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                     <?php
                     wp_nav_menu( array(
                         'menu_class'=>'nav navbar-nav',
                         'theme_location'=>'top',
                         'after'=>''
                     ) );
                     ?>
<!--                     <ul class="nav navbar-nav">-->
<!--                         <li><a class="slowly" href="#about">О компании</a></li>-->
<!--                         <li><a class="slowly" href="#gallery">Галерея</a></li>-->
<!--                         <li><a class="slowly" href="#products">Продукция</a></li>-->
<!--                         <li><a class="slowly" href="#advantage">Преимущества</a></li>-->
<!--                         <li><a class="slowly" href="#feedback">Сертификаты</a></li>-->
<!--                         <li><a class="slowly" href="#feedback">Отзывы</a></li>-->
<!--                         <li><a class="slowly" href="#">Каталог</a></li>-->
<!--                         <li><a class="slowly" href="#contacts">Контакты</a></li>-->
                     </ul>
                 </div>
             </div>
         </nav>
     </header>