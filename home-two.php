<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/svg" href="img/main-page/icons/Logo-mini.svg" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/home-two.css">
    <title>Home Page</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container container">
                <a href="index.php" class="header__logo">
                    <img src="img/main-page/icons/Logo-2.svg" alt="AskExperts">
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
        <main class="main">
            <section class="consult main__consult">
                <div class="consult__container container">
                    <div class="consult__body">
                        <h2 class="consult__sub-title sub-title anim-items anim-no-hide anim-show-left">Hello’ i Am</h2>
                        <h1 class="consult__title anim-items anim-no-hide anim-show-left">Adam Buschemia Business Consultant</h1>
                        <p class="consult__text anim-items anim-no-hide anim-show-left">Get help from Alex Moore, a professional business coach with advanced experience on growth and business scaling.</p>
                        <div class="consult__link-block anim-items anim-no-hide anim-show-left">
                            <a href="contact-page.php" class="consult__link">
                                <img src="img/main-page/icons/form.svg" alt="form">
                                <span>Book a Meeting</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="benefits main__benefits">
                <div class="benefits__container container">
                    <div class="benefits__content anim-items anim-no-hide">
                        <div class="benefits__item anim-show anim-item">
                            <h3 class="benefits__title">Finance & Restructuring</h3>
                            <p class="benefits__text">Get help from Alex Moore, a professional business coach with advanced experience on growth and business scaling.</p>
                            <a href="services-page.php" class="benefits__link">Our Services</a>
                        </div>
                        <div class="benefits__item anim-show anim-item">
                            <h3 class="benefits__title">Our Approach</h3>
                            <p class="benefits__text">Get help from Alex Moore, a professional business coach with advanced experience on growth and business scaling.</p>
                            <a href="about.php" class="benefits__link">More About</a>
                        </div>
                        <div class="benefits__item anim-show anim-item">
                            <h3 class="benefits__title">Consultalk Result</h3>
                            <p class="benefits__text">Get help from Alex Moore, a professional business coach with advanced experience on growth and business scaling.</p>
                            <a href="case-study.php" class="benefits__link benefits__link-3">Explore Our Solution</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about main__about">
                <div class="about__container container">
                    <div class="about__content">
                        <h4 class="about__sub-title sub-title anim-items anim-no-hide anim-show-left">About Me</h4>
                        <h2 class="about__title title anim-items anim-no-hide anim-show-left">About our Consuting Agency Team</h2>
                        <p class="about__desc anim-items anim-no-hide anim-show-left">We create experiences and build products that make business grow</p>
                        <p class="about__text anim-items anim-no-hide anim-show-left">Get help from Alex Moore, a professional business coach with advanced experience on growth and business scaling.</p>
                        <div class="about__contact anim-items anim-no-hide">
                            <div class="about__item anim-show-left anim-item">
                                <img src="img/Home-two/icons/about-mail.svg" alt="mail">
                                <p class="about__info">Buschemia@gmailcom</p>
                            </div>
                            <div class="about__item anim-show-left anim-item">
                                <img src="img/Home-two/icons/about-phone.svg" alt="mail">
                                <p class="about__info">(001) 5648 6584</p>
                            </div>
                        </div>
                        <div class="about__link-block anim-items anim-no-hide anim-show-left">
                        <a href="contact-page.php" class="about__link">Make An Appointment</a>
                        </div>
                    </div>
                    <div class="about__block">
                        <div class="about__img">
                            <img src="img/Home-two/about.jpeg" alt="image">
                        </div>
                        <div class="about__clients">
                            <span class="about__num counter" data-to='1542' data-stop='0'>0</span>
                            <p class="about__people">Satisfied Clients</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services main__services">
                <div class="services__container container">
                    <h4 class="services__sub-title sub-title anim-items anim-no-hide anim-show">Services</h4>
                    <h2 class="services__title title anim-items anim-no-hide anim-show">Get Control Over Your Business I take your finance to next level</h2>
                    <!-- Slider main container -->
                    <div class="services__slider">
                        <!-- Additional required wrapper -->
                        <div class="services__slider-wrapper swiper-wrapper anim-items anim-no-hide">
                            <!-- Slides -->
                            <?php
                                for($i = 0; $i < 4; $i++):
                            ?>
                            <div class="services__slider-slide swiper-slide anim-show anim-item">
                                <img src="img/Home-two/services-<?php echo ($i + 1) ?>.jpeg" alt="image" class="services__img">
                                <h5 class="services__desc">Audit & Evaluation</h5>
                                <p class="services__text">Get help from Alex Moore, a professional business coach with advanced experience on growth and business scaling.</p>
                                <a href="services-page.php" class="services__link">Learn More</a>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="services__slider-prev swiper-button-prev anim-items anim-no-hide anim-show-btn-left"></div>
                        <div class="services__slider-next swiper-button-next anim-items anim-no-hide anim-show-btn-right"></div>
                    </div>
                </div>
            </section>
            <section class="experiance main__experiance">
                <div class="experiance__container container">
                   <div class="experiance__content">
                        <h4 class="experiance__sub-title sub-title anim-items anim-no-hide anim-show">Experiance</h4>
                        <h2 class="experiance__title title anim-items anim-no-hide anim-show">More than 25 years of experience</h2>
                        <p class="experiance__text anim-items anim-no-hide anim-show">3000+ our clients are insured around the World</p>
                   </div>
                   <div class="experiance__block anim-items anim-no-hide">
                        <div class="experiance__item anim-show anim-item">
                            <div class="experiance__img">
                                <img src="img/Home-two/experiance-progress-1.svg" alt="image">
                                <span class="experiance__num">85%</span>
                            </div>
                            <p class="experiance__desc">Consistency</p>
                        </div>   
                        <div class="experiance__item anim-show anim-item">
                        <div class="experiance__img">
                                <img src="img/Home-two/experiance-progress-2.svg" alt="image">
                                <span class='experiance__num'>95%</span>
                            </div>
                            <p class="experiance__desc">Improvement</p>
                        </div>   
                        <div class="experiance__item anim-show anim-item">
                        <div class="experiance__img">
                                <img src="img/Home-two/experiance-progress-3.svg" alt="image">
                                <span class="experiance__num">90%</span>
                            </div>
                            <p class="experiance__desc">Branching</p>
                        </div>            
                   </div>
                </div>
            </section>
            <section class="work main__work">
                <div class="work__container container">
                    <h4 class="work__sub-title sub-title anim-items anim-no-hide anim-show">Work</h4>
                    <div class="work__info">
                        <h2 class="work__title title anim-items anim-no-hide anim-show">My latest project</h2>
                        <a href="case-study.php" class="work__link anim-items anim-no-hide anim-show-right">More Work</a>
                    </div>
                    <div class="work__block anim-items anim-no-hide">
                        <?php 
                            for($i = 0; $i < 7; $i++):
                        ?>
                        <div class="work__item anim-show anim-item">
                            <img src="img/Home-two/work-<?php echo ($i + 1) ?>.jpeg" alt="image" class="work__img">
                            <div class="work__content">
                                <div class="work__sub-content">
                                    <h5 class="work__desc">Taxes & Efficiency</h5>
                                    <p class="work__occupation">Business</p>
                                </div>
                                <a href="case-study.php" class="work__plus"><span>+</span></a>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </section>
            <section class="resume main__resume">
                <div class="resume__container container">
                    <h4 class="resume__sub-title sub-title anim-items anim-no-hide anim-show">Information</h4>
                    <h2 class="resume__title-main title anim-items anim-no-hide anim-show">My Resume</h2>
                    <div class="resume__block anim-items anim-no-hide">
                        <div class="resume__left">
                        <h4 class="resume__about sub-title anim-show-left anim-item">Education</h4>
                            <div class="resume__item anim-show-left anim-item">
                                <h6 class="resume__desc">Finance Сourse - New York (2018 - 2019)</h6>
                                <h5 class="resume__title">Financial Projections</h5>
                                <p class="resume__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus sed turpis. Pellentesque pulvinar pellentesque habitant morbi tristique.</p>
                            </div>
                            <div class="resume__item anim-show-left anim-item">
                                <h6 class="resume__desc">Finance Сourse - New York (2018 - 2019)</h6>
                                <h5 class="resume__title">Financial Projections</h5>
                                <p class="resume__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus sed turpis. Pellentesque pulvinar pellentesque habitant morbi tristique.</p>
                            </div>
                        </div>
                        <div class="resume__right">
                        <h4 class="resume__about sub-title anim-show-right anim-item">Education</h4>
                            <div class="resume__item anim-show-right anim-item">
                                <h6 class="resume__desc">Finance Сourse - New York (2018 - 2019)</h6>
                                <h5 class="resume__title">Financial Projections</h5>
                                <p class="resume__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus sed turpis. Pellentesque pulvinar pellentesque habitant morbi tristique.</p>
                            </div>
                            <div class="resume__item anim-show-right anim-item">
                                <h6 class="resume__desc">Finance Сourse - New York (2018 - 2019)</h6>
                                <h5 class="resume__title">Financial Projections</h5>
                                <p class="resume__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus sed turpis. Pellentesque pulvinar pellentesque habitant morbi tristique.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="feedback main__feedback">
                <div class="feedback__container container">
                    <div class="feedback__counter">
                        <div class="feedback__item">
                            <img src="img/Home-two/icons/feedback-icon-1.svg" alt="icon" class="feedback__icon">
                            <div class="feedback__info">
                                <?php echo "<span class='feedback__num counter' data-to='1542' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                                <p class="feedback__desc">Satisfied Clients</p>
                            </div>
                        </div>
                        <div class="feedback__item">
                            <img src="img/Home-two/icons/feedback-icon-2.svg" alt="icon" class="feedback__icon">
                            <div class="feedback__info">
                                <span class="feedback__num counter" data-to='182' data-stop='0'>0</span>
                                <p class="feedback__desc">Expert Team</p>
                            </div>
                        </div>
                        <div class="feedback__item">
                            <img src="img/Home-two/icons/feedback-icon-3.svg" alt="icon" class="feedback__icon">
                            <div class="feedback__info">
                                <span class="feedback__num counter" data-to='285' data-stop='0'></span>
                                <p class="feedback__desc">Activate Products</p>
                            </div>
                        </div>
                        <div class="feedback__item">
                            <img src="img/Home-two/icons/feedback-icon-4.svg" alt="icon" class="feedback__icon">
                            <div class="feedback__info">
                                <?php echo "<span class='feedback__num counter' data-to='28' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                                <p class="feedback__desc">Awards Winning</p>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__home-block">
                        <!-- Slider main container -->
                        <div class="feedback__home-slider swiper">
                            <!-- Additional required wrapper -->
                            <div class="feedback__home-slider-wrapper swiper-wrapper anim-items anim-no-hide">
                                <!-- Slides -->
                                <div class="feedback__home-slider-slide swiper-slide">
                                    <div class="feedback__about">
                                        <img src="img/Home-two/icons/feedback-peop-1.svg" alt="image" class="feedback__peop">
                                        <div class="feedback__about-info">
                                            <h3 class="feedback__name">Kathleen Smith</h3>
                                            <h4 class="feedback__job sub-title">Web Designer</h4>
                                        </div>
                                    </div>
                                    <p class="feedback__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus  turpis.  pellentesque habitant morbil.</p>
                                </div>
                                <div class="feedback__home-slider-slide swiper-slide">
                                    <div class="feedback__about">
                                        <img src="img/Home-two/icons/feedback-peop-2.svg" alt="image" class="feedback__peop">
                                        <div class="feedback__about-info">
                                            <h3 class="feedback__name">John Martin</h3>
                                            <h4 class="feedback__job sub-title">Web Designer</h4>
                                        </div>
                                    </div>
                                    <p class="feedback__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus  turpis.  pellentesque aservices, and become a multinational firm, offering solutions Worldwide.</p>
                                </div>
                                <div class="feedback__home-slider-slide swiper-slide">
                                    <div class="feedback__about">
                                        <img src="img/Home-two/icons/feedback-peop-3.svg" alt="image" class="feedback__peop">
                                        <div class="feedback__about-info">
                                            <h3 class="feedback__name">Natalia Duke</h3>
                                            <h4 class="feedback__job sub-title">Web Designer</h4>
                                        </div>
                                    </div>
                                    <p class="feedback__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus  turpis.  pellentesque habitant morbi.</p>
                                </div>
                                <div class="feedback__home-slider-slide swiper-slide">
                                    <div class="feedback__about">
                                        <img src="img/Home-two/icons/feedback-peop-2.svg" alt="image" class="feedback__peop">
                                        <div class="feedback__about-info">
                                            <h3 class="feedback__name">John Martin</h3>
                                            <h4 class="feedback__job sub-title">Web Designer</h4>
                                        </div>
                                    </div>
                                    <p class="feedback__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus  turpis.  pellentesque aservices, and become a multinational firm, offering solutions Worldwide.</p>
                                </div>
                                <div class="feedback__home-slider-slide swiper-slide">
                                    <div class="feedback__about">
                                        <img src="img/Home-two/icons/feedback-peop-3.svg" alt="image" class="feedback__peop">
                                        <div class="feedback__about-info">
                                            <h3 class="feedback__name">Natalia Duke</h3>
                                            <h4 class="feedback__job sub-title">Web Designer</h4>
                                        </div>
                                    </div>
                                    <p class="feedback__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus  turpis.  pellentesque habitant morbi.</p>
                                </div>
                                <div class="feedback__home-slider-slide swiper-slide">
                                    <div class="feedback__about">
                                        <img src="img/Home-two/icons/feedback-peop-1.svg" alt="image" class="feedback__peop">
                                        <div class="feedback__about-info">
                                            <h3 class="feedback__name">Kathleen Smith</h3>
                                            <h4 class="feedback__job sub-title">Web Designer</h4>
                                        </div>
                                    </div>
                                    <p class="feedback__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus  turpis.  pellentesque habitant morbil.</p>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="feedback__home-prev swiper-button-prev anim-items anim-no-hide anim-show"></div>
                        <div class="feedback__home-next swiper-button-next anim-items anim-no-hide anim-show"></div>
                    </div>
                </div>
            </section>
            <section class="team main__team">
                <div class="team__container container">
                    <div class="team__content anim-items anim-no-hide">
                        <h4 class="team__sub-title sub-title anim-no-hide anim-show">Our Team</h4>
                        <h2 class="team__title title anim-no-hide anim-show">Trusted by some Biggest Names</h2>
                        <div class="team__link-container anim-no-hide anim-show">
                            <a href="team.php" class="team__link">View Team Detail</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="company main__company">
                <div class="company__container anim-items anim-no-hide">
                    <?php 
                        for($i = 0; $i < 6; $i++):
                    ?>
                    <div class="company__item anim-no-hide anim-show">
                        <img src="img/Home-two/icons/company-home-<?php echo ($i + 1) ?>.svg" alt="company image" class="company__img">
                    </div>
                    <?php endfor; ?>
                </div>
            </section>
            <section class="plan main__plan">
                <div class="plan__container container">
                    <div class="plan__block">
                        <h4 class="plan__sub-title sub-title anim-items anim-no-hide anim-show">Choose Your Plan</h4>
                        <h2 class="plan__title title anim-items anim-no-hide anim-show">Save With Our Pricing Packages</h2>
                        <p class="plan__text anim-items anim-no-hide anim-show">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus sed turpis. Pellentesque pulvinar pellentesque habitant morbi tristique.</p>
                        <div class="plan__buttons anim-items anim-no-hide">
                            <div class="plan__item anim-show anim-item">
                                <input class="plan__radio" type="radio" name="btn-plan" id="Monthly" checked>
                                <label for="Monthly">Monthly</label>
                            </div>
                            <div class="plan__item anim-show anim-item">
                                <input class="plan__radio" type="radio" name="btn-plan" id="Yearly">
                                <label for="Yearly">Yearly</label>
                            </div>
                        </div>
                    </div>
                    <div class="plan__content">
                        <div class="plan__mon anim-items anim-no-hide">
                            <div class="plan__mon-item anim-show anim-item">
                                <div class="plan__top">
                                    <h3 class="plan__mon-title">Standard Plan</h3>
                                    <p class="plan__mon-text">The argument in favor of using to filler text goes something.</p>
                                    <div class="plan__info">
                                        <span class="plan__price">$56</span>
                                        <span class="plan__desc">Monthly</span>
                                    </div>
                                </div>
                                <ul class="plan__list">
                                    <li class="plan__list-item">24/7 system monitoring</li>
                                    <li class="plan__list-item">Security management</li>
                                    <li class="plan__list-item">Secure finance backup</li>
                                    <li class="plan__list-item">Remote support</li>
                                </ul>
                                <a href="#!" class="plan__link">Get This Plan</a>
                            </div>
                            <div class="plan__mon-item anim-show anim-item">
                                <div class="plan__top">
                                    <h3 class="plan__mon-title">Standard Plan</h3>
                                    <p class="plan__mon-text">The argument in favor of using to filler text goes something.</p>
                                    <div class="plan__info">
                                        <span class="plan__price">$75</span>
                                        <span class="plan__desc">Monthly</span>
                                    </div>
                                </div>
                                <ul class="plan__list">
                                    <li class="plan__list-item">24/7 system monitoring</li>
                                    <li class="plan__list-item">Security management</li>
                                    <li class="plan__list-item">Secure finance backup</li>
                                    <li class="plan__list-item">Remote support</li>
                                </ul>
                                <a href="#!" class="plan__link">Get This Plan</a>
                            </div>
                        </div>
                        <div class="plan__year none">
                            <div class="plan__mon-item">
                                <div class="plan__top">
                                    <h3 class="plan__mon-title">Standard Plan</h3>
                                    <p class="plan__mon-text">The argument in favor of using to filler text goes something.</p>
                                    <div class="plan__info">
                                        <span class="plan__price">$500</span>
                                        <span class="plan__desc">Yearly</span>
                                    </div>
                                </div>
                                <ul class="plan__list">
                                    <li class="plan__list-item">24/7 system monitoring</li>
                                    <li class="plan__list-item">Security management</li>
                                    <li class="plan__list-item">Secure finance backup</li>
                                    <li class="plan__list-item">Remote support</li>
                                </ul>
                                <a href="#!" class="plan__link">Get This Plan</a>
                            </div>
                            <div class="plan__mon-item">
                                <div class="plan__top">
                                    <h3 class="plan__mon-title">Standard Plan</h3>
                                    <p class="plan__mon-text">The argument in favor of using to filler text goes something.</p>
                                    <div class="plan__info">
                                        <span class="plan__price">$700</span>
                                        <span class="plan__desc">Yearly</span>
                                    </div>
                                </div>
                                <ul class="plan__list">
                                    <li class="plan__list-item">24/7 system monitoring</li>
                                    <li class="plan__list-item">Security management</li>
                                    <li class="plan__list-item">Secure finance backup</li>
                                    <li class="plan__list-item">Remote support</li>
                                </ul>
                                <a href="#!" class="plan__link">Get This Plan</a>
                            </div>
                        </div>
                    </div>
                </div>             
            </section>
            <section class="talk main__talk">
                <div class="talk__container container anim-items anim-no-hide">
                    <div class="talk__block anim-show anim-item">
                        <h4 class="talk__sub-title sub-title">Contact</h4>
                        <h2 class="talk__title title">Ready To Talk?</h2>
                        <p class="talk__text">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Massa placerat duis ultricies lacus sed turpis. Pellentesque  pellentesque habitant morbi tristique.</p>
                        <form action="#" id="form" class="talk__form">
                            <input type="email" class="talk__email _req _email" name="email" placeholder="your mail address">
                            <button type="submit" class="talk__btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer__container container">
                <div class="footer__block">
                    <img class="footer__img" src="img/Home-two/icons/footer-logo.svg" alt="Consultalk logo">
                    <div class="footer__content">
                        <h6 class="footer__sub-title">Help Link</h6>
                        <ul class="footer__list">
                            <li class="footer__item"><a href="services-page.php">Customers Services</a></li>
                            <li class="footer__item"><a href="#!">IT Department</a></li>
                            <li class="footer__item"><a href="about.php">About Our Company</a></li>
                            <li class="footer__item"><a href="#!">Business Growth</a></li>
                            <li class="footer__item"><a href="contact-page.php">Make An Appointment</a></li>
                        </ul>
                    </div>
                    <div class="footer__content">
                        <h6 class="footer__sub-title">Utility Pages</h6>
                        <ul class="footer__list">
                            <li class="footer__item"><a href="#!">Styleguide</a></li>
                            <li class="footer__item"><a href="#!">Start Here</a></li>
                            <li class="footer__item"><a href="#!">404 Not Found</a></li>
                            <li class="footer__item"><a href="#!">Password Protected</a></li>
                            <li class="footer__item"><a href="#!">Licenses</a></li>
                            <li class="footer__item"><a href="#!">Changelog</a></li>
                        </ul>
                    </div>
                    <div class="footer__content">
                        <h6 class="footer__sub-title">Utility Pages</h6>
                        <h5 class="footer__offer">Business Consulting.</h5>
                        <p class="footer__text">Graaf Florisstraat 22A,3021 CH RotterdamNetherlands</p>
                        <h5 class="footer__offer">Financial Consulting.</h5>
                        <p class="footer__text">365 Gran Via de CortsCatalanes, BA 08015</p>
                    </div>
                    <div class="footer__content">
                        <h6 class="footer__sub-title">Work inquiries</h6>
                        <p class="footer__desc">Interested in working with us?</p>
                        <p class="footer__email">info@consulting.com</p>
                        <p class="footer__desc">Interested in working with us?</p>
                        <a class="footer__phone" href="tel:012544432001">(01) 25444 32001</a>
                        <div class="footer__social">Fb. / Ig.  / Tw.  / Be.</div>
                    </div>
                </div>
                <p class="footer__copyright">©2020 Consultalk. All rights reserved | Terms of Service | Privacy Policy</p>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>