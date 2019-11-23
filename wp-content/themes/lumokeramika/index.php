<?php
    get_header();
?>

<!--Main block-->
    <main id="main" class="main">
        <div class="main-overlay">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-5">
                        <div class="main-boxes">
                            <img src="<?php echo get_template_directory_uri()?>/images/main/round.png" alt="Окружность" class="main-boxes-1 wow fadeInUp">
                            <img src="<?php echo get_template_directory_uri()?>/images/main/boxes.png" alt="Коробки" class="main-boxes-2 wow fadeInLeft">
                            <img src="<?php echo get_template_directory_uri()?>/images/main/symbol.png" alt="РСТ" class="main-boxes-3 wow fadeInRight">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="main-form">
                            <div class="main-form-wrapper">
                                <div class="main-form-wrapper-header">
                                    <h1>Продажа эксклюзивной плитки</h1>
                                    <h1>светящейся в темноте</h1>
                                    <p>с доставкой по всей России</p>
                                </div>
                                <form class="bid" action="mailer/smart.php" method="POST">
                                    <p>Получите индивидуальное предложение на поставку светящейся плитки или мозики<br><span>Образцы бесплатно!</span></p>
                                    <input id="phone_1" name="user_phone" type="tel" required placeholder="Введите номер телефона">
                                    <button class="button" onclick="yaCounter47126406.reachGoal('bid-btn'); return true;" type="submit">Оставить заявку!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!--About block-->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="pic-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/about/about-pic.jpg" alt="о компании">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="text-box">
                        <h2>О компании "люмокерамика"</h2>
                        <p>Мы являемся <span>эксклюзивным</span> представителем
                        полимерных отделочных материалов «LUXOR» в поволжье</p>
                        <p>Материалы «LUXOR»</p>
                        <ul>
                            <li>высококачественные</li>
                            <li>экологичные</li>
                            <li>ударопрочные</li>
                            <li>устойчивы к высоким температурам</li>
                            <li><span>светятся в темноте</span></li>
                        </ul>
                        <p>Подобной продукции пока нигде нет, ни в нашем регионе
                        ни в России, ни за её пределами!</p>
                        <p>Благодаря сочетанию всей нашей продукции дизайнеры
                            смогут не ограничивать свою фантазию
                            и воплощать даже самые фантастические дизайн-проекты</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Gallery block-->
    <section id="galley" class="gallery">
        <div class="gallery-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="space"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="making-slider-for">
                            <div class="making-slider-for-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/slider/01.jpg" alt="Slider-img">
                            </div>
                            <div class="making-slider-for-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/slider/02.jpg" alt="Slider-img">
                            </div>
                            <div class="making-slider-for-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/slider/03.jpg" alt="Slider-img">
                            </div>
                            <div class="making-slider-for-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/slider/04.jpg" alt="Slider-img">
                            </div>
                            <div class="making-slider-for-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/slider/05.jpg" alt="Slider-img">
                            </div>
                            <div class="making-slider-for-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/slider/06.jpg" alt="Slider-img">
                            </div>
                            <div class="making-slider-for-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/slider/07.jpg" alt="Slider-img">
                            </div>
                            <div class="making-slider-for-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/slider/08.jpg" alt="Slider-img">
                            </div>
                        </div>
                        <div class="slider-nav-wrapper">
                            <div class="making-slider-nav hidden-xs wow fadeInUp" data-wow-delay="0.1s" data-wow-offset="150">
                                <div class="making-slider-nav-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/slider/01.jpg" alt="Slider-img">
                                </div>
                                <div class="making-slider-nav-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/slider/02.jpg" alt="Slider-img">
                                </div>
                                <div class="making-slider-nav-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/slider/03.jpg" alt="Slider-img">
                                </div>
                                <div class="making-slider-nav-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/slider/04.jpg" alt="Slider-img">
                                </div>
                                <div class="making-slider-nav-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/slider/05.jpg" alt="Slider-img">
                                </div>
                                <div class="making-slider-nav-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/slider/06.jpg" alt="Slider-img">
                                </div>
                                <div class="making-slider-nav-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/slider/07.jpg" alt="Slider-img">
                                </div>
                                <div class="making-slider-nav-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/slider/08.jpg" alt="Slider-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-xs hidden-sm">
                        <div class="gallery-description">
                            <div class="gallery-description-header">
                                <h2>ГАЛЕРЕЯ ИНТЕРЬЕРОВ</h2>
                            </div>
                            <div class="gallery-description-text-block">
                                <p>так наша плитка выглядит в интерьерах</p>
                                <p>так наша плитка выглядит в интерьерах</p>
                                <p>так наша плитка выглядит в интерьерах</p>
                                <p>так наша плитка выглядит в интерьерах</p>
                                <p>так наша плитка выглядит в интерьерах</p>

                            </div>
                        </div>

                    </div>
                        <!--                        <div class="gallery-view-box">-->
<!---->
<!--                        </div>-->
<!--                        <div class="gallery-thumbnails-box">-->
<!---->
<!--                        </div>-->
<!--
                    </div>
                    <div class="hidden-xs hidden-sm col-md-6">-->
<!--                        <div class="gallery-description">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="products">
        <div class="container">
            <div class="products-header">
                <h2>НАША ПРОДУКЦИЯ</h2>
            </div>
            <div class="row">
                 <div class="col-sm-6 col-xs-12">
                     <div class="products-content">
                         <img src="" alt="">
                         <h4>Пластина настенная</h4>
                     </div>
                 </div>







            </div>
        </div>
    </section>
<script>
       jQuery(function($) {
        /*Slick Script*/
        $('.making-slider-for').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.making-slider-nav',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        prevArrow: '<button class="making-arrow-prev"></button>',
                        nextArrow: '<button class="making-arrow-next"></button>',
                    }
                },
            ]
        });

        $('.making-slider-nav').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<button class="making-arrow-prev"></button>',
            nextArrow: '<button class="making-arrow-next"></button>',
            asNavFor: '.making-slider-for',
            dots: false,
            arrows: true,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
            ]
        });


        $('.feedback-slider-nav').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<button class="prev arrow"></button>',
            nextArrow: '<button class="next arrow"></button>',
            arrows: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        prevArrow: '<button class="making-arrow-prev"></button>',
                        nextArrow: '<button class="making-arrow-next"></button>',
                    }
                },
            ]
        });
    });
</script>
</body>
<?php
    get_footer();
?>

