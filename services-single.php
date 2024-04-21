<?php
    $title = "Services-single";
    $style = 'services-single.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <?php
        $presentationSubTitle = "Service single";
        $presentationTitle = "Services Details";
        $bgImg = 'img/services-single/presentation-bg.webp';
        include('blocks/presentation.php');
    ?>
    <section class="projections main__projections">
        <div class="projections__container container">
            <img class="projections__icon-top" src="img/main-page/icons/services-icon-2.svg" alt="icon">
            <h2 class="projections__title title">Financial Projections</h2>
            <p class="projections__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <!-- Slider main container -->
            <div class="projections__slider">
            <!-- Additional required wrapper -->
            <div class="projections__slider-wrapper swiper-wrapper">
                <!-- Slides -->
                <div class="projections__slider-slide swiper-slide">
                    <div class="projections__icon">
                        <svg width="34.000000" height="26.000000" viewBox="0 0 34 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Vector" d="M32.69 -0.94L1.3 -0.94C0.96 -0.94 0.62 -0.8 0.38 -0.56C0.13 -0.32 0 0.01 0 0.36L0 22.46C0 23.15 0.27 23.81 0.76 24.3C1.25 24.78 1.92 25.06 2.61 25.06L31.38 25.06C32.07 25.06 32.74 24.78 33.23 24.3C33.72 23.81 34 23.15 34 22.46L34 0.36C34 0.01 33.86 -0.32 33.61 -0.56C33.37 -0.8 33.03 -0.94 32.69 -0.94ZM2.61 9.46L9.15 9.46L9.15 14.66L2.61 14.66L2.61 9.46ZM11.76 9.46L31.38 9.46L31.38 14.66L11.76 14.66L11.76 9.46ZM2.61 17.26L9.15 17.26L9.15 22.46L2.61 22.46L2.61 17.26ZM31.38 22.46L11.76 22.46L11.76 17.26L31.38 17.26L31.38 22.46Z" fill="#181818" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </svg>
                    </div>
                    <h3 class="projections__slider-title">The Balance Sheet</h3>
                    <p class="projections__slider-text">The Balance Sheet is a summary of the assets and liabilities and equity of a business at a specific point of time.</p>
                </div>
                <div class="projections__slider-slide swiper-slide">
                    <div class="projections__icon">
                        <svg width="38.000000" height="26.000000" viewBox="0 0 38 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Icon" d="M35.28 -0.94L2.71 -0.94C1.99 -0.94 1.3 -0.67 0.79 -0.18C0.28 0.31 0 0.97 0 1.66L0 7.01L0 22.46C0 23.15 0.28 23.81 0.79 24.3C1.3 24.78 1.99 25.06 2.71 25.06L35.28 25.06C36 25.06 36.69 24.78 37.2 24.3C37.71 23.81 38 23.15 38 22.46L38 1.66C38 0.97 37.71 0.31 37.2 -0.18C36.69 -0.67 36 -0.94 35.28 -0.94ZM20.35 19.87L17.64 19.87C17.28 19.87 16.93 19.73 16.68 19.49C16.42 19.25 16.28 18.92 16.28 18.57C16.28 18.23 16.42 17.89 16.68 17.65C16.93 17.41 17.28 17.27 17.64 17.27L20.35 17.27C20.71 17.27 21.06 17.41 21.31 17.65C21.57 17.89 21.71 18.23 21.71 18.57C21.71 18.92 21.57 19.25 21.31 19.49C21.06 19.73 20.71 19.87 20.35 19.87ZM31.21 19.87L25.78 19.87C25.42 19.87 25.08 19.73 24.82 19.49C24.57 19.25 24.42 18.92 24.42 18.57C24.42 18.23 24.57 17.89 24.82 17.65C25.08 17.41 25.42 17.27 25.78 17.27L31.21 17.27C31.57 17.27 31.91 17.41 32.17 17.65C32.42 17.89 32.57 18.23 32.57 18.57C32.57 18.92 32.42 19.25 32.17 19.49C31.91 19.73 31.57 19.87 31.21 19.87ZM2.71 5.71L2.71 1.66L35.28 1.66L35.28 5.71L2.71 5.71Z" fill="#181818" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </svg>
                    </div>
                    <h3 class="projections__slider-title">Income Statement</h3>
                    <p class="projections__slider-text">The Income (Profit and Loss) Statement, commonly referred to as the P&L statement, summarizes the revenue and expenses for a specific time period (one month, one quarter, one year, etc.)</p>
                </div>
                <div class="projections__slider-slide swiper-slide">
                    <div class="projections__icon">
                        <svg width="36.000000" height="30.000000" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Vector" d="M36 27.81C36 28.14 35.87 28.46 35.64 28.69C35.42 28.93 35.11 29.06 34.79 29.06L1.2 29.06C0.88 29.06 0.57 28.93 0.35 28.69C0.12 28.46 0 28.14 0 27.81C0 27.48 0.12 27.16 0.35 26.92C0.57 26.69 0.88 26.56 1.2 26.56L34.79 26.56C35.11 26.56 35.42 26.69 35.64 26.92C35.87 27.16 36 27.48 36 27.81ZM1.24 10.65C1.17 10.39 1.18 10.11 1.28 9.86C1.37 9.6 1.54 9.39 1.77 9.25L17.37 -0.75C17.55 -0.88 17.77 -0.94 18 -0.94C18.22 -0.94 18.44 -0.88 18.62 -0.75L34.23 9.25C34.45 9.39 34.62 9.6 34.71 9.86C34.81 10.11 34.82 10.39 34.75 10.65C34.68 10.91 34.53 11.14 34.32 11.31C34.11 11.47 33.86 11.56 33.6 11.56L30 11.56L30 21.56L32.39 21.56C32.71 21.56 33.02 21.69 33.24 21.92C33.47 22.16 33.6 22.48 33.6 22.81C33.6 23.14 33.47 23.46 33.24 23.69C33.02 23.93 32.71 24.06 32.39 24.06L3.6 24.06C3.28 24.06 2.97 23.93 2.75 23.69C2.52 23.46 2.39 23.14 2.39 22.81C2.39 22.48 2.52 22.16 2.75 21.92C2.97 21.69 3.28 21.56 3.6 21.56L6 21.56L6 11.56L2.39 11.56C2.13 11.56 1.88 11.47 1.67 11.31C1.46 11.14 1.31 10.91 1.24 10.65ZM20.39 20.31C20.39 20.64 20.52 20.96 20.75 21.19C20.97 21.43 21.28 21.56 21.6 21.56C21.91 21.56 22.22 21.43 22.44 21.19C22.67 20.96 22.79 20.64 22.79 20.31L22.79 12.81C22.79 12.48 22.67 12.16 22.44 11.93C22.22 11.69 21.91 11.56 21.6 11.56C21.28 11.56 20.97 11.69 20.75 11.93C20.52 12.16 20.39 12.48 20.39 12.81L20.39 20.31ZM13.2 20.31C13.2 20.64 13.32 20.96 13.55 21.19C13.77 21.43 14.08 21.56 14.39 21.56C14.71 21.56 15.02 21.43 15.24 21.19C15.47 20.96 15.6 20.64 15.6 20.31L15.6 12.81C15.6 12.48 15.47 12.16 15.24 11.93C15.02 11.69 14.71 11.56 14.39 11.56C14.08 11.56 13.77 11.69 13.55 11.93C13.32 12.16 13.2 12.48 13.2 12.81L13.2 20.31Z" fill="#181818" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </svg>
                    </div>
                    <h3 class="projections__slider-title">Financial Plan</h3>
                    <p class="projections__slider-text">Keep your information current and review the documents on a regular basis (monthly or more often if needed). Review them with key individuals within your company.</p>
                </div>
                <div class="projections__slider-slide swiper-slide">
                    <div class="projections__icon">
                        <svg width="34.000000" height="26.000000" viewBox="0 0 34 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Vector" d="M32.69 -0.94L1.3 -0.94C0.96 -0.94 0.62 -0.8 0.38 -0.56C0.13 -0.32 0 0.01 0 0.36L0 22.46C0 23.15 0.27 23.81 0.76 24.3C1.25 24.78 1.92 25.06 2.61 25.06L31.38 25.06C32.07 25.06 32.74 24.78 33.23 24.3C33.72 23.81 34 23.15 34 22.46L34 0.36C34 0.01 33.86 -0.32 33.61 -0.56C33.37 -0.8 33.03 -0.94 32.69 -0.94ZM2.61 9.46L9.15 9.46L9.15 14.66L2.61 14.66L2.61 9.46ZM11.76 9.46L31.38 9.46L31.38 14.66L11.76 14.66L11.76 9.46ZM2.61 17.26L9.15 17.26L9.15 22.46L2.61 22.46L2.61 17.26ZM31.38 22.46L11.76 22.46L11.76 17.26L31.38 17.26L31.38 22.46Z" fill="#181818" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </svg>
                    </div>
                    <h3 class="projections__slider-title">The Balance Sheet</h3>
                    <p class="projections__slider-text">The Balance Sheet is a summary of the assets and liabilities and equity of a business at a specific point of time.</p>
                </div>
                <div class="projections__slider-slide swiper-slide">
                    <div class="projections__icon">
                        <svg width="38.000000" height="26.000000" viewBox="0 0 38 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Icon" d="M35.28 -0.94L2.71 -0.94C1.99 -0.94 1.3 -0.67 0.79 -0.18C0.28 0.31 0 0.97 0 1.66L0 7.01L0 22.46C0 23.15 0.28 23.81 0.79 24.3C1.3 24.78 1.99 25.06 2.71 25.06L35.28 25.06C36 25.06 36.69 24.78 37.2 24.3C37.71 23.81 38 23.15 38 22.46L38 1.66C38 0.97 37.71 0.31 37.2 -0.18C36.69 -0.67 36 -0.94 35.28 -0.94ZM20.35 19.87L17.64 19.87C17.28 19.87 16.93 19.73 16.68 19.49C16.42 19.25 16.28 18.92 16.28 18.57C16.28 18.23 16.42 17.89 16.68 17.65C16.93 17.41 17.28 17.27 17.64 17.27L20.35 17.27C20.71 17.27 21.06 17.41 21.31 17.65C21.57 17.89 21.71 18.23 21.71 18.57C21.71 18.92 21.57 19.25 21.31 19.49C21.06 19.73 20.71 19.87 20.35 19.87ZM31.21 19.87L25.78 19.87C25.42 19.87 25.08 19.73 24.82 19.49C24.57 19.25 24.42 18.92 24.42 18.57C24.42 18.23 24.57 17.89 24.82 17.65C25.08 17.41 25.42 17.27 25.78 17.27L31.21 17.27C31.57 17.27 31.91 17.41 32.17 17.65C32.42 17.89 32.57 18.23 32.57 18.57C32.57 18.92 32.42 19.25 32.17 19.49C31.91 19.73 31.57 19.87 31.21 19.87ZM2.71 5.71L2.71 1.66L35.28 1.66L35.28 5.71L2.71 5.71Z" fill="#181818" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </svg>
                    </div>
                    <h3 class="projections__slider-title">Income Statement</h3>
                    <p class="projections__slider-text">The Income (Profit and Loss) Statement, commonly referred to as the P&L statement, summarizes the revenue and expenses for a specific time period (one month, one quarter, one year, etc.)</p>
                </div>
                <div class="projections__slider-slide swiper-slide">
                    <div class="projections__icon">
                        <svg width="36.000000" height="30.000000" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Vector" d="M36 27.81C36 28.14 35.87 28.46 35.64 28.69C35.42 28.93 35.11 29.06 34.79 29.06L1.2 29.06C0.88 29.06 0.57 28.93 0.35 28.69C0.12 28.46 0 28.14 0 27.81C0 27.48 0.12 27.16 0.35 26.92C0.57 26.69 0.88 26.56 1.2 26.56L34.79 26.56C35.11 26.56 35.42 26.69 35.64 26.92C35.87 27.16 36 27.48 36 27.81ZM1.24 10.65C1.17 10.39 1.18 10.11 1.28 9.86C1.37 9.6 1.54 9.39 1.77 9.25L17.37 -0.75C17.55 -0.88 17.77 -0.94 18 -0.94C18.22 -0.94 18.44 -0.88 18.62 -0.75L34.23 9.25C34.45 9.39 34.62 9.6 34.71 9.86C34.81 10.11 34.82 10.39 34.75 10.65C34.68 10.91 34.53 11.14 34.32 11.31C34.11 11.47 33.86 11.56 33.6 11.56L30 11.56L30 21.56L32.39 21.56C32.71 21.56 33.02 21.69 33.24 21.92C33.47 22.16 33.6 22.48 33.6 22.81C33.6 23.14 33.47 23.46 33.24 23.69C33.02 23.93 32.71 24.06 32.39 24.06L3.6 24.06C3.28 24.06 2.97 23.93 2.75 23.69C2.52 23.46 2.39 23.14 2.39 22.81C2.39 22.48 2.52 22.16 2.75 21.92C2.97 21.69 3.28 21.56 3.6 21.56L6 21.56L6 11.56L2.39 11.56C2.13 11.56 1.88 11.47 1.67 11.31C1.46 11.14 1.31 10.91 1.24 10.65ZM20.39 20.31C20.39 20.64 20.52 20.96 20.75 21.19C20.97 21.43 21.28 21.56 21.6 21.56C21.91 21.56 22.22 21.43 22.44 21.19C22.67 20.96 22.79 20.64 22.79 20.31L22.79 12.81C22.79 12.48 22.67 12.16 22.44 11.93C22.22 11.69 21.91 11.56 21.6 11.56C21.28 11.56 20.97 11.69 20.75 11.93C20.52 12.16 20.39 12.48 20.39 12.81L20.39 20.31ZM13.2 20.31C13.2 20.64 13.32 20.96 13.55 21.19C13.77 21.43 14.08 21.56 14.39 21.56C14.71 21.56 15.02 21.43 15.24 21.19C15.47 20.96 15.6 20.64 15.6 20.31L15.6 12.81C15.6 12.48 15.47 12.16 15.24 11.93C15.02 11.69 14.71 11.56 14.39 11.56C14.08 11.56 13.77 11.69 13.55 11.93C13.32 12.16 13.2 12.48 13.2 12.81L13.2 20.31Z" fill="#181818" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </svg>
                    </div>
                    <h3 class="projections__slider-title">Financial Plan</h3>
                    <p class="projections__slider-text">Keep your information current and review the documents on a regular basis (monthly or more often if needed). Review them with key individuals within your company.</p>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="projections__slider-prev swiper-button-prev"></div>
            <div class="projections__slider-next swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="expect main__expect">
        <div class="expect__container container">
            <div class="expect__img">
                <img src="img/services-single/expect-img.jpeg" alt="image">
            </div>
            <div class="expect__body">
                <h4 class="expect__sub-title sub-title anim-items anim-no-hide anim-show">we'll work with you</h4>
                <h2 class="expect__title title anim-items anim-no-hide anim-show">What To Expect</h2>
                <p class="expect__text anim-items anim-no-hide anim-show">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="expect__info anim-items anim-no-hide">
                    <p class="expect__item anim-no-hide anim-show">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day.</p>
                    <p class="expect__item anim-no-hide anim-show">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test override the digital.</p>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('blocks/client.php');
    ?>
    <section class="history main__history">
        <div class="history__container container">
            <h4 class="history__sub-title sub-title">Our History</h4>
            <h2 class="history__title title">Strategy for Every Stage in the Client's Journey</h2>
            <div class="history__video-wrapper">
                <div class="history__video">
                    <iframe src="https://www.youtube.com/embed/3GvpClKz_AA?si=Om3eucfv5Ojz11S5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="contact main__contact">
        <div class="contact__container container">
            <div class="contact__content">
                <h4 class="contact__sub-title sub-title anim-items anim-no-hide anim-show-left">Proccess</h4>
                <h2 class="contact__title title anim-items anim-no-hide anim-show-left">Contact Us. It’s Easy.</h2>
                <p class="contact__text anim-items anim-no-hide anim-show-left">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative.</p>
                <div class="contact__item anim-items anim-no-hide anim-show-left">
                    <img class="contact__img" src="img/main-page/icons/contact-phone.svg" alt="icon">
                    <div class="contact__sub-item">
                        <div class="contact__desc">Call Today</div>
                        <div class="contact__info">+1 800 100 900</div>
                    </div>
                </div>
                <div class="contact__item anim-items anim-no-hide anim-show-left">
                    <img class="contact__img" src="img/main-page/icons/contact-time.svg" alt="icon">
                    <div class="contact__sub-item">
                        <div class="contact__desc">Monday To Friday</div>
                        <div class="contact__info">9AM - 5PM</div>
                    </div>
                </div>
                <div class="contact__item anim-items anim-no-hide anim-show-left">
                    <img class="contact__img" src="img/main-page/icons/contact-geo.svg" alt="icon">
                    <div class="contact__sub-item">
                        <div class="contact__desc">USA Office</div>
                        <div class="contact__info">195 Devonshire St Boston, MA 02110</div>
                    </div>
                </div>
            </div>
            <div class="contact__block">
                <div class="contact__block-img">
                    <img src="img/services-single/contact-img-1.jpeg" alt="image">
                </div>
                <div class="contact__block-img">
                    <img src="img/services-single/contact-img-2.jpeg" alt="image">
                </div>
                <div class="contact__block-img">
                    <img src="img/services-single/contact-img-3.jpeg" alt="image">
                </div>
            </div>
        </div>
    </section>
    <section class="questions main__questions">
        <div class="questions__container container">
            <h4 class="questions__sub-title sub-title anim-items anim-no-hide anim-show">faq</h4>
            <h2 class="questions__title title anim-items anim-no-hide anim-show">Customer Questions</h2>
            <div class="questions__accordion anim-items anim-no-hide">
                <button class="questions__accordion-btn anim-no-hide anim-show">What will happen when I’ve sent my application?</button>
                <div class="questions__panel">
                    <p class="questions__text">Ippsum is the result of synergy between our teams and our customers. Our company culture is focused on excellent productivity, customer satisfaction, respect for team and individual achievements.</p>
                </div>
                <button class="questions__accordion-btn anim-no-hide anim-show">Can I get a free trial before I purchase?</button>
                <div class="questions__panel">
                    <p class="questions__text">Ippsum is the result of synergy between our teams and our customers. Our company culture is focused on excellent productivity, customer satisfaction, respect for team and individual achievements.</p>
                </div>
                <button class="questions__accordion-btn anim-no-hide anim-show">What should I include in my personal statement?</button>
                <div class="questions__panel">
                    <p class="questions__text">Ippsum is the result of synergy between our teams and our customers. Our company culture is focused on excellent productivity, customer satisfaction, respect for team and individual achievements.</p>
                </div>
                <button class="questions__accordion-btn anim-no-hide anim-show">Will membership plans be charged automatically?</button>
                <div class="questions__panel">
                    <p class="questions__text">Ippsum is the result of synergy between our teams and our customers. Our company culture is focused on excellent productivity, customer satisfaction, respect for team and individual achievements.</p>
                </div>
                <button class="questions__accordion-btn anim-no-hide anim-show">What will happen when I’ve sent my application?</button>
                <div class="questions__panel">
                    <p class="questions__text">Ippsum is the result of synergy between our teams and our customers. Our company culture is focused on excellent productivity, customer satisfaction, respect for team and individual achievements.</p>
                </div>
                <button class="questions__accordion-btn anim-no-hide anim-show">Can I get a free trial before I purchase?</button>
                <div class="questions__panel">
                    <p class="questions__text">Ippsum is the result of synergy between our teams and our customers. Our company culture is focused on excellent productivity, customer satisfaction, respect for team and individual achievements.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    require_once('blocks/footer.php');
?>  