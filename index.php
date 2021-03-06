<?php require($_SERVER['DOCUMENT_ROOT'].'/inc/data.php'); ?>
<!DOCTYPE html>
<!--<html lang="ru">-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Русоптим - Одна из ведущих компаний рынка профессиональных услуг в области комплексного бизнес-консультирования. Аудиторско-консалтинговая группа включает 15 направлений, в том числе аудит, налоги, право, автоматизация, управленческое и финансовое консультирование.">
    <meta name="keywords" content="accountant, advocate, attorneys, barrister, business, consultancy, counsel, finance, justice, law, lawyer, legal adviser, legal office, solicitor">
    <!-- :: Fontawesome -->

    <!-- :: Bootstrap CSS -->
    <link rel="stylesheet" href="dist/assets/css/bootstrap.min.css">

    <!-- :: Favicon -->
    <link rel="icon" href="/dist/assets/fonts/favicon/favicon.ico">

    <!-- :: Title -->
    <title>Русоптим | Юридические и бухгалтерские услуги</title>

    <!-- :: Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap">

    <!-- :: Fontawesome -->
    <link rel="stylesheet" href="/dist/assets/fonts/fontawesome/css/all.min.css">

    <!-- :: Flaticon -->
    <link rel="stylesheet" href="/dist/assets/fonts/flaticon/css/flaticon.css">

    <!-- :: OWL Carousel -->
    <link rel="stylesheet" href="/dist/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/dist/assets/css/owl.theme.default.min.css">

    <!-- :: Nice Select CSS -->
    <link rel="stylesheet" href="/dist/assets/css/nice-select.css">

    <!-- :: Lity -->
    <link rel="stylesheet" href="/dist/assets/css/lity.min.css">

    <!-- :: Animate CSS -->
    <link rel="stylesheet" href="/dist/assets/css/animate.css">

    <!-- :: Style CSS -->
    <link rel="stylesheet" href="/dist/assets/css/style.css">

    <!-- :: Style Responsive CSS -->
    <link rel="stylesheet" href="/dist/assets/css/responsive.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Ads: 10795934693 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10795934693"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-10795934693');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5F9WT35');</script>
    <!-- End Google Tag Manager -->


</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F9WT35"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="loading">
    <div class="loading-box">
        <div class="sk-fading-circle">
            <div class="sk-circle1 sk-circle"></div>
            <div class="sk-circle2 sk-circle"></div>
            <div class="sk-circle3 sk-circle"></div>
            <div class="sk-circle4 sk-circle"></div>
            <div class="sk-circle5 sk-circle"></div>
            <div class="sk-circle6 sk-circle"></div>
            <div class="sk-circle7 sk-circle"></div>
            <div class="sk-circle8 sk-circle"></div>
            <div class="sk-circle9 sk-circle"></div>
            <div class="sk-circle10 sk-circle"></div>
            <div class="sk-circle11 sk-circle"></div>
            <div class="sk-circle12 sk-circle"></div>
        </div>
    </div>
</div>

<!-- :: Navs -->
<header class="navs" id="main-header">
    <div class="nav-top">
        <div class="container">
            <div class="nav-top-box d-flex align-items-center justify-content-between">
                <ul class="info">
                    <li><span>Email :</span> rusoptim-info@yandex.ru</li>
                    <li><a href="tel:<?= $clean_phone ?>"><span>Телефон :</span> <?= $phone ?></a></li>
                </ul>
                <ul class="icon-follow">
                    <li><a class="icon" href="https://www.instagram.com/rusoptim_rostov/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="icon open-menu" href="#"><i class="fas fa-th"></i></a></li>
                    <li><button class="btn-1 btn-2" onclick="swa()" type="button">Бесплатная консультация</button></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- :: Navbar -->
    <nav class="nav-bar" id="fixed-navbar">
        <div class="container">
            <div class="box-content d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="/" class="logo-nav">
                        <img class="img-fluid one" src="/dist/assets/images/logo/RUSOPTIM_-logo-white.png" alt="01 Logo">
                        <img class="img-fluid two" src="/dist/assets/images/logo/RUSOPTIM_-logo_blu.png" alt="02 Logo">
                    </a>
                    <ul class="info">
                        <li><span>Email :</span> rusoptim-info@yandex.ru</li>
                        <li><a href="tel:<?= $clean_phone ?>" style="color: #333;"><span>Телефон :</span> <?= $phone ?></a></li>
                    </ul>
                    <a href="index.php#open-nav-bar-menu" class="open-nav-bar">
                        <span class="hamburger-vector"></span>
                        <span class="hamburger-vector"></span>
                        <span class="hamburger-vector"></span>
                    </a>
                </div>
                <div class="nav-bar-link" id="open-nav-bar-menu">
                    <ul class="level-1">
