<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link type="text/css" rel="stylesheet" href="./assets/src/fonts/manrope/manrope.css" />
    <link type="text/css" rel="stylesheet" href="./assets/src/fonts/Lato/lato.css" />
    <link type="text/css" rel="stylesheet" href="./assets/src/fonts/CormorantGaramond/stylesheet.css" />

    <!-- CDN -->
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="./assets/src/styles/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="./assets/src/styles/normalize.css" />
    <link type="text/css" rel="stylesheet" href="./assets/src/styles/styles.css" />
    <link type="text/css" rel="stylesheet" href="./assets/src/styles/form.css" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="./assets/favicon/site.webmanifest" />
    <link rel="mask-icon" href="./assets/img/logo.png" color="#5bbad5" />
    <meta property="og:title" content="RUKTI | Высококачественные услуги ногтевого сервиса в Хабаровске" />
    <meta property="og:description" content="RUKTI | Высококачественные услуги ногтевого сервиса в Хабаровске" />
    <meta property="og:image" content="./assets/img/logo.png" />
    <meta property="og:url" content="https://rukti-khv.ru" />

    <!-- Descriptions -->
    <meta name="description" content="RUKTI | Высококачественные услуги ногтевого сервиса в Хабаровске" />

    <!-- Keywords -->
    <meta name="keywords" content="маникюр, педикюр, ногтевой, сервис, Хабаровск, ногти, RUKTI, рукти, rukti " />
    <meta name="author" content="Andrej Spinej.ru" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="ru" />
    <meta name="og:url" content="https://rukti-khv.ru" />

    <!-- Title -->
    <title>RUKTI | Ногтевой сервис | Хабаровск</title>
</head>

