<?php
    $title = "Team";
    $style = 'team.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <?php
        $presentationSubTitle = "Team";
        $presentationTitle = "The Consultors";
        $bgImg = 'img/team/presentation-bg.webp';
        include('blocks/presentation.php');
    ?>
    <section class="team main__team">
        <div class="team__container container">
            <h2 class="team__title title anim-items anim-no-hide anim-show">Meet Our Great Team</h2>
            <div class="team__content anim-items anim-no-hide">
                <div class="team__content-item anim-show anim-item">
                    <p class="team__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
                </div>
                <div class="team__content-item anim-show anim-item">
                    <a href="contact-page.php" class="team__link">Join our team</a>
                </div>
            </div>
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
                <div class="team__item anim-show anim-item">
                    <div class="team__img">
                        <img src="img/team/team-image-4.jpeg" alt="image of a person">
                        <span class="team__job">CEO at Company</span>
                    </div>
                    <h3 class="team__name">Maya Elizabeth</h3>
                    <p class="team__info">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                    <ul class="team__social">
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-insta.svg" alt="instagram"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-faceb.svg" alt="facebook"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-tw.svg" alt="twitter"></a></li>
                    </ul>
                </div>
                <div class="team__item anim-show anim-item">
                    <div class="team__img">
                        <img src="img/team/team-image-5.jpeg" alt="image of a person">
                        <span class="team__job">CEO at Company</span>
                    </div>
                    <h3 class="team__name">Ryan Jackson</h3>
                    <p class="team__info">Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
                    <ul class="team__social">
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-insta.svg" alt="instagram"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-faceb.svg" alt="facebook"></a></li>
                        <li class="team__social-item"><a href="#!"><img src="img/about/icons/team-tw.svg" alt="twitter"></a></li>
                    </ul>
                </div>
                <div class="team__item anim-show anim-item">
                    <div class="team__img">
                        <img src="img/team/team-image-6.jpeg" alt="image of a person">
                        <span class="team__job">CEO at Company</span>
                    </div>
                    <h3 class="team__name">Lilly Victoria</h3>
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
        include('blocks/talk.php');
    ?>
</main>
<?php
    require_once('blocks/footer.php');
?>  