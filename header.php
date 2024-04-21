<!-- Loader mask -->
<div id="mask" class="mask">
    <div class="loader"></div>
</div>

<div id="menuMask">
    <button id="menuCloseBtn">X</button>
    <nav class="menu-nav">
        <ul class="menu-list">
            <li class="menu-items">
                <a class="menu-item" href="./index.php">Главная</a>
            </li>
            <li class="menu-items">
                <a class="menu-item" href="./index.php#servicesBlock">Услуги</a>
            </li>
            <li class="menu-items">
                <a class="menu-item" href="./index.php#employees">Мастера</a>
            </li>
            <li class="menu-items">
                <a class="menu-item" href="./index.php#about">О нас</a>
            </li>
            <li class="menu-items">
                <a class="menu-item" href="./index.php#testimonials">Отзывы</a>
            </li>
            <li class="menu-items">
                <a class="menu-item" href="./portfolio.php">Портфолио</a>
            </li>
            <li class="menu-items">
                <a class="menu-item" href="./price.php">Прайс</a>
            </li>
            <li class="menu-items">
                <a class="menu-item" href="./index.php#contactInfo">Контакты</a>
            </li>
        </ul>
    </nav>
</div>

<header class="header">
    <div class="header__first-row container">
        <div class="header__logo-wrapper">
            <div class="header__logo-wrapper--logo">
                <a href="./index.php">
                    <img class="header-logo" decoding="async" src="./assets/img/logo.png" alt="Rukti-Логотип" />
                </a>
                <a href="./index.php">RUKTI</a>
            </div>

            <div id="dropDown" class="dropdown">
                <button class="menu-image-btn">
                    <img class="menu-image" src="./assets/img/icons/list.svg" alt="Кнопка меню" />
                </button>
            </div>


            <button class="btn-popup-menu" id="popupMenuBtn">
                <img src="./assets/img/icons/chat-square-dots.svg" alt="Заявка" />
            </button>
        </div>

        <div class="header__address-wrapper">
            <div class="header__icons-wrapper">
                <div class="header-icons">
                    <img decoding="async" src="./assets/img/icons/geo-alt-fill.svg" alt="Адрес" />
                </div>
                <div>
                    <h6 class="header__info">Адрес</h6>
                    <a class="header__link" target="_blank" href="https://yandex.ru/maps/-/CDRHEAzw">Льва Толстого 23, 1
                        этаж</a>
                </div>
            </div>

            <div class="header__icons-wrapper">
                <div class="header-icons">
                    <img decoding="async" src="./assets/img//icons/telephone-fill.svg" alt="Телефон" />
                </div>
                <div>
                    <h6 class="header__info">Телефон</h6>
                    <a target="_blank" class="header__link telephone" href="tel:+79941443525">+7 994 144 35 25</a>
                </div>
            </div>
            <div class="header__icons-wrapper">
                <div class="header-icons">
                    <img decoding="async" src="./assets/img/icons/clock.svg" alt="Часы работы" />
                </div>
                <div>
                    <h6 class="header__info">Часы работы</h6>
                    <a class="header__link" href="#contacts">Ежедневно с 10:00 до 20:00</a>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="header-second-row container">
        <nav>
            <ul class="header-menu">
                <li>

                    <a href="./index.php">Главная</a>
                </li>
                <li>
                    <a href="./index.php#servicesBlock">Услуги</a>
                </li>
                <li>
                    <a href="./index.php#employees">Мастера</a>
                </li>
                <li>
                    <a href="./index.php#about">О нас</a>
                </li>
                <li>
                    <a href="./index.php#testimonials">Отзывы</a>
                </li>
                <li>
                    <a href="portfolio.php">Портфолио</a>

                </li>
                <li>
                    <a href="price.php">Прайс</a>
                </li>
                <li>

                    <a href="./index.php#contactInfo">Контакты</a>

                </li>
            </ul>
        </nav>

        <button id="buttonMessage" class="header-btn btn">
            Записаться онлайн
        </button>

    </div>