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
            <div class="h2-mobile">
                <h2>ГАЛЕРЕЯ ИНТЕРЬЕРОВ</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="space"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <div class="gallery-view-box">
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/01.jpg" alt="Slider-img">
                            </div>
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/02.jpg" alt="Slider-img">
                            </div>
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/03.jpg" alt="Slider-img">
                            </div>
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/04.jpg" alt="Slider-img">
                            </div>
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/05.jpg" alt="Slider-img">
                            </div>
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/06.jpg" alt="Slider-img">
                            </div>
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/07.jpg" alt="Slider-img">
                            </div>
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/08.jpg" alt="Slider-img">
                            </div>
                        </div>
                        <div class="slider-nav-wrapper">
                            <div class="gallery-thumbnails-box hidden-xs wow fadeInUp" data-wow-delay="0.1s" data-wow-offset="150">
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/01.jpg" alt="Slider-img">
                                </div>
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/02.jpg" alt="Slider-img">
                                </div>
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/03.jpg" alt="Slider-img">
                                </div>
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/04.jpg" alt="Slider-img">
                                </div>
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/05.jpg" alt="Slider-img">
                                </div>
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/06.jpg" alt="Slider-img">
                                </div>
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/07.jpg" alt="Slider-img">
                                </div>
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/08.jpg" alt="Slider-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 hidden-xs hidden-sm">
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
<!--Products block-->
    <section id="products" class="products">
        <div class="container">
            <div class="products-header">
                <h2>НАША ПРОДУКЦИЯ</h2>
            </div>
            <div class="row">
                 <div class="col-sm-6 col-xs-12">
                     <div class="products-content">
                         <img src="<?php echo get_template_directory_uri()?>/images/products/product.png" alt="">
                         <h4>Пластина настенная</h4>
                         <div class="product-content-buttons">
                             <button class="product-button-more btn-more">Подробнее</button>
                             <button class="product-button-calc btn-order">Получить расчёт</button>
                         </div>
                     </div>
                 </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="products-content">
                        <img src="<?php echo get_template_directory_uri()?>/images/products/product.png" alt="">
                        <h4>Пластина настенная</h4>
                        <div class="product-content-buttons">
                            <button class="product-button-more btn-more">Подробнее</button>
                            <button class="button product-button-calc btn-order">Получить расчёт</button>
                            <button class="product-button-gallery btn-gallery">Выбрать принт</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="products-content">
                        <img src="<?php echo get_template_directory_uri()?>/images/products/product.png" alt="">
                        <h4>Пластина настенная</h4>
                        <div class="product-content-buttons">
                            <button class="product-button-more btn-more">Подробнее</button>
                            <button class="product-button-calc btn-order">Получить расчёт</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="products-content">
                        <img src="<?php echo get_template_directory_uri()?>/images/products/product.png" alt="">
                        <h4>Пластина настенная</h4>
                        <div class="product-content-buttons">
                            <button class="product-button-more btn-more">Подробнее</button>
                            <button class="product-button-calc btn-order">Получить расчёт</button>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </section>
<!--Advantages block-->
    <section id="advantage" class="advantage">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="advantage-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/advantage/offer.png" alt="">
                        <h3>НАШ ПРОДУКТ УНИКАЛЕН</h3>
                        <h3>ВО ВСЕХ ОТНОШЕНИЯХ</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advantage-box advantage-big">
                        <img src="<?php echo get_template_directory_uri()?>/images/advantage/25years.png" alt="">
                        <h3>ГАРАНТИЯ КАЧЕСТВА</h3>
                        <h3>25 ЛЕТ</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advantage-box">
                        <img src="<?php echo get_template_directory_uri()?>/images/advantage/best-quality.png" alt="">
                        <h3>продукт высокого</h3>
                        <h3>качества</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!--Feedback block-->
    <section id="feedback" class="feedback">
        <div class="container">
            <div class="production-header">
                <h2>Отзывы о сотрудничестве</h2>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="feedback-slider-nav wow flipInX" data-wow-offset="250">
                        <div class="feedback-slider-nav-block">
                            <img src="<?php echo get_template_directory_uri()?>/images/feedback/slider/01.jpg" alt="Slider-img">
                        </div>
                        <div class="feedback-slider-nav-block">
                            <img src="<?php echo get_template_directory_uri()?>/images/feedback/slider/02.jpg" alt="Slider-img">
                        </div>
                        <div class="feedback-slider-nav-block">
                            <img src="<?php echo get_template_directory_uri()?>/images/feedback/slider/03.jpg" alt="Slider-img">
                        </div>
                        <div class="feedback-slider-nav-block">
                            <img src="<?php echo get_template_directory_uri()?>/images/feedback/slider/04.jpg" alt="Slider-img">
                        </div>
                        <div class="feedback-slider-nav-block">
                            <img src="<?php echo get_template_directory_uri()?>/images/feedback/slider/05.jpg" alt="Slider-img">
                        </div>
                        <div class="feedback-slider-nav-block">
                            <img src="<?php echo get_template_directory_uri()?>/images/feedback/slider/06.jpg" alt="Slider-img">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<!--Contacts block-->
    <section id="contacts" class="contacts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="contacts-content wow bounceInLeft" data-wow-offset="250">
                        <div class="contacts-content-address">
                            <img src="<?php echo get_template_directory_uri()?>/images/contacts/location-icon.png" alt="">
                            <h2>Адрес офиса:</h2>
                            <p>414022, г. Астрахань,</p>
                            <p>ул. Н. Островского, 148, офис 422</p>
                        </div>
                        <div class="contacts-content-phone">
                            <img src="<?php echo get_template_directory_uri()?>/images/contacts/phone-icon.png" alt="">
                            <h2>Тел. отдела продаж:</h2>
                            <p>8 (347) 271-54-28</p>
                            <p>8 (937) 363-30-00</p>
                            <button class="button btn-order" onclick="yaCounter47126406.reachGoal('callback-btn'); return true;">Заказать звонок</button>
                        </div>
                        <div class="contacts-content-email">
                            <img src="<?php echo get_template_directory_uri()?>/images/contacts/email-icon.png" alt="">
                            <h2>E-mail:</h2>
                            <a href="mailto:urals.karton@gmail.com"><p>urals.karton@gmail.com</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="contacts-map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae54cc96e509c1f93b885acc4438cbc6d13b7035939e8ca5105a4c8c716cd008d&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>2019 (c) All rights reserved. lumokeramika.ru</p>
        </div>

    </footer>
<script>
       jQuery(function($) {
        /*Slick Script*/
        $('.gallery-view-box').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.gallery-thumbnails-box',
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

        $('.gallery-thumbnails-box').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<button class="making-arrow-prev"></button>',
            nextArrow: '<button class="making-arrow-next"></button>',
            asNavFor: '.gallery-view-box',
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

