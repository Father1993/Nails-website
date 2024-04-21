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

    <meta property="og:title" content="RUKTI | Прайс услуги ногтевого сервиса в Хабаровске" />
    <meta property="og:description" content="RUKTI | Прайс услуги ногтевого сервиса в Хабаровске" />
    <meta property="og:image" content="https://rukti-khv.ru/assets/img/logo.png" />
    <meta property="og:url" content="https://rukti-khv.ru/price" />

    <!-- Descriptions -->
    <meta name="description" content="RUKTI | Прайс услуги ногтевого сервиса в Хабаровске" />

    <!-- Keywords -->
    <meta name="keywords"
        content="цена, прайс, маникюр, педикюр, ногтевой, сервис, Хабаровск, ногти, RUKTI, рукти, rukti " />
    <meta name="author" content="Andrej Spinej.ru" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="ru" />
    <meta name="og:url" content="https://rukti-khv.ru/price" />

    <!-- Title -->
    <title>RUKTI | Прайс | Цены Хабаровск</title>
</head>

<body>
    <?php include 'header.php' ?>
    </header>

    <main>
        <section id="priceBlock" class="price__block">
            <div class="price-block__wrapper container">
                <img class="price-block__img" src="./assets/img/price_1.jpg" alt="Прайс">
                <img class="price-block__img" src="./assets/img/price_1.jpg" alt="Цены на услуги">
            </div>
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
        </section>

    </main>

    <footer id="footer" class="footer">
        <?php include 'footer.php'; ?>
    </footer>