<body>

    <?php include 'header.php' ?>
    </header>
    <main class="main">
        <button class="btn-popup-menu" id="popupMenuBtn">
            <img src="./assets/img/icons/chat-square-dots.svg" alt="Заявка" />
        </button>

        <section id="main-section" class="section-margin">
            <div class="main-section-wrapper container">
                <div class="main-section-wrapper__title">
                    <button id="buttonMessageMobile" class="header-btn btn mobile-btn">
                        Записаться онлайн
                    </button>
                    <h1>RUKTI НОГТЕВАЯ СТУДИЯ</h1>
                    <p>
                        Уютный салон в Хабаровске, где вас ждет широкий
                        спектр услуг и гостеприимная атмосфера.
                    </p>
                </div>

                <div class="main-section-wrapper__images">
                    <img data-aos="zoom-out-up" class="main-section-img-1" src="./assets/img/portfolio/04.webp"
                        alt=" Ногти Хабаровск примеры" />
                    <img data-aos="zoom-out-up" class="main-section-img-2" src="./assets/img/7.webp"
                        alt="Ногти Хабаровск примеры" />
                    <img data-aos="zoom-out-left" class="main-section-img-3" src="./assets/img/4.webp"
                        alt="Ногти Хабаровск примеры" />
                    <img data-aos="zoom-out-down" class="main-section-img-4" src="./assets/img/0.webp"
                        alt="Ногти Хабаровск примеры" />
                </div>
            </div>
        </section>
        <section id="servicesBlock" class="section-margin">
            <h2 class="services-title container">Услуги</h2>
            <div class="services-wrapper container">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                МАНИКЮР
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Аппаратный</li>
                                    <li>Комбинированный</li>
                                    <li>Японский</li>
                                    <li>Детский</li>
                                    <li>Мужской</li>
                                    <li>С покрытием гель лак</li>
                                    <li>Лак (декаративный)</li>
                                    <li>Наращивание на гелевые типсы</li>
                                    <li>Наращивание на верхние формы</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ПЕДИКЮР
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Аппаратный</li>
                                    <li>Эстетический</li>
                                    <li>Обработка пальцев</li>
                                    <li>Подология</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                КРАСИВЫЙ ГОТОВЫЙ ДИЗАЙН
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>
                                    Обнаружьте красоту и безопасность наших
                                    услуг для рук и ног! Наше тонкое
                                    покрытие обеспечивает элегантный и
                                    стильный вид, а готовый дизайн всегда
                                    соответствуют последним модным
                                    тенденциям. Побалуйте себя нашими
                                    услугами, которые сейчас становятся все
                                    более популярными!
                                </h3>
                                <ul>
                                    <li>Френч</li>
                                    <li>Втирка</li>
                                    <li>Мрамор</li>
                                    <li>Cтемпинг</li>
                                    <li>Пленки</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                ПОДОЛОГИЯ
                            </button>
                        </h2>
                        <div id="collapseFourth" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

                            <div class="accordion-body">
                                <h3 class="accordion__title">
                                    Уникальный педикюр на аппарате с подоспреем
                                    ждет вас!
                                </h3>
                                <ul>
                                    <li>Индивидуальные консультации</li>
                                    <li>
                                        Подологическая обработка ногтей
                                        (микоз , онихолизис)
                                    </li>
                                    <li>
                                        Подологическая обработка пальцев
                                    </li>
                                    <li>Зачистка трещин</li>
                                    <li>Зачистка микоза</li>
                                    <li>Обработка мозолей</li>
                                    <li>Обработка трещин</li>
                                    <li>Обработка вросшего ногтя</li>
                                    <li>Обработка мозолей</li>
                                    <li>
                                        Установка коррекционной системы
                                        (титановая нить)
                                    </li>
                                    <li>Определим размер стопы и обуви</li>
                                    <li>Подстричь ногти</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ
                            </button>
                        </h2>
                        <div id="collapseFifth" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Разгрузка</li>
                                    <li>Парафинотерапия</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-right-block">
                    <div data-aos="fade-left" class="services-image-wrapper-one">
                        <img class="services-img-first" src="./assets/img/10.webp" alt="Ногти Хабаровск" />
                    </div>

                    <div data-aos="fade-right" class="services-right-block__info">
                        <img class="services-img-second" src="./assets/img/1.webp" alt="Ногти Хабаровск" />
                        <p>
                            Наша студия- это место, где вы можете
                            расслабиться и насладиться профессиональным
                            уходом за руками. Вот уже 5 лет мы задаем
                            стандарты качества и безопасности в сфере
                            ногтевого сервиса
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="employees" class="employees section-margin">
            <h2 class="services-title container">Наши профессионалы</h2>
            <div data-aos="fade-up" class="masters-wrapper container">
                <div class="master-card">
                    <img class="master-image" src="./assets/img/master-2.webp" alt="Имя Фамилия" />
                    <h5>Вера Олеговна</h5>

                    <ul>
                        <li>Мастер маникюра и подолог..</li>
                        <li>Стаж с 2017 года</li>
                        <li>Аппаратный и комбинированный маникюр</li>
                    </ul>
                    <button class="btn">Записаться</button>
                </div>
                <div class="master-card">
                    <img class="master-image" src="./assets/img/master-3.webp" alt="Имя Фамилия" />
                    <h5>Ольга Дмитриевна</h5>
                    <ul>
                        <li>Мастер маникюра.</li>
                        <li>Стаж с 2016 года.</li>
                        <li>Аппаратный и комбинированный маникюр</li>
                        <li>
                            Проходила обучения в школе-
                            <strong>Моделон</strong>,
                            <strong>Кристалл</strong> и
                            <strong>Бруклин</strong> , Пилочный маникюр
                            школа <strong>Eco Nailss</strong>
                        </li>
                    </ul>
                    <button class="btn">Записаться</button>
                </div>
            </div>
        </section>
        <section id="about" class="section-margin">
            <div class="about-wrapper container">
                <h2 class="services-title">О нас</h2>
                <h6>
                    RUKTI - ваш персональный оазис красоты и ухода прямо в
                    сердце города!
                </h6>
                <div class="about-info">
                    <div data-aos="fade-up" class="about-card">
                        <img class="about-images" src="./assets/img/services/1-1.png" alt="Ногти Хабаровск" />
                        <p>
                            Мы специализируемся на широком спектре услуг по
                            уходу за ногтями. Неважно, ищете ли вы
                            классический декоративный лак или модное
                            покрытие гель-лаком, наши опытные мастера
                            превратят ваши ногти в произведение искусства!
                        </p>
                    </div>

                    <div data-aos="fade-up" class="about-card">
                        <img class="about-images" src="./assets/img/services/4-1.png" alt="Ногти Хабаровск" />
                        <p>
                            Но наше мастерство не ограничивается только
                            маникюром. Мы предлагаем высококачественный
                            педикюр, эстетический и аппаратный, а также
                            услуги подологии.
                        </p>
                    </div>

                    <div data-aos="fade-up" class="about-card">
                        <img class="about-images" src="./assets/img/services/2-1.png" alt="Ногти Хабаровск" />
                        <p>
                            Устали от борьбы с вросшими ногтями, бородавками
                            или мозолями? Мы здесь, чтобы помочь! Наши
                            специалисты мягко и тщательно обработают любые
                            проблемные зоны, обеспечивая комфорт и улучшение
                            здоровья ваших ног.
                        </p>
                    </div>

                    <div data-aos="fade-up" class="about-card">
                        <img class="about-images" src="./assets/img/services/5-1.png" alt="Ногти Хабаровск" />
                        <p>
                            В RUKTI мы заботимся о каждой детали вашего
                            опыта. Наша команда профессионалов проходит
                            ежегодное обучение, чтобы оставаться в курсе
                            последних тенденций и технологий в индустрии
                            ногтевого сервиса. Мы предлагаем широкий выбор
                            дизайна ногтей, чтобы подчеркнуть вашу
                            уникальность и стиль
                        </p>
                    </div>

                    <div data-aos="fade-up" class="about-card">
                        <img class="about-images" src="./assets/img/services/3-1.png" alt="Ногти Хабаровск" />
                        <p>
                            Наши мастера - настоящие профессионалы своего
                            дела, которые подходят к каждому клиенту с
                            вниманием и заботой. И помните, мы всегда
                            находимся на переднем крае инноваций в области
                            ногтевого сервиса.
                        </p>
                    </div>

                    <div data-aos="fade-up" class="about-card">
                        <img class="about-images" src="./assets/img/services/7-1.png" alt="Ногти Хабаровск" />
                        <p>
                            RUKTI - это не просто салон, это ваша дверь в
                            мир красоты, мастерства и ухода. Мы с
                            нетерпением ждем встречи с вами!
                        </p>
                    </div>
                </div>
                <div class="about-footer">
                    <h6>
                        Наша забота о вашем здоровье - это стерильность,
                        одноразовые расходники и профессионализм!
                    </h6>
                </div>
            </div>
        </section>
        <section id="testimonials" class="section-margin">
            <h2 class="services-title container">Отзывы</h2>
            <div class="testimonials-wrapper container">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <h5 class="testimonial-infoblock container">
                Посмотреть больше отзывов или оставить комментарий можно
                <a target="_blank" href="https://2gis.ru/khabarovsk/firm/70000001075870216">здесь</a>
            </h5>
            <p class="services-title-pay container">Наш салон предлагает вам удобство выбора оплаты: наличные или
                терминал.
                Наслаждайтесь комфортом!
            </p>
        </section>
        <div id="newMessage" class="new-message">
            <div class="new-message-form">
                <div class="new-message-title">
                    <h3>Онлайн запись</h3>
                    <button id="closeNewMessage">X</button>
                </div>

                <div class="form-message">
                    <form class="topBefore">
                        <input class="form-input" id="name" type="text" placeholder="ИМЯ" />
                        <input class="form-input" id="services" type="text" placeholder="ВВЕДИТЕ УСЛУГУ" />
                        <input class="form-input" id="tel" type="number" placeholder="ТЕЛЕФОН" />
                        <input class="form-input" id="submit" type="submit" value="Отправить" />
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- 
        <aside id="aside" class="aside">
            <div class="aside-wrapper container">

                ASIDE Новости акции
            </div>
        </aside> 
        -->

    <article id="contacts" class="contacts">
        <h2 class="services-title container">Онлайн запись</h2>
        <div class="contacts-block container">
            <div data-aos="fade-up" class="contacts-wrapper">
                <div class="form">
                    <form id="form" class="topBefore">
                        <input class="form-input" id="name" type="text" placeholder="ИМЯ" />
                        <input class="form-input" id="services" type="text" placeholder="ВВЕДИТЕ УСЛУГУ" />
                        <input class="form-input" id="tel" type="number" placeholder="ТЕЛЕФОН" />
                        <input class="form-input" id="submit" type="submit" value="Отправить" />
                    </form>
                </div>

                <div id="contactInfo" class="contacts-info">
                    <h5 class="contacts-address">Адрес</h5>
                    <a target="_blank" href="https://yandex.ru/maps/-/CDRHEAzw">г. Хабаровск, Льва Толстого 23, 1
                        этаж</a>
                    <h5>Телефоны</h5>
                    <a target="_blank" href="tel:+79941443525">+7 994 144 35 25</a>
                    <a target="_blank" href="tel:+79142025889">+7 914 202 58 89</a>
                    <h5>Часы работы</h5>
                    <a href="#contacts">Ежедневно с 10:00 до 20:00</a>
                </div>
            </div>

            <div data-aos="fade-up" class="map-wrapper">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa793a6ef0fa327ac39052cb01a2b53a3e720d57aa213b8a15303d364d193fc11&amp;source=constructor"
                    width="600" height="600" style="border: 0"></iframe>
            </div>
        </div>

        <div id="popup">
            <div class="popup-title">
                <h6>Оставьте заявку удобным вам способом!</h6>
            </div>

            <div class="popup-link">
                <a id="popupFormMessage" target="_blank" href="#"><img class="envelope-image"
                        src="./assets/img/icons/envelope-check.svg" alt="Оставить заявку" />
                    Оставить заявку</a>
                <a target="_blank" href="tel:+79941443525">
                    <img class="telephone-image" src="./assets/img/icons/telephone-fill.svg" alt="телефон" />+7 (994)
                    144 35 25</a>
                <a target="_blank" href="tel:+79142025889">
                    <img class="telephone-image" src="./assets/img/icons/telephone-fill.svg" alt="телефон" />+7 (914)
                    202 58 89</a>
                <a target="_blank" href="https://wa.me/+79941443525">
                    <img class="whatsapp-image" src="./assets/img/icons/whatsapp.svg" alt="whatsapp" />Написать в
                    WhatsApp</a>
                <a target="_blank" href="https://t.me/RUKTI_NAILS_KHV">
                    <img class="telegram-image" src="./assets/img/icons/telegram.svg" alt="telegram" />Написать в
                    Telegram</a>
            </div>
        </div>
    </article>
    <?php include 'footer.php'; ?>

    <script defer src="./assets/src/js/testimonials.js"></script>