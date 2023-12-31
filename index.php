<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/app.css">
    <link rel="stylesheet" href="style/fonts.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta mame="description" content="Интеллектуальная собственность">
    <meta mame="keywords" content="Интеллектуальная собственность">
    <meta name="googlebot" content="notranslate">

    <title>Главная</title>
</head>

<body>
    <!-- SVG -->
    <svg style="display: none">
        <symbol id="login" viewBox="200 -200 1024 1024">
            <g transform="translate(0,1024) scale(0.14,-0.14)">
                <path d="M4928 7539 c-601 -58 -969 -423 -1077 -1070 -58 -349 -47 -653 34 -934 203 -702 790 -1203 1332 -1136 531 65 1026 570 1169 1191 91 397 26 969 -149 1316 -237 469 -698 692 -1309 633z" />
                <path d="M3930 4369 c-271 -73 -516 -220 -667 -400 -75 -88 -175 -268 -215 -386 -87 -251 -19 -471 186 -605 l59 -38 1877 0 1877 0 46 31 c56 37 141 128 166 178 55 107 67 265 31 404 -20 79 -97 257 -111 257 -4 0 -52 50 -106 111 -189 213 -379 342 -626 424 -168 56 -163 56 -222 -21 -128 -169 -363 -347 -569 -429 -153 -62 -229 -76 -441 -82 -294 -8 -441 19 -650 122 -174 86 -367 241 -486 392 -28 35 -56 63 -62 62 -7 0 -46 -9 -87 -20z" />
            </g>
        </symbol>
    </svg>

    <!-- Bubbles -->
    <div class="bubbles">
        <img src="img/background/bubbles.svg" class="bubbles_svg" alt="">
    </div>

    <!-- Header -->
    <div class="header_hover" id="headerHover">HoverMe</div>
    <div class="header" id="header">
        <div class="container">
            <div class="header_inner">
                <div class="navs" id="navs">
                    <div class="nav" id="nav1" data-scroll="#intro">Главная</div>
                    <div class="nav" id="nav2" data-scroll="#whom">Для кого</div>
                    <div class="nav" id="nav3" data-scroll="#timeline">Порядок</div>
                    <div class="nav" id="nav4" data-scroll="#info">Информация</div>
                    <div class="nav" id="nav5" data-scroll="#content">Работы</div>
                </div>
                
                <div class="login">
                    <a class="login_inner" href="/regaut.php">
                        <svg class="login_icon">
                            <use xlink:href="#login"></use>
                        </svg>
                    </a>
                </div>

                <button class="burger" id="burger">
					<span class="burger_menu"></span>
				</button>
            </div>
        </div>
    </div>

    <!-- Intro -->
    <div class="intro" id="intro">
        <div class="container">
            <div class="intro_inner">
                <div class="intro_title">Защита интеллектуальной собственности</div>
            </div>
        </div>
        <div class="intro_block">
            <div class="intro_block_inner">
                <img src="/img/icon/qr.png" alt="" class="intro_img">
            </div>

        </div>
    </div>

    <!-- For whom -->
    <div class="whom" id="whom">
        <div class="title">Кому это пригодится?</div>
        <div id="whom" class="whom_inner">
            <card data-image="img/whom/1.jpeg">
                <div slot="header" class="whom_subtitle">Junior уровень</div>
                <div slot="content" class="whom_text">Регистрация научных 
                    трудов является способом официального подтверждения 
                    ваших исследовательских усилий. Это может быть полезно, 
                    когда вы претендуете на стажировку, обучение или 
                    академические программы. Работы, зарегистрированные в 
                    нашей базе данных могут служить основой для создания 
                    вашего научного портфолио</div>
            </card>
            <card data-image="img/whom/2.jpeg" class="second">
                <div slot="header" class="whom_subtitle">Middle уровень</div>
                <div slot="content" class="whom_text">Регистрация научных 
                    трудов может сделать вашу исследовательскую группу 
                    более конкурентоспособной при поиске грантов и 
                    финансирования. Зарегистрированные работы могут стать 
                    основой для подачи заявок на участие в конференциях, 
                    где вы можете представить свои исследования и 
                    обменяться опытом с коллегами</div>
            </card>
            <card data-image="img/whom/3.jpeg">
                <div slot="header" class="whom_subtitle">Senior уровень</div>
                <div slot="content" class="whom_text">Зарегистрированные 
                    работы служат доказательством вашего вклада в науку 
                    и могут быть использованы для получения звания, 
                    присвоения ученых степеней и других форм экспертного 
                    признания. Публикация и регистрация работ влияют на 
                    ваш вклад в развитие научной области и могут помочь 
                    формировать новые направления исследований</div>
            </card>
        </div>
    </div>

    <!---- Timeline ---->
    <div class="title" id="timeline">Порядок организации защиты ИС</div>
    <section id="cd-timeline" class="timeline">
        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-first"></div>
            <div class="cd-timeline-content">
                <h1>Написание статьи</h1>
                <p>Каждому автору интеллектуальной деятельности необходимо
                    выражать свое собственное мнение, мысли, идеи,
                    не опираясь на доводы и размышления третьих лиц</p>
            </div>
        </div>

        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-second"></div>
            <div class="cd-timeline-content">
                <h1>Регистрация аккаунта</h1>
                <p>Каждый автор проходит регистрацию где указывает
                    ключевую информацию о себе и теме работы</p>
            </div>
        </div>

        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-third"></div>
            <div class="cd-timeline-content">
                <h1>Добавление работы</h1>
                <p>Добавить работу необходимо после
                    регистрации аккаунта в своём личном кабинете</p>
            </div>
        </div>

        <div class="cd-timeline-block">
            <div class="cd-timeline-img cd-fourth"></div> <!-- cd-timeline-img -->
            <div class="cd-timeline-content">
                <h1>Получение персонального QR кода</h1>
                <p>Для каждого автора генерируется личный
                    QR код в котором будет вся необходимая
                    информация для подтверждения наличия
                    интеллектуальной собственности</p>
            </div>
        </div>
    </section>

    <!---- Info ---->
    <div class="info" id="info">
        <div class="title">Информация</div>
        <div class="info_inner">
            <div class="info_text">Интеллектуальная собственность –
                это результат интеллектуальной деятельности человека,
                включающий в себя изобретения, произведения, компьютерные
                программы, фирменные наименования, товарные знаки,
                полезные модели, а также информационные ресурсы.
                <p>Существует несколько распространенных способов защиты ИС</p>
                <p>- Патенты</p>
                <p>- Авторские права</p>
                <p>- Товарные знаки</p>
                <p>- Коммерческая тайна</p>
                С помощью нашего сайта вы сможете защитить свой научный труд.
                Защищая интеллектуальную собственность, мы
                сохраняем оригинальные технологии, фирменные
                наименования, идеи и произведения, необходимые
                для объективной оценки ресурсов
            </div>
        </div>
    </div>

    <!---- Content ---->
    <div class="content-third" id="content">
        <div class="container">
            <div class="title">Последние работы</div>
            <div class="contetn-inner">
                <?php require_once __DIR__ . '/src/indexContent.php'; ?>
            </div>
            <a href="content.php" class="content-showmore">Просмотреть все</a>
        </div>
    </div>

    <!---- Footer ---->
    <div class="footer">
        <div class="copyright">
            <div class="copyright_text">
                <div>Copyright © 2023 SYIP. Все права защищены.</div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="js/vue.min.js"></script>
    <script src="js/card.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/timeline.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/mobile.js"></script>
</body>

</html>