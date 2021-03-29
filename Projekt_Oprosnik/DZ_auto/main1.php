<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- https://cdnjs.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
     integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!--обнуляющий -->
    <link rel="stylesheet" href="css/zeroing.css">
    <!--подключение шрифта-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!--свои стили-->
    <link rel="stylesheet" href="css/style.css">
    <!--адаптив-->
    <link rel="stylesheet" href="css/adaptive.css">
</head>

<body>
    <!-- header  -->
    <header class="header">
        <!-- Bootstrap: class="container" -->
        <div class="container ">
            <div class="header__inner">
                <a class="logo" href="#">
                    <img class="logo__link" src="img/logo.png" alt="logo">
                </a>
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item"><a class="menu__list-link" href="#">О НАС</a></li>
                        <li class="menu__item"><a class="menu__list-link" href="#">АВТОПАРК</a></li>
                        <li class="menu__item"><a class="menu__list-link" href="#">ОТЗЫВЫ</a></li>
                        <li class="menu__item"><a class="menu__list-link" href="#">УСЛОВИЯ</a></li>
                        <li class="menu__item"><a class="menu__list-link" href="#">КОНТАКТЫ</a></li>
                    </ul>
                </nav>
                <a class="phone" href="tel:xxxxxxxxxxxx">+375 (29) 712 51 55 (МТС)</a>
            </div>
        </div>
    </header>
    <!-- Первый блок section -->
    <section class="top">
        <div class="container">
            <div class="top__heading">
                <!-- левая часть section "top" -->
                <div class="top__content">
                    <h1 class="top__title">
                        У НАС ЛУЧШИЕ АВТОМОБИЛИ И ЦЕНЫ!
                    </h1>
                    <p class="top__text">
                        На сайте компании представлен каталог автомобилей, в котором вы можете выбрать машину напрокат
                        без водителя на сутки, неделю, месяц (аренда на длительный срок стоит дешевле) или онлайн
                        забронировать машину с водителем минимально на час. Автопарк укомплектован моделями различных
                        ценовых категорий легковых автомобилей, пассажирских микроавтобусов, минивэнов и внедорожников
                        для комфортных поездок по Беларуси и с правом выезда за границу.
                    </p>
                    <a class="application-btn" href="#">Скачать приложение</a>
                </div>
                <!-- правая часть section "top" -->
                <div class="top__slider">
                    <!-- Bootstrap=>Components=>Carousel -->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="img/slider-img.png" class="d-block w-100 " alt="Машина">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                <h5 class="top__slider-text">
                                    <span>18 р/час</span>
                                    <span>5 мест</span>
                                    <span>25 тыс.км пробега</span>
                                </h5>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/slider-img1.png" class="d-block w-100" alt="Машина">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                <h5 class="top__slider-text">
                                    <span>15 р/час</span>
                                    <span>3 места</span>
                                    <span>10 тыс.км пробега</span>
                                </h5>
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider-img2.png" class="d-block w-100" alt="Машина">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                <h5 class="top__slider-text">
                                    <span>20 р/час</span>
                                    <span>5 мест</span>
                                    <span>5 тыс.км пробега</span>
                                </h5>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- левая часть section "top"-->
            <div class="top__bottom">
                <div class="top-items">
                    <div class="top__item">
                        <img class="top__item-img" src="img/icon-1.png" alt="">
                        <p class="top__item-text">
                            Аренда авто без водителя.
                        </p>
                    </div>
                    <div class="top__item">
                        <img class="top__item-img" src="img/icon-2.png" alt="">
                        <p class="top__item-text">
                            Каршеринг.
                        </p>
                    </div>
                    <div class="top__item">
                        <img class="top__item-img" src="img/icon-3.png" alt="">
                        <p class="top__item-text">
                            Прокат авто с водителем.
                        </p>
                    </div>
                </div>
                <!-- правая часть section "top"-->
                <div class="top__links">
                    <a class="top__link" href="#">Условия аренды автомобиля</a>
                    <a class="top__link" href="#">Публичный договор </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Второй блок section -->
    <section class="registr">
        <div class="container">
            <div class="registr__inner">
                <div class="registr__content">
                    <?php
                    include "include.php";
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Третий блок section -->
    <section class="benefits">
        <div class="container ">
            <h3 class="benefits__title">Преимущества</h3>
            <div class="benefits__items">
                <ul class="benefits__list">
                    <li class="benefits__list-item">Мы работаем по всей Беларуси.</li>
                    <li class="benefits__list-item">Бесплатная доставка автомобиля.</li>
                    <li class="benefits__list-item">Тариф "Выходной день" на аренду авто.</li>
                    <li class="benefits__list-item">Работаем 24/7.</li>
                    <li class="benefits__list-item">Тариф "7-е сутки в подарок".</li>
                    <li class="benefits__list-item">У нас нет скрытых наценок и дополнительных плат.</li>
                    <li class="benefits__list-item">Автомобили застрахованы. В стоимость аренды включена страховка.</li>
                </ul>
                <img class="benefits__images" src="img/benefits.png" alt="">
                <div class="benefits__content">
                    <p class="benefits__text">ЗАЧЕМ БЕРУТ МАШИНУ В ПРОКАТ ?
                        Для тест-драйва. Не знаете, какой личный автомобиль хотите: смарт, хэтчбек или универсал? С помощью проката авто вы сможете протестировать в деле разные форматы и классы, прочувствовать преимущества и недостатки и сделать правильный выбор.
                        Статусность. Качественный автомобиль поднимает самооценку и демонстрирует ваше положение перед партнерами. С ним вы обретете дополнительную уверенность и произведете нужное впечатление.
                        Для путешествий. Для путешественников и гостей города это самый удобный вариант добраться к достопримечательностям вовремя, удобно и быстро.
                        Свадебный кортеж. Арендуйте необходимое количество машин, чтобы удивить гостей и обеспечить их комфортный приезд к месту празднования.
                        Непредвиденные ситуации. Командировка, приезд друзей, отпуск? Прокат машины выручит в любой ситуации.</p>
                    <a class="video-popup" href=""> ПОСМОТРЕТЬ<br> ПРЕЗЕНТАЦИЮ</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Четвёртый  блок section -->
    <section class="reviews">
        <div class="container">
            <h3 class="reviews__title">
                Отзывы
            </h3>
            <!-- Bootstrap=>Components=>Carousel+ свои классы(reviews__slider,reviews__item,reviews__item-name,reviews__item-text, id="one,two,three")-->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="reviews__slider">
                            <div class="reviews__item" id="one">
                                <p class="reviews__item-name ">Елена, 36 лет</p>
                                <p class="reviews__item-text">Отличный сервис по аренде авто. Пользуемся уже пару
                                    месяцев. Эдуард - профессионал своего дела. Всегда найдет то, что ищет клиент.
                                    Автомобили в отличном состоянии, чистые. Обращаться будем к Вам за арендой,
                                    однозначно!</p>
                            </div>
                            <div class="reviews__item" id="three">
                                <p class="reviews__item-name">Максим, 20 лет</p>
                                <p class="reviews__item-text">Выбирал компанию по принципу минимизировать возможные
                                    доп. платежи и удержания по возврату авто, т.к. имелся ранее негативный опыт.
                                    Подкупило то что залог пообещали вернуть сразу по окончании аренды. Возврат
                                    происходил  в зоне вылета минского аэропорта, на все ушло не более 2-х минут,
                                    без каких-либо придирок и с полным возвратом ранее оставленного небольшого депозита</p>
                            </div>
                            <div class="reviews__item">
                                <p class="reviews__item-name">Ольга, 29 лет</p>
                                <p class="reviews__item-text">Самый лучший прокат авто в Беларуси!Высокий уровень
                                    обслуживания клиентов,машины в идеальном состоянии!Рекомендую.</p>
                            </div>
                            <div class="reviews__item" id="two">
                                <p class="reviews__item-name ">Сергей, 41 год</p>
                                <p class="reviews__item-text">Отличный сервис. Все вовремя. Всегда на связи. Привезли
                                    машину в аэропорт. Вовремя чистую. Оформили быстро без проблем. Машины как на фото!
                                    Оставлял машину в аэропорту, так же все без проблем. Приехал-забрали и пошел
                                    дальше... отличный сервис! Хорошие цены! Буду обращаться.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reviews__slider">
                            <div class="reviews__item " id="one">
                                <p class="reviews__item-name ">Павел, 36 лет</p>
                                <p class="reviews__item-text">Мы пользуемся прокатными автомобилями давно.
                                    С некоторых пор только через этот сайт бронируем, за несколько дней до поездки и
                                    всегда есть что нам подходит .</p>
                            </div>
                            <div class="reviews__item">
                                <p class="reviews__item-name">Юля, 25 лет</p>
                                <p class="reviews__item-text">На прокатном авто ездили первый раз, набрали допопций,
                                    Wi-Fi точно был лишний. Но все понравилось.</p>
                            </div>
                            <div class="reviews__item" id="three">
                                <p class="reviews__item-name">Вадим, 29 лет</p>
                                <p class="reviews__item-text">В общем всем довольны. Хотя долго сомневались,
                                    учитывая пандемию в мире. Не хотели рисковать и видя что выбор машин огромный,
                                    забронировали машину накануне вылета. Не пожалели. Это безопаснее чем общественный
                                    транспорт. Citroen C3 стоил 173,2 евро  на весь срок.</p>
                            </div>
                            <div class="reviews__item" id="two">
                                <p class="reviews__item-name two">Ирина, 38 лет</p>
                                <p class="reviews__item-text">Круглосуточная поддержка! Причем грамотные диспетчера
                                    и всегда есть вариант решения вашего вопроса. Отлично.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Пятый  блок section -->
    <section class="feedback">
        <div class="container">
            <div class="feedback__inner">
                <img class="feedback__images" src="img/feedback-img.png" alt="">
                <form class="feedback__form" action="">
                    <h3 class="feedback__title">Остались вопросы?</h3>
                    <p class="feedback__text">Мы перезвоним Вам и проконсультируем по любому вопросу</p>
                    <input class="feedback__input" type="text" placeholder="Имя">
                    <input class="feedback__input" type="text" placeholder="Телефон">
                    <button class="feedback__btn" type="submit">ОСТАВИТЬ ЗАЯВКУ</button>
                </form>
            </div>
        </div>
    </section>
    <!-- footer-->
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__top">
                    <form class="footer__form" action="admin.php" method="post">
                        <p class="footer__title">Войти под правами администратора</p>
                        <input class="footer__input" type="text" name="email" placeholder="Email" >
                        <input class="footer__input" type="text" name="password" placeholder="Password">
                        <button class="footer__btn" type="submit">Войти</button>
                    </form>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item"><a class="menu__list-link" href="#">О НАС</a></li>
                            <li class="menu__item"><a class="menu__list-link" href="#">АВТОПАРК</a></li>
                            <li class="menu__item"><a class="menu__list-link" href="#">ОТЗЫВЫ</a></li>
                            <li class="menu__item"><a class="menu__list-link" href="#">УСЛОВИЯ</a></li>
                            <li class="menu__item"><a class="menu__list-link" href="#">КОНТАКТЫ</a></li>
                        </ul>
                    </nav>
                    <a class="phone" href="tel:xxxxxxxxxxxx">+375 (29) 712 51 55 (МТС)</a>
                </div>
                <ul class="footer__social">
                    <li class="footer__social-item"><a class="footer__social-link" href="#"><img class="footer__social-img" src="img/facebook.png"></a></li>
                    <li class="footer__social-item"><a class="footer__social-link" href="#"><img class="footer__social-img" src="img/instagram.png"></a></li>
                    <li class="footer__social-item"><a class="footer__social-link" href="#"><img class="footer__social-img" src="img/email.png"></a></li>
                </ul>
                <div class="footer__text">
                    Онлайн-опрос © 2021 ZaicevRustam Все права защищены
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap: js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>