<!--                        <li><a href="/" class="color-active">Главная</a></li>-->
                        <li><a href="#services" class="link-start">Услуги</a></li>
                        <li><a href="#about-us" class="link-start">О нас</a></li>
                        <li><a href="#reviews" class="link-start">Отзывы</a></li>
                        <li><a href="#employee" class="link-start">Сотрудники</a></li>
                        <li><a href="#question" class="link-start">Вопросы</a></li>
                        <li><a href="#contact" class="link-start">Контакты</a></li>
                    </ul>
                </div>
                <div class="info-nav">
                    <i class="flaticon-call"></i>
                    <div class="contact-nav">
                        <p><a href="tel:<?= $clean_phone ?>"><?= $phone ?></a>
                        </p>
                        <span>Наш контактный телефон</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- :: Search Box -->
<div class="search-box">
    <form>
        <input type="search" placeholder="Search Here..">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    <i class="fas fa-times close-search"></i>
</div>

<!-- :: Menu Box -->
<div class="menu-box">
    <div class="inner-menu" id="inner-menu-right">
        <div class="website-info">
            <a href="#" class="logo"><img class="img-fluid" id="white-theme" src="/dist/assets/images/logo/RUSOPTIM_-logo_blu.png" alt="02 Logo"></a>
        </div>
        <div class="contact-info">
            <h4>Контактная информация</h4>
            <div class="contact-box">
                <i class="flaticon-call"></i>
                <div class="box">
                    <p><a href="tel:<?= $clean_phone ?>"><?= $phone ?></a></p>
                </div>
            </div>
            <div class="contact-box">
                <i class="flaticon-email"></i>
                <div class="box">
                    <p>rusoptim-info@yandex.ru</p>
                </div>
            </div>
            <div class="contact-box">
                <i class="flaticon-location"></i>
                <div class="box">
                    <p>г. Ростов-на-Дону, ул. Шахтановского, 29А, оф. 302.</p>
                </div>
            </div>
        </div>
        <div class="follow-us">
            <h4>Мы в социальных сетях</h4>
            <ul class="icon-follow">
                <li><a href="https://www.instagram.com/rusoptim_rostov/"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="exit-menu-box">
            <i class="fas fa-times"></i>
        </div>
    </div>
</div>

<!-- :: Header -->
<?php require($_SERVER['DOCUMENT_ROOT'].'/inc/slider.php'); ?>
<header class="header header-2 header-3" id="page">
    <div class="header-owl header-owl-2 owl-carousel owl-theme">
        <div class="sec-hero display-table" style="background-image: url(<?= isset($_GET['utm_content']) && isset($slider[$_GET['utm_content']]) && isset($slider[$_GET['utm_content']]['img']) ? $slider[$_GET['utm_content']]['img'] : '/dist/assets/images/header/05_header-3.jpg' ?>)">
            <div class="table-cell">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="box-hero">
                                <div class="banner banner-3 text-center">
                                    <div class="headline-top"></div>
                                    <h1 class="handline">
                                        <?=
                                            isset($_GET['utm_content']) && isset($slider[$_GET['utm_content']])
                                            ? is_array($slider[$_GET['utm_content']]['title']) ? $slider[$_GET['utm_content']]['title'][array_rand($slider[$_GET['utm_content']]['title'])] : $slider[$_GET['utm_content']]['title']
                                            : 'Комплексное сопровождение малого и среднего бизнеса'
                                        ?>
                                    </h1>
                                    <p class="about-website"><?= isset($_GET['utm_content']) && isset($slider[$_GET['utm_content']]) && isset($slider[$_GET['utm_content']]['subtitle']) ? $slider[$_GET['utm_content']]['subtitle'] : 'Бухгалтерия | Юриспруденция | Кадры' ?></p>
                                    <button class="btn-1 btn-2 move-section" onclick="swa()">Получить консультацию</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- :: Practice Area -->
