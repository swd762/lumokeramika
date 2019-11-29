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
                                <form class="bid" action="<?php echo get_template_directory_uri()?>/mailer/mail.php" method="POST">
                                    <p>Получите индивидуальное предложение на поставку светящейся плитки или мозики</p>
                                    <input id="phone_1" name="user_phone" type="tel" required placeholder="Введите номер телефона">
                                    <button class="button" <?php //onclick="yaCounter47126406.reachGoal('bid-btn'); return true;"?> type="submit">Оставить заявку!</button>
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
    <section id="gallery" class="gallery">
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
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/09.jpg" alt="Slider-img">
                            </div>
                            <div class="gallery-view-box-block">
                                <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/10.jpg" alt="Slider-img">
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
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/09.jpg" alt="Slider-img">
                                </div>
                                <div class="gallery-thumbnails-box-block">
                                    <img src="<?php echo get_template_directory_uri()?>/images/gallery/slider/10.jpg" alt="Slider-img">
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
                                <p>Варианты применения отделочных материалов Luxor в дизайне интерьеров.</p>
                                <p>Отделка ванных комнат, душевых и туалетов</p>
                                <p>Отделка кухонных зон</p>
                                <p>Отделка интерьеров жилых помещений</p>
                                <p>Отделка пола</p>
                                <p>Создание настенных панно</p>
                                <p>Отделка саун и бассейнов</p>
                                <p>Наружная отделка фасадов</p>
                                <p>Отделка искусственных каминов</p>
                                <p>Отделка ночных клубов, кафе, ресторанов</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Products block-->
    <section id="products" class="products">
        <div class="h2-mobile">
            <h2>НАША ПРОДУКЦИЯ</h2>
        </div>
        <div class="container">
            <div class="col-md-12 hidden-xs hidden-sm products-header">
                <h2>НАША ПРОДУКЦИЯ</h2>
            </div>
            <div class="row">
                 <div class="col-sm-6 col-xs-12">
                     <div class="products-content wow fadeInLeft" data-wow-offset="300"">
                         <img src="<?php echo get_template_directory_uri()?>/images/products/product.png" alt="Фото продукта">
                         <h4>Панель декоративная настенная</h4>
                         <div class="product-content-buttons">
                             <button class="product-button-more btn-more prod1">Подробнее</button>
                             <button class="button product-button-calc btn-order">Получить расчёт</button>
                         </div>
                     </div>
                 </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="products-content wow fadeInRight" data-wow-offset="300"">
                        <img src="<?php echo get_template_directory_uri()?>/images/products/product.png" alt="Фото продукта">
                        <h4>Панель декоративная потолочная</h4>
                        <div class="product-content-buttons">
                            <button class="product-button-more btn-more prod4">Подробнее</button>
                            <button class="button product-button-calc btn-order">Получить расчёт</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="products-content wow fadeInLeft" data-wow-offset="300"">
                        <img src="<?php echo get_template_directory_uri()?>/images/products/product2.png" alt="Фото продукта">
                        <h4>Отделочная плитка</h4>
                        <div class="product-content-buttons">
                            <button class="product-button-more btn-more prod2">Подробнее</button>
                            <button class="button product-button-calc btn-order">Получить расчёт</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="products-content wow fadeInRight" data-wow-offset="300"">
                        <img src="<?php echo get_template_directory_uri()?>/images/products/product3.png" alt="Фото продукта">
                        <h4>Мозаика</h4>
                        <div class="product-content-buttons">
                            <button class="product-button-more btn-more prod3">Подробнее</button>
                            <button class="button product-button-calc btn-order">Получить расчёт</button>
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
                    <div class="advantage-box  wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="150"">
                        <img src="<?php echo get_template_directory_uri()?>/images/advantage/offer.png" alt="значек">
                        <h3>НАШ ПРОДУКТ УНИКАЛЕН</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advantage-box advantage-big  wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="150"">
                        <img src="<?php echo get_template_directory_uri()?>/images/advantage/25years.png" alt="значек">
                        <h3>ГАРАНТИЯ производителя 20 ЛЕТ</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advantage-box wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="150"">
                        <img src="<?php echo get_template_directory_uri()?>/images/advantage/best-quality.png" alt="значек">
                        <h3>продукт высокого качества</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!--Feedback block-->
    <section id="feedback" class="feedback">
        <div class="h2-mobile">
            <h2>сертификаты и отзывы о сотрудничестве</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 hidden-xs hidden-sm feedback-header">
                    <h2>сертификаты и отзывы о сотрудничестве</h2>
                </div>
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
                <div class="col-sm-12">
                    <div class="contacts-content wow bounceInLeft" data-wow-offset="250">
                        <div class="contacts-content-address">
                            <img src="<?php echo get_template_directory_uri()?>/images/contacts/location-icon.png" alt="иконка локации">
                            <h2>Адрес офиса:</h2>
                            <p>414022 г. Астрахань</p>
                            <p>ул. Н. Островского 148</p>
                            <p>офис 422</p>
                        </div>
                        <div class="contacts-content-phone">
                            <img src="<?php echo get_template_directory_uri()?>/images/contacts/phone-icon.png" alt="иконка телефона">
                            <h2>Тел. отдела продаж:</h2>
                            <p>+7 (927) 284-85-74</p>
                            <button class="button btn-order" onclick="yaCounter47126406.reachGoal('callback-btn'); return true;">Заказать звонок</button>
                        </div>
                        <div class="contacts-content-email">
                            <img src="<?php echo get_template_directory_uri()?>/images/contacts/email-icon.png" alt="иконка email">
                            <h2>E-mail:</h2>
                            <a href="mailto:lumo19@yandex.ru"><p>lumo19@yandex.ru</p></a>
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





<?php
    get_footer();
?>

