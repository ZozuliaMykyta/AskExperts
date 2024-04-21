<?php
    $title = "AskExperts";
    $style = 'style.css';
    require_once('blocks/header.php');
?>
    <main class="main">
        <section class="introduction main__introduction">
            <div class="introduction__container container anim-items anim-no-hide">
                <div class="introduction__content anim-show">
                    <h1 class="introduction__title">Your small business growth advisors</h1>
                    <p class="introduction__sub-title">Get help from Alex Moore, a professional business coach with advanced experience on growth and business scaling.</p>
                    <div class="introduction__links">
                        <a href="services-page.php" class="introduction__link-01">Our Services</a>
                        <a href="contact-page.php" class="introduction__link-02">
                            <img src="img/main-page/icons/form.svg" alt="form">
                            <span>Book a Meeting</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include('blocks/client.php');
        ?>
        <section class="about main__about">
            <div class="about__container container">
                <div class="about__content">
                    <span class="about__desc">About Us</span>
                    <h2 class="about__title title">About our Consuting Agency Team</h2>
                    <p class="about__sub-title">We create experiences and build products that make business grow</p>
                    <p class="about__text">Get help from Alex Moore, a professional business coach with advanced experience on growth and business scaling.</p>
                    <div class="about__info">
                        <div class="about__item">
                            <?php echo "<span class='about__count-serv counter' data-to='400' data-stop='0'>0</span>" . "<span style='font-size: 30px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                            <p class="about__count-text">Business Services</p>
                        </div>
                        <div class="about__item">
                            <?php echo "<span class='about__count-cust counter' data-to='100' data-stop='0'>0</span>" . "<span style='font-size: 30px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                            <p class="about__count-text">Happy Customer</p>
                        </div>
                    </div>
                </div>
                <div class="about__body">
                    <img src="img/main-page/about.jpeg" alt="image">
                    <div class="about__market">
                        <div class="about__progress">
                            <img src="img/main-page/about-ellipse.svg" alt="ellipse">  
                            <div class='about__num counter' data-to='50' data-stop='0'>0</div>
                        </div>
                        <p>Market Experiences</p>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include('blocks/services.php');
        ?>
        <section class="offer main__offer">
            <div class="offer__container container">
                <div class="offer__steps">
                    <h4 class="offer__steps-sub-title sub-title anim-items anim-no-hide anim-show-left">Proccess</h4>
                    <h2 class="offer__steps-title title anim-items anim-no-hide anim-show-left">There have some easy steps to join with us!</h2>
                    <p class="offer__steps-text anim-items anim-no-hide anim-show-left">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <div class="offer__steps-body anim-items anim-no-hide">
                        <div class="offer__steps-item anim-no-hide anim-show-left">
                            <span class="offer__steps-count">1</span>
                            <div>
                                <h3 class="offer__steps-desc">Setup Account</h3>
                                <p class="offer__steps-info">We understand the importance of approaching each work integrally.</p>
                            </div>
                        </div>
                        <div class="offer__steps-item anim-no-hide anim-show-left">
                            <div class="offer__steps-count">2</div>
                            <div>
                                <h3 class="offer__steps-desc">Consult with us</h3>
                                <p class="offer__steps-info">Increase social reach and productivity with our App Directory, a collection.</p>
                            </div>
                        </div>
                        <div class="offer__steps-item anim-no-hide anim-show-left">
                            <div class="offer__steps-count">3</div>
                            <div>
                                <h3 class="offer__steps-desc">Payment & Boost</h3>
                                <p class="offer__steps-info">We encourage every team member to be a whole person. We have a flexible.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offer__exp">
                    <h4 class="offer__exp-sub-title sub-title anim-items anim-no-hide anim-show-right">Growing with our clients</h4>
                    <h2 class="offer__exp-title title anim-items anim-no-hide anim-show-right">30 Years of Experience</h2>
                    <p class="offer__exp-text anim-items anim-no-hide anim-show-right">Capitalize on low hanging fruit to identify a ballpark value added activity beta test. Override the digital divide with additional from DevOps.</p>
                    <p class="offer__exp-text anim-items anim-no-hide anim-show-right">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <div class="offer__exp-body anim-items anim-no-hide">
                        <div class="offer__exp-item anim-no-hide anim-show-right">
                            <img src="img/main-page/icons/offer-exp-1.svg" alt="icon" class="offer__exp-img">
                            <h3 class="offer__exp-desc">Consistency</h3>
                            <p class="offer__exp-info">Podcasting operational change management  workflow.</p>
                        </div>
                        <div class="offer__exp-item anim-no-hide anim-show-right">
                            <img src="img/main-page/icons/offer-exp-2.svg" alt="icon" class="offer__exp-img">
                            <h3 class="offer__exp-desc">Improvement</h3>
                            <p class="offer__exp-info">Podcasting operational change management  workflow.</p>
                        </div>
                        <div class="offer__exp-item anim-no-hide anim-show-right">
                            <img src="img/main-page/icons/offer-exp-3.svg" alt="icon" class="offer__exp-img">
                            <h3 class="offer__exp-desc">Branching</h3>
                            <p class="offer__exp-info">Podcasting operational change management  workflow.</p>
                        </div>
                        <div class="offer__exp-item anim-no-hide anim-show-right">
                            <img src="img/main-page/icons/offer-exp-4.svg" alt="icon" class="offer__exp-img">
                            <h3 class="offer__exp-desc">Company Growth</h3>
                            <p class="offer__exp-info">Podcasting operational change management  workflow.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="companies main__companies">
            <div class="companies__container container">
                <h4 class="companies__sub-title sub-title anim-items anim-no-hide anim-show-left">Proccess</h4>
                <div class="companies__nav">
                    <h2 class="companies__title title anim-items anim-no-hide anim-show-left">Our client, global analytical techno company, wanted to build market.</h2>
                    <a href="case-study.php" class="companies__link anim-items anim-no-hide anim-show-right">More Gallery</a>
                </div>
                <div class="companies__body anim-items anim-no-hide">
                    <?php
                        for($i = 0; $i < 6; $i++):
                    ?>
                    <div class="companies__item anim-show anim-item">
                        <img src="img/main-page/companies-<?php echo ($i + 1) ?>.jpeg" alt="image" class="companies__img">
                        <div class="companies__content">
                            <div class="companies__sub-content">
                                <h5 class="companies__info">Taxes & Efficiency</h5>
                                <p class="companies__desc">Business</p>
                            </div>
                            <a href="#!" class="companies__plus"><span>+</span></a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="companies__count">
                    <div class="companies__count-item">
                        <?php echo "<span class='companies__num counter' data-to='1128' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                        <p class="companies__success">Successful Work</p>
                    </div>
                    <div class="companies__count-item">
                        <?php echo "<span class='companies__num counter' data-to='908' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                        <p class="companies__success">Team member</p>
                    </div>
                    <div class="companies__count-item">
                        <?php echo "<span class='companies__num counter' data-to='258' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                        <p class="companies__success">Happy Customers</p>
                    </div>
                    <div class="companies__count-item">
                        <?php echo "<span class='companies__num counter' data-to='564' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                        <p class="companies__success">Creative Idea</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="feedback main__feedback">
            <div class="feedback__container container">
                <h4 class="feedback__sub-title sub-title anim-items anim-no-hide anim-show">Client Feedback</h4>
                <h2 class="feedback__title anim-items anim-no-hide anim-show">“Lorem ipsum dolor sit amet, consectetur <span>adipiscing elit, sed do eiusmod</span> tempor incididunt ut labore et dolore”</h2>
                    <!-- Slider main container -->
                    <div class="feedback__slider swiper anim-items anim-no-hide">
                        <!-- Additional required wrapper -->
                        <div class="feedback__wrapper swiper-wrapper">
                            <!-- Slides -->
                            <?php
                            for($i = 0; $i < 3; $i++):
                            ?>
                            <div class="feedback__slide swiper-slide">
                                <img class="anim-show anim-item" src="img/main-page/feedback-01.jpeg" alt="person's photo">
                                <h5 class="feedback__name anim-show anim-item">Kathleen Smith</h5>
                                <h6 class="feedback__job anim-show anim-item">Web Designer</h6>
                            </div>
                            <?php endfor; ?>
                        </div>
                    <!-- If we need navigation buttons -->
                    <div class="feedback__button-prev swiper-button-prev anim-items anim-no-hide anim-show-btn-left"></div>
                    <div class="feedback__button-next swiper-button-next anim-items anim-no-hide anim-show-btn-right"></div>
                </div>
            </div>
        </section>
        <?php
            include('blocks/results.php');
        ?>
        <section class="news main__news">
            <div class="news__container container">
                <h4 class="news__sub-title sub-title anim-items anim-no-hide anim-show-left">Blog</h4>
                <div class="news__more">
                    <h2 class="news__title title anim-items anim-no-hide anim-show-left">Take a look at our latest articles & resources</h2>
                    <a href="blog.php" class="news__more-link anim-items anim-no-hide anim-show-right">More News</a>
                </div>
                <div class="news__content anim-items anim-no-hide">
                    <div class="news__item anim-show-left anim-item">
                        <img src="img/main-page/news-img-1.jpeg" alt="image" class="news__img">
                        <h3 class="news__desc">Consulting Fees Study 2019 (And How To Raise Your Rates)</h3>
                        <p class="news__text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                        <div class="news__info">
                            <img src="img/main-page/news-person-1.svg" alt="person's image" class="news__info-img">
                            <span class="news__name">John Carter</span>
                            <span class="news__date">September 1, 2022</span>
                            <a href="blog-single.php" class="news__link">Read More</a>
                        </div>
                    </div>
                    <div class="news__item anim-show-right anim-item">
                        <img src="img/main-page/news-img-2.jpeg" alt="image" class="news__img">
                        <h3 class="news__desc">What is growth hacking and how to apply it to your startup</h3>
                        <p class="news__text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                        <div class="news__info">
                            <img src="img/main-page/news-person-2.svg" alt="person's image" class="news__info-img">
                            <span class="news__name">Nayra Melson</span>
                            <span class="news__date">September 1, 2022</span>
                            <a href="blog-single.php" class="news__link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include('blocks/contact.php');
        ?>
    </main>
<?php
    require_once('blocks/footer.php');
?>  