<section class="practice-area py-100-70" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="sec-title text-center">
                    <h2>УСЛУГИ</h2>
                    <h3>Что мы предлагаем</h3>
                    <p>В рамках каждого блока мы выполняем любые услуги и задачи и закрываем потребность заказчиков на 100%, демонстрируя безупречное качество и строгое соблюдение сроков.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <div class="content">
                        <img src="/dist/assets/images/practice-area/autosors.png"/>
                        <h4>Аутосорсинг бухгалтерии</h4>
                        <p>Штатный бухгалтер больше не нужен. Избавьте себя от риска болезни сотрудника и необходимости контролировать качество.</p>
<!--                        <a href="01_practice-areas.html">Read More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <div class="content">
                        <img src="/dist/assets/images/practice-area/register-busines.png"/>
                        <h4>Регистрация и ликвидация бизнеса</h4>
                        <p>Выбор подходящей системы налогообложения и формы собственности, открытие ООО и ИП, открытие расчетного счета, ликвидация компании.</p>
<!--                        <a href="01_practice-areas.html">Read More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <div class="content">
                        <img src="/dist/assets/images/practice-area/kadroviy.png"/>
                        <h4>Ведение кадрового учета</h4>
                        <p>Для компаний с любой численностью сотрудников. Если у вас в штате нет выделенной единицы
                            для ведения кадрового делопроизводства,  мы возьмем это на себя ведение.</p>
<!--                        <a href="01_practice-areas.html">Read More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <div class="content">
                        <img src="/dist/assets/images/practice-area/auditor.png"/>
                        <h4>Аудиторские услуги</h4>
                        <p>Проверим правильность и эффективность ведения финансового и налогового учета, а также соблюдение всех правил законодательства.</p>
<!--                        <a href="01_practice-areas.html">Read More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <div class="content">
                        <img src="/dist/assets/images/practice-area/ur-uslugi.png"/>
                        <h4>Юридические услуги</h4>
                        <p>Помощь в проверке контрагентов, составление договоров, ведение переговоров и оформление претензий, представительство в арбитражном суде.</p>
<!--                        <a href="01_practice-areas.html">Read More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="practice-area-item">
                    <div class="content">
                        <img src="/dist/assets/images/practice-area/ur-uslugi-fiz.png"/>
                        <h4>Услуги юриста для физ лиц</h4>
                        <p>Семейное, трудовой, наследственное право. Адвокат по страховым и жилищным спорам, юрист по административным правонарушениям.</p>
<!--                        <a href="01_practice-areas.html">Read More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- :: Contact -->
<section class="contact py-100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="sec-title text-center">
                    <h3>Бесплатная консультация по вашему вопросу</h3>
                    <p>Оставьте свои контактные данные и мы перезвоним вам в течение 15 минут.</p>
                    <button class="btn-1 btn-3" onclick="swa()">Оставить заявку</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- :: About -->
<section class="about about-2 py-100" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-box">
                    <div class="sec-title sec-title-2">
                        <h2>ПОЧЕМУ ВЫБИРАЮТ НАС</h2>
                        <h3>RUSOPTIM</h3>
                        <p>Одна из ведущих компаний рынка профессиональных услуг в области комплексного бизнес-консультирования. Аудиторско-консалтинговая группа включает 15 направлений, в том числе аудит, налоги, право, автоматизация, управленческое и финансовое консультирование.</p>
                    </div>
                    <ul class="core-about">
                        <li>
                            <img src="/dist/assets/images/about/econom.png"/>
                            <div class="content">
                                <h4>Экономия до 2-х раз</h4>
                                <p>По сравнению с содержанием сотрудников в штате: зарплаты, отчисления в фонды
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="/dist/assets/images/about/otchetnost.png"/>
                            <div class="content">
                                <h4>Отчетность без ошибок</h4>
                                <p>Мы всегда учитываем актуальные изменения в законодательстве</p>
                            </div>
                        </li>
                        <li>
                            <img src="/dist/assets/images/about/garant.png"/>
                            <div class="content">
                                <h4>Гарантия безопасности</h4>
                                <p>Если из-за ошибки в отчетах вам придет штраф – покроем его за наш счет</p>
                            </div>
                        </li>
                        <li>
                            <img src="/dist/assets/images/about/comand.png"/>
                            <div class="content">
                                <h4>Команда специалистов</h4>
                                <p>Обращаясь к нам вы получаете в команду более 15 юристов и 10 бухгалтеров</p>
                            </div>
                        </li>
                    </ul>
                    <div class="button-wrapper">
                        <button class="btn-1 mt-3" onclick="swa()">Заказать консультацию</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-box">
                    <div class="about-img">
                        <img class="img-fluid" src="/dist/assets/images/about/02_about-2.jpg" alt="О нас">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-4 py-100" id="reviews">
    <div class="overlay"></div>
    <div class="container">
        <div class="sec-title sec-title-3">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Отзывы
                    </h2>
                    <h3>Отзывы наших клиентов</h3>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <p>Для нас благодарность клиентов — лучший показатель качества нашей работы и основной стимул делать всё возможное для оказания качественных услуг.</p>
                </div>
            </div>
        </div>
        <div class="owl-testimonial-3 owl-carousel owl-theme">
            <div class="box-item">
                <img style="width: 100%;" src="/dist/assets/images/reviews/otz-1.jpg">
            </div>
            <div class="box-item">
                <img style="width: 100%;" src="/dist/assets/images/reviews/otz-2.jpg">
            </div>
            <div class="box-item">
                <img style="width: 100%;" src="/dist/assets/images/reviews/otz-3.jpg">
            </div>
            <div class="box-item">
                <img style="width: 100%;" src="/dist/assets/images/reviews/otz-4.jpg">
            </div>
            <div class="box-item">
                <img style="width: 100%;" src="/dist/assets/images/reviews/otz-5.jpg">
            </div>
            <div class="box-item">
                <img style="width: 100%;" src="/dist/assets/images/reviews/otz-6.jpg">
            </div>
        </div>
    </div>
</section>

<section class="advisors advisors-2 py-100-70" id="employee">
    <div class="container">
        <div class="sec-title sec-title-2">
            <div class="row">
                <div class="col-lg-5">
                    <h2>НАША КОМАНДА</h2>
                    <h3>Ведущие сотрудники</h3>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <p>В нашем штате более 15 юристов и 10 бухгалтеров. Многие из наших сотрудников были представителями государственной власти: сотрудниками полиции, прокуратуры, Роспотребнадзора, судов.</p>
                </div>
            </div>
        </div>
        <div class="owl-testimonial-3 owl-carousel owl-theme">
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/gruntovskiy.jpg" alt="Грунтовский Дмитрий Владимирович">
                </div>
                <div class="text-box text-center">
                    <h5>Грунтовский<br>Дмитрий Владимирович</h5>
                    <span>директор</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/astahova.jpg" alt="Астахова Наталья Владимировна">
                </div>
                <div class="text-box text-center">
                    <h5>Астахова <br>Наталья Владимировна</h5>
                    <span>главный бухгалтер</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/kadatova.jpg" alt="Кадатова Дарья Андреевна">
                </div>
                <div class="text-box text-center">
                    <h5>Кадатова<br> Дарья Андреевна</h5>
                    <span>бухгалтер</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/astahova-v.jpg" alt="Астахова Виолетта Алексеевна">
                </div>
                <div class="text-box text-center">
                    <h5>Астахова <br>Виолетта Алексеевна</h5>
                    <span>бухгалтер</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/sisoev-2.png" alt="Сысоев Сергей Суренович">
                </div>
                <div class="text-box text-center">
                    <h5>Сысоев<br> Сергей Суренович</h5>
                    <span>юрист</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/bliznyukova.jpg" alt="Близнюкова Алена Федоровна">
                </div>
                <div class="text-box text-center">
                    <h5>Близнюкова<br>Алена Федоровна</h5>
                    <span>Помощник Юриста</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/bobrova.jpg" alt="Боброва Александра Андреевна">
                </div>
                <div class="text-box text-center">
                    <h5>Боброва<br>Александра Андреевна</h5>
                    <span>Помощник Юриста</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/dudkina.jpg" alt="Дудкина Алла Николаевна">
                </div>
                <div class="text-box text-center">
                    <h5>Дудкина<br>Алла Николаевна</h5>
                    <span>Помощник Юриста</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/orlyanskaya.jpg" alt="Орлянская Ангелина Айковна">
                </div>
                <div class="text-box text-center">
                    <h5>Орлянская<br>Ангелина Айковна</h5>
                    <span>Бухгалтер</span>
                </div>
            </div>
            <div class="advisors-box full-item">
                <div class="img-box">
                    <img class="img-fluid" src="/dist/assets/images/Employee/usenko.jpg" alt="Усенко Даниил Валентинович">
                </div>
                <div class="text-box text-center">
                    <h5>Усенко<br>Даниил Валентинович</h5>
                    <span>Помощник Бухгалтера</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- :: FAQs -->
<section class="faqs faqs-page py-100-70" id="question">
    <div class="container">
        <div class="sec-title sec-title-2">
            <div class="row">
                <div class="col-lg-5">
                    <h2>ОБЛАСТИ ПРАВА</h2>
                    <h3>Направления нашей работы</h3>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <p>Доверьте нашим специалистам ваши проблемы и вы можете не сомневаться, мы справимся с любой поставленной задачей.</p>
                </div>
            </div>
        </div>
        <div class="row faq faq-page" id="faqSite">
            <div class="col-lg-6">
                <div class="faq-box">
                    <h5 class="question-header" id="faq_01">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqOne" aria-expanded="false" aria-controls="faqOne" style="font-size: 20px">
                            Уголовное право
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqOne" class="answer collapse" aria-labelledby="faq_01" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Защита интересов на всех этапах уголовного производства</li>
                                <li>Представление интересов потерпевших</li>
                                <li>Сопровождение при допросе свидетелей</li>
                                <li>Сбор и подача заявлений/жалоб</li>
                                <li>Оспаривание решений должностных лиц</li>
                                <li>УДО</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <h5 class="question-header" id="faq_02">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo" style="font-size: 20px">
                            Жилищный юрист
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqTwo" class="answer collapse" aria-labelledby="faq_01" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Сбор необходимых документов</li>
                                <li>Составление договоров купли/продажи/обмена</li>
                                <li>Проведение правового анализа</li>
                                <li>Оспаривание и расторжение сделок</li>
                                <li>Улучшение жилищных условий</li>
                                <li>Споры с администрацией</li>
                                <li>Приватизация</li>
                                <li>Снятие с регистрационного учета и выселения</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <h5 class="question-header" id="faq_03">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqThree" aria-expanded="false" aria-controls="faqThree" style="font-size: 20px">
                            Семейный юрист
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqThree" class="answer collapse" aria-labelledby="faq_03" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Сбор необходимых документов</li>
                                <li>Расторжение брака с гражданами РФ и иностранными гражданами</li>
                                <li>Раздел имущества и обязательств</li>
                                <li>Установление алиментов, в том числе в твердой денежной сумме: на детей, на родителей, на супругов</li>
                                <li>Оспаривание отцовства</li>
                                <li>Лишение родительских прав</li>
                                <li>Определение места жительства детей</li>
                                <li>Определение порядка общения с детьми/внуками</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <h5 class="question-header" id="faq_04">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqFour" aria-expanded="false" aria-controls="faqFour" style="font-size: 20px">
                            Земельный юрист
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqFour" class="answer collapse" aria-labelledby="faq_04" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Споры по определению границ земельного участка</li>
                                <li>Споры с администрацией</li>
                                <li>Споры с администрацией</li>
                                <li>Дачная амнистия</li>
                                <li>Приобретательская давность</li>
                                <li>Установление сервитутов</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <h5 class="question-header" id="faq_05">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqFive" aria-expanded="false" aria-controls="faqFive" style="font-size: 20px">
                            Автоюрист
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqFive" class="answer collapse" aria-labelledby="faq_05" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Защита интересов в ГИБДД</li>
                                <li>Лишение прав</li>
                                <li>Споры со страховыми компаниями</li>
                                <li>Расторжение договора купли-продажи</li>
                                <li>Возврат денег за навязанные услуги</li>
                                <li>Взыскание компенсации за некачественные услуги</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-box">
                    <h5 class="question-header" id="faq_06">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqSix" aria-expanded="false" aria-controls="faqSix" style="font-size: 20px">
                            Наследственный юрист
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqSix" class="answer collapse" aria-labelledby="faq_06" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Сбор необходимых документов</li>
                                <li>Вступление в наследство</li>
                                <li>Определение наследственной массы и розыск наследства</li>
                                <li>Споры по определению долей в праве наследования</li>
                                <li>Оспаривание завещаний</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <h5 class="question-header" id="faq_07">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqSeven" aria-expanded="false" aria-controls="faqSeven" style="font-size: 20px">
                            Юрист по недвижимости
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqSeven" class="answer collapse" aria-labelledby="faq_07" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Сбор необходимых документов</li>
                                <li>Составление договоров купли/продажи/обмена</li>
                                <li>Проведение правового анализа</li>
                                <li>Оспаривание и расторжение сделок</li>
                                <li>Проверка юридической чистоты сделки</li>
                                <li>Проверка застройщика</li>
                                <li>Проверка продавца/покупателя</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <h5 class="question-header" id="faq_08">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqEight" aria-expanded="false" aria-controls="faqEight" style="font-size: 20px">
                            Юрист по трудовым спорам
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqEight" class="answer collapse" aria-labelledby="faq_08" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Оспаривание решений работодателя</li>
                                <li>Оспаривание незаконных увольнений</li>
                                <li>Взыскание заработной платы</li>
                                <li>Оспаривание и расторжение сделок</li>
                                <li>Увольнение по соглашению сторон с выгодой для работника</li>
                                <li>Сопровождение при сокращении штата</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <h5 class="question-header" id="faq_09">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqNine" aria-expanded="false" aria-controls="faqNine" style="font-size: 20px">
                            Страховое право
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqNine" class="answer collapse" aria-labelledby="faq_09" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Сбор и подача документов в страховую</li>
                                <li>Расторжение договоров страхования</li>
                                <li>Оспаривание решений страховой</li>
                                <li>Оспаривание суммы страховой выплаты</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <h5 class="question-header" id="faq_10">
                        <button class="click collapsed" type="button" data-toggle="collapse" data-target="#faqTen" aria-expanded="false" aria-controls="faqTen" style="font-size: 20px">
                            Кредитный юрист. Банкротство
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </h5>
                    <div id="faqTen" class="answer collapse" aria-labelledby="faq_10" data-parent="#faqSite">
                        <div class="about-text">
                            <ul>
                                <li>Споры с кредитными организациями</li>
                                <li>Перерасчет долгов</li>
                                <li>Взыскание долга</li>
                                <li>Сопровождение на этапе исполнительного производства</li>
                                <li>Розыск имущества должника</li>
                                <li>Банкротство</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-and-subscribe py-100" id="contact">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-box">
                    <div class="sec-title sec-title-2">
                        <h2>КОНТАКТЫ</h2>
                        <h3>Получите бесплатную консультацию</h3>
                    </div>
                    <div class="contact-block">
                        <div class="address">
                            <b>Адрес</b><br>
                            г. Ростов-на-Дону, ул. Шахтановского, 29А, оф. 302
                        </div>
                        <div class="telephone mt-2">
                            <b>Телефон</b><br>
                            <a href="tel:<?= $clean_phone ?>"><?= $phone ?></a>
                        </div>
                        <div class="email mt-2">
                            <b>Email</b><br>
                            rusoptim-info@yandex.ru
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="subscribe">
                    <div class="sec-title">
                        <h3>Оставьте заявку</h3>
                    </div>
                    <div class="subscribe-item">
                        <input class="input-block" type="text" name="fio" placeholder="ФИО">
                    </div>
                    <div class="subscribe-item">
                        <input class="input-block" type="tel" id="phone2" name="phone" placeholder="+7 (999) 99 99 999" required>
                    </div>
                    <div class="mb-3 form-check form-check-submit">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" Checked="true" required>
                        <label class="form-check-label" for="exampleCheck2">Отправляя сообщение, вы соглашаетесь с политикой обработки персональных данных</label>
                    </div>
                    <div class="subscribe-item">
                        <button type="submit" class="btn-1">Заказать звонок</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=7b980957-a9fc-4403-8ca9-72f3cac69f51" type="text/javascript"></script>
<!--<script type="application/javascript">-->
<!--    var initYandexMap = false;-->
<!--    ymaps.ready(function () {-->
<!--        if(initYandexMap == false){-->
<!--            var myMap = new ymaps.Map('map', {-->
<!--                        center: [47.290626, 39.732710],-->
<!--                        zoom: 17,-->
<!--                        controls: [-->
<!--                            'zoomControl'-->
<!--                        ]-->
<!--                    }, {-->
<!--                        searchControlProvider: 'yandex#search',-->
<!--                        suppressMapOpenBlock: true,-->
<!--                    }),-->
<!--                    myPlacemarkWithContent = new ymaps.Placemark([47.290626, 39.732710], {-->
<!--                        hintContent: 'г. Ростов-на-Дону, ул. Шахтановского, 29А, оф. 302',-->
<!--                        balloonContent: '<div>г. Ростов-на-Дону, ул. Шахтановского, 29А, оф. 302</div><div>8 (909) 410-04-10</div><div>rusoptim-info@yandex.ru</div>',-->
<!--                        iconContent: ''-->
<!--                    }, {-->
<!--                        // Опции.-->
<!--                        preset: 'islands#icon',-->
<!--                        iconColor: 'red',-->

<!--                    });-->
<!--            myMap.geoObjects-->
<!--                    .add(myPlacemarkWithContent);-->
<!--                    const screenWidth = window.screen.width-->
<!--            if (screenWidth < 520){-->
<!--                myMap.behaviors.disable('drag');-->
<!--            }-->
<!--            initYandexMap = true;-->
<!--            myMap.behaviors.disable('scrollZoom');-->
<!--        }-->
<!--    });-->
<!--</script>-->
<!--<div id="map">-->
<!--</div>-->
<div id="map">
    <iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=217614724830" width="100%" height="100%" frameborder="0"></iframe>
</div>
<!-- :: Footer -->
<footer class="footer">
    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p>© 2021 RUSOPTIM | Все права защищены </p>
                </div>
                <div class="col-lg-4 logo-yandex">
                    <div class="yandex-reviews">
                        <a href="https://yandex.ru/maps/org/rusoptim/217614724830/?ll=39.732710%2C47.290626&z=18" target="_blank"><img src="/dist/assets/images/reiting.png"></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul>
                        <li><a href="#">Политика обработки персональных данных</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay">
        <div class="popup" id="form" style="padding: 40px 20px;">
            <button class="closed" title="Закрыть окно" onclick="swa2()"></button>
            <form class="mail-form">
                <input type="hidden" name="term" value="<?= isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ?>">
                <div class="title">
                    <h4 class="text-center">Записаться на консультацию</h4>
                </div>
                <div class="mb-3 mt-3">
                    <label for="exampleInputEmail1" class="form-label">ФИО</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="fio" placeholder="ФИО">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон <span style="color: red">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+7 (999) 99 99 999" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" Checked="true" required>
                    <label class="form-check-label" for="exampleCheck1">Отправляя сообщение, вы соглашаетесь с политикой обработки персональных данных</label>
                </div>
                <button type="submit" class="btn-1">Отправить</button>
            </form>
        </div>
        <div class="popup" id="success-mess" style="top: 40%;  padding: 50px 20px;">
            <button class="closed" title="Закрыть окно" onclick="swa2()"></button>
            <div>
                <div class="title">
                    <h4 class="text-center">Заявка отправлена</h4>
                </div>
                <div class="mb-3 mt-3 text-center" id="success-text" style="font-size: 16px;">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- :: Button Dark Mode -->
<!--<div class="dark-mode-decision">-->
<!--    <i class="fas fa-moon"></i>-->
<!--</div>-->

<!-- :: Scroll UP -->
<div class="scroll-up">
    <a href="#main-header" class="move-section">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
</div>
<script src="/dist/assets/js/jquery-3.5.1.min.js"></script>

<!-- :: Popper JS -->
<script src="/dist/assets/js/popper.min.js"></script>

<!-- :: BootStrap JS -->
<script src="/dist/assets/js/bootstrap.min.js"></script>

<!-- :: OWL Carousel -->
<script src="/dist/assets/js/owl.carousel.min.js"></script>

<!-- :: Nice Select -->
<script src="/dist/assets/js/jquery.nice-select.min.js"></script>

<!-- :: Waypoints -->
<script src="/dist/assets/js/jquery.waypoints.min.js"></script>

<!-- :: CounterUp -->
<script src="/dist/assets/js/jquery.counterup.min.js"></script>
<script src="/dist/assets/js/jquery.maskedinput.min.js"></script>

<!-- :: Lity -->
<script src="/dist/assets/js/lity.min.js"></script>

<!-- :: Main JS -->
<script src="/dist/assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        $("#phone").mask("+7 (999) 999-99-99");
    });
    $(document).ready(function() {
        $("#phone2").mask("+7 (999) 999-99-99");
    });
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(86155882, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/86155882" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
