<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/svg" href="img/main-page/icons/Logo-mini.svg" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/<?php echo $style ?>">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header-top header__header-top">
                <div class="header-top__container container">
                    <p class="header-top__time">Monday - Friday8AM - 9PM</p>
                    <p class="header-top__loc">725 Park Ave, New York</p>
                    <ul class="header-top__list">
                        <li class="header-top__item">
                            <a href="#!"><img src="img/main-page/icons/Instagram.svg" alt="instagram"></a>
                        </li>
                        <li class="header-top__item">
                            <a href="#!"><img src="img/main-page/icons/Facebook.svg" alt="facebook"></a>
                        </li>
                        <li class="header-top__item">
                            <a href="#!"><img src="img/main-page/icons/Twitter.svg" alt="twitter"></a>
                        </li>
                        <li class="header-top__item">
                            <a href="#!"><img src="img/main-page/icons/Linked-In.svg" alt="linked-in"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__container container">
                <a href="index.php" class="header__logo">
                    <img src="img/main-page/icons/Logo.svg" alt="AskExperts">
                </a>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item"><a href="index.php">Home</a></li>
                        <li class="header__item"><a href="home-two.php">Pages</a></li>
                        <li class="header__item"><a href="services-page.php">Services</a></li>
                        <li class="header__item"><a href="case-study.php">Work</a></li>
                        <li class="header__item"><a href="team.php">Team</a></li>
                        <li class="header__item"><a href="contact-page.php">Contact</a></li>
                    </ul>
                </nav>
                <a href="tel:+8884521505" class="header__phone">
                    <div></div>
                    <span class="header__phone-item">+ (888) 452 1505</span>
                </a>
                <button class="header__burger burger">
                    <span></span>
                </button>
            </div>
        </header>