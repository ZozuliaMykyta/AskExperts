<?php
    $title = "About";
    $style = 'about.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <?php
        $presentationSubTitle = "Services";
        $presentationTitle = "Creative Services For Boost Your Business Growth";
        $bgImg = 'img/about/presentation-bg.webp';
        include('blocks/presentation.php');
    ?>
    <section class="vision main__vision">
        <div class="vision__container container">
            <div class="vision__content">
                <div class="vision__block-1">
                    <h4 class="vision__sub-title sub-title anim-items anim-no-hide anim-show-left">our vision</h4>
                    <h2 class="vision__title title anim-items anim-no-hide anim-show-left">Turn your ideas into reality.</h2>
                    <p class="vision__text anim-items anim-no-hide anim-show-left">Capitalize on low hanging fruit to identify a ballpark value added activity beta test. Override the digital divide with additional from DevOps.</p>
                    <div class="vision__ideas anim-items anim-no-hide">
                        <p class="vision__item anim-show-left anim-item">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day.</p>
                        <p class="vision__item anim-show-left anim-item">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test override the digital.</p>
                    </div>
                </div>
                <div class="vision__block-2">
                    <img src="img/about/vision-img.jpeg" alt="image" class="vision__img">
                </div>
            </div>
            <div class="vision__count">
                <div class="vision__count-item">
                    <?php echo "<span class='vision__num counter' data-to='1128' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                    <p class="vision__success">Successful Work</p>
                </div>
                <div class="vision__count-item">
                    <?php echo "<span class='vision__num counter' data-to='908' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                    <p class="vision__success">Team member</p>
                </div>
                <div class="vision__count-item">
                    <?php echo "<span class='vision__num counter' data-to='258' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                    <p class="vision__success">Happy Customers</p>
                </div>
                <div class="vision__count-item">
                    <?php echo "<span class='vision__num counter' data-to='564' data-stop='0'>0</span>" . "<span style='font-size: 50px;font-weight: 700;line-height: 116%;'>+</span>" ?>
                    <p class="vision__success">Creative Idea</p>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits main__benefits">
        <div class="benefits__container container">
            <h4 class="benefits__sub-title sub-title anim-items anim-no-hide anim-show">Growing with our Clients</h4>
            <h2 class="benefits__title title anim-items anim-no-hide anim-show">Our core values & principles</h2>
            <div class="benefits__about anim-items anim-no-hide">
                <p class="benefits__text anim-show anim-item">Capitalize on low hanging fruit to identify a ballpark value added activity beta test. Override the digital divide with additional from DevOps.</p>
                <div class="benefits__link-block anim-show anim-item">
                    <a href="contact-page.php" class="benefits__link">Get in touch</a>
                </div>
            </div>
            <div class="benefits__body anim-items anim-no-hide">
                <div class="benefits__item anim-show anim-item">
                    <div class="benefits__icon"><img src="img/about/icons/benefits-icon-1.svg" alt="icon"></div>
                    <h5 class="benefits__desc">Creative Ideas</h5>
                    <p class="benefits__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget accumsan augue Donec aliquam.</p>
                    <a href="services-single.php" class="benefits__link-more">Read More</a>
                </div>
                <div class="benefits__item anim-show anim-item">
                    <div class="benefits__icon"><img src="img/about/icons/benefits-icon-2.svg" alt="icon"></div>
                    <h5 class="benefits__desc">Best Features</h5>
                    <p class="benefits__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="services-single.php" class="benefits__link-more">Read More</a>
                </div>
                <div class="benefits__item anim-show anim-item">
                    <div class="benefits__icon"><img src="img/about/icons/benefits-icon-3.svg" alt="icon"></div>
                    <h5 class="benefits__desc">Experience</h5>
                    <p class="benefits__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget accumsan augue Donec aliquam.</p>
                    <a href="services-single.php" class="benefits__link-more">Read More</a>
                </div>
                <div class="benefits__item anim-show anim-item">
                    <div class="benefits__icon"><img src="img/about/icons/benefits-icon-4.svg" alt="icon"></div>
                    <h5 class="benefits__desc">Easy Solutions</h5>
                    <p class="benefits__info">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="services-single.php" class="benefits__link-more">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="history main__history">
        <div class="history__container container">
            <h4 class="history__sun-title sub-title">Our History</h4>
            <h2 class="history__title title">Better Website Means A User Experience</h2>
            <p class="history__text">Ippsum is the result of synergy between our teams and our customers. Our company culture is focused on excellent productivity, customer satisfaction, respect for team and individual achievements.</p>
            <div class="history__video-wrapper">
                <div class="history__video">
                    <iframe src="https://www.youtube.com/embed/3GvpClKz_AA?si=Om3eucfv5Ojz11S5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="team main__team">
        <div class="team__container container">
            <h4 class="team__sub-title sub-title anim-items anim-no-hide anim-show">Our team</h4>
            <h2 class="team__title title anim-items anim-no-hide anim-show">We champion the bold to achieve the extraordinary</h2>
            <p class="team__text anim-items anim-no-hide anim-show">Ippsum is the result of synergy between our teams and our customers. Our company culture is focused on excellent productivity, customer satisfaction, respect for team.</p>
            <div class="team__body anim-items anim-no-hide">
                <div class="team__item anim-show anim-item">
                    <div class="team__img">
                        <img src="img/about/team-person-1.jpeg" alt="image of a person">
                        <span class="team__job">CEO at Company</span>
                    </div>
                    <h3 class="team__name">Sarah Jasmine</h3>
                    <p class="team__info">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                    <ul class="team__social">
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-insta.svg" alt="instagram"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-faceb.svg" alt="facebook"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-tw.svg" alt="twitter"></a></li>
                    </ul>
                </div>
                <div class="team__item anim-show anim-item">
                    <div class="team__img">
                        <img src="img/about/team-person-2.jpeg" alt="image of a person">
                        <span class="team__job">Manager</span>
                    </div>
                    <h3 class="team__name">John Carter</h3>
                    <p class="team__info">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                    <ul class="team__social">
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-insta.svg" alt="instagram"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-faceb.svg" alt="facebook"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-tw.svg" alt="twitter"></a></li>
                    </ul>
                </div>
                <div class="team__item anim-show anim-item">
                    <div class="team__img">
                        <img src="img/about/team-person-3.jpeg" alt="image of a person">
                        <span class="team__job">CEO at Company</span>
                    </div>
                    <h3 class="team__name">Daisy Stella</h3>
                    <p class="team__info">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                    <ul class="team__social">
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-insta.svg" alt="instagram"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-faceb.svg" alt="facebook"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-tw.svg" alt="twitter"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('blocks/results.php');
    ?>
</main>
<?php
    require_once('blocks/footer.php');
?>  