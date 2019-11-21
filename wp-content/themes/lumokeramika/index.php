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
    <section id="galley" class="gallry">
        <div class="gallery-overlay">
            <div class="container">
                <div class="row">


                </div>
            </div>
        </div>
    </section>


</body>
<?php
    get_footer();
?>

