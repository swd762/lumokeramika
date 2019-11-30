<?php
?>
    <footer>
        <div class="container">
            <p>© www.lumokeramika.ru 2019, все права защищены</p>
        </div>
    </footer>
<!-- Modal windows -->
<!-- The message is sent -->
        <div class="popup-thanks">
            <div class="popup-thanks-dialog">
                <div class="popup-thanks-content">
                    <button class="popup-thanks-close">&times;</button>
                    <h4 class="popup-thanks-header">
                        Спасибо за обращение
                    </h4>
                    <br>
                    <p>Мы свяжемся с Вами<br>в ближайшее время!</p>
                </div>
            </div>
        </div>

        <!-- Feedback form -->
        <div class="popup-feedback">
            <div class="popup-feedback-dialog">
                <div class="popup-feedback-content">
                    <button class="popup-feedback-close">&times;</button>
                    <h4 class="popup-feedback-header">
                        Форма обратной связи
                    </h4>
                    <form class="bid" action="<?php echo get_template_directory_uri()?>/mailer/mail.php" method="POST">
                        <p>Получите индивидуальное предложение</p>
                        <span>на поставку светящейся плитки или мозики</span>
                        <p class="light">Введите ваш номер телефона:</p>
                        <input id="phone_3" name="user_phone" type="tel" required placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ">
                        <button class="button btn-sent" <?phph //onclick="yaCounter47126406.reachGoal('bid-btn'); return true;"?> type="submit">Оставить заявку!</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- More form -->
        <div class="popup-more">
            <div class="popup-more-dialog">
                <div class="container">
                    <div class="popup-more-content">
                        <button class="popup-more-close">&times;</button>
                        <h4 class="popup-more-header">
                            Панель декоративная настенная (Размер 21*29,7 см. Толщина 2,5мм.)
                        </h4>

                        <div class="popup-more-content-text">
                            <p class="discription-js"><strong>Характеристики: </strong><span></span></p>
                            <p><strong>Описание: </strong>Отделочные материалы Luxor, изготавливаются в заводских условиях из высококачественных импортных полимеров.
                                Принцип свечения основан на накоплении люменов от любого источника света и отдаче их в форме видимого свечения в тёмное время суток.
                                Яркость и продолжительность свечения зависит от времени нахождения на свету и яркости источника света, максимально яркая светимость наблюдается в течении первых 20 минут после чего начинает снижаться в течении 8 часов. Для возобновления свечения достаточно ненадолго включить свет, и свечение возобновится с прежней яркостью. Количество циклов подзарядки и свечения не ограничено.
                                Срок службы 15-20 лет.
                                На все материалы получен Российский сертификат качества.
                                Днём отделочные материалы имеют чисто белый цвет, в темноте светятся лёгким бело-зелёным свечением.
                                Все материалы крепятся к поверхностям на жидкие прозрачные гвозди и сухие строительные смеси.</p>
                            <p><strong>Рекомендации по печати: </strong> на материалы Luxor можно нанести любой принт, но все же существуют некоторые ограничения.
                                Вот рекомендации от наших партнеров - <a href="<?php echo get_template_directory_uri()?>/images/modal/print-recomend.jpg" target="_blank">Памятка по подготовке макетов</a>
                                Так же, если Вы не определились с принтом - можете его выбрать в <a href="https://redcatkupe.ru/fotopechat/category/121.html" target="_blank">партнерском каталоге</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(56462173, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56462173" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->






<script>
    jQuery(function($){
        $("#phone_1").mask("+7 (999) 999-99-99");
        $("#phone_2").mask("+7 (999) 999-99-99");
        $("#phone_3").mask("+7 (999) 999-99-99");
        $("#phone_4").mask("+7 (999) 999-99-99");
    });
</script>


<script>
    jQuery(function($) {



        $('.popup-thanks-close').on('click', function(event) {
            event.preventDefault();
            $('.popup-thanks').fadeOut();
            $('.popup').fadeOut();
        });
        /* --------------------------------------*/
        $('.btn-order').on('click', function(event) {
            event.preventDefault();
            $('.popup-feedback').fadeIn();
        });

        $('.popup-feedback-close').on('click', function(event) {
            event.preventDefault();
            $('.popup-feedback').fadeOut();
        });
        /* --------------------------------------*/
        $('.prod1').on('click', function(event) {
            event.preventDefault();
            $('.popup-more-header').text('Панель декоративная настенная');
            $('.popup-more .discription-js span').text('Декоративная панель 21*29,7 см. Толщина 2,5мм. С внутренней стороны расположены углубления для нанесения жидких гвоздей.');
            $('.popup-more').fadeIn();
        });
        $('.prod2').on('click', function(event) {
            event.preventDefault();
            $('.popup-more-header').text('Отделочная плитка');
            $('.popup-more .discription-js span').text('Отделочная плитка 10*10 см. Толщина 4,5мм. Обратная сторона имеет выпуклые ребра для более прочной фиксации с раствором. На всех материалах имеется логотип нашей компании.');
            $('.popup-more').fadeIn();
        });
        $('.prod3').on('click', function(event) {
            event.preventDefault();
            $('.popup-more-header').text('Мозаика');
            $('.popup-more .discription-js span').text('Мозаика 3*3 см. Толщина 4мм. С обратной стороны имеется углубление для прочной сцепки с раствором. Выпускается в двух вариациях – белая и прозрачная 3 цветов (красный, синий, зелёный)');
            $('.popup-more').fadeIn();
        });
        $('.prod4').on('click', function(event) {
            event.preventDefault();
            $('.popup-more-header').text('Панель декоративная потолочная');
            $('.popup-more .discription-js span').text('Декоративная панель 21*29,7 см. Толщина 2,5мм. С внутренней стороны расположены углубления для нанесения жидких гвоздей. Рекомендована для спален');
            $('.popup-more').fadeIn();
        });
        $('.popup-more-close').on('click', function(event) {
            event.preventDefault();
            $('.popup-more').fadeOut();
        });

        //*********Slick Script*************************************************************/
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
            prevArrow: '<button class="making-arrow-prev"></button>',
            nextArrow: '<button class="making-arrow-next"></button>',
            // prevArrow: '<button class="prev arrow"></button>',
            // nextArrow: '<button class="next arrow"></button>',
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
        // ***************************************************************************

        // ***** Кнопка вверх ********************************************************

        $(".slowly").on("click", function (event) {
            /*Отменяем стандартную обработку нажатия по ссылке.*/
            event.preventDefault();
            /*Забираем идентификатор блока с атрибута href.*/
            let id = $(this).attr('href'),
                /*Узнаём высоту от начала страницы до блока, на который ссылается якорь.*/
                top = $(id).offset().top;
            /*Анимируем переход на расстояние - top за 1000ms.*/
            $('body,html').animate({scrollTop: top}, 600);
        });
        $(document).ready(function() {

            let defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };


            $().UItoTop({ easingType: 'easeOutQuart' });

        });
        // ************************************************************************

        /*Mailer*/
        $('.bid').submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo get_template_directory_uri()?>/mailer/mail.php",
                data: $(this).serialize()
            }).done(function() {
                $(this).find("input").val("");
                $('.popup-feedback').fadeOut();
                $('.popup-more').fadeOut();
                $('.popup-thanks').fadeIn();
                $("form").trigger("reset");
            });
            return false;
        });
    });
</script>
<script>
    new WOW().init();
</script>

    </body>
</html>