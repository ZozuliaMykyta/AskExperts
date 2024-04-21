<?php
    $title = "Contact";
    $style = 'contact-page.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <?php
        $presentationSubTitle = "Contact us";
        $presentationTitle = "Feel Free To Reach Us";
        $bgImg = 'img/contact-page/presentation-bg.webp';
        include('blocks/presentation.php');
    ?>
    <section class="talk main__talk">
        <div class="talk__container container">
            <div class="talk__img">
                <img src="img/contact-page/talk-img.jpeg" alt="image">
            </div>
            <div class="talk__body">
                <h4 class="talk__sub-title sub-title anim-items anim-no-hide anim-show">Let’s talk</h4>
                <h2 class="talk__title title anim-items anim-no-hide anim-show">Get In Touch With Us</h2>
                <p class="talk__text anim-items anim-no-hide anim-show">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="talk__block anim-items anim-no-hide">
                    <div class="talk__item anim-show anim-item">
                        <div class="talk__icon"><img class="talk__icon-img" src="img/contact-page/icons/tel-icon.svg" alt="telephone"></div>
                        <div class="talk__content">
                            <h6 class="talk__desc">Have Any Question?</h6>
                            <p class="talk__info">Free +01 238 543 987</p>
                        </div>
                    </div>
                    <div class="talk__item anim-show anim-item">
                        <div class="talk__icon"><img class="talk__icon-img" src="img/contact-page/icons/mail-icon.svg" alt="mail"></div>
                        <div class="talk__content">
                            <h6 class="talk__desc">Write Email</h6>
                            <p class="talk__info">Info@consultalk.com</p>
                        </div>
                    </div>
                    <div class="talk__item anim-show anim-item">
                        <div class="talk__icon"><img class="talk__icon-img" src="img/contact-page/icons/loc-icon.svg" alt="location"></div>
                        <div class="talk__content">
                            <h6 class="talk__desc">Visit Anytime</h6>
                            <p class="talk__info">King Street, Prior Lake, New York.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('blocks/subscribe.php');
    ?>
    <?php
        include('blocks/contact.php');
    ?>
</main>
<?php
    require_once('blocks/footer.php');
?>  