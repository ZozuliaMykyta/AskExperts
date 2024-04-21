<?php
    $title = "Services";
    $style = 'services-page.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <?php
        $presentationSubTitle = "Services";
        $presentationTitle = "Creative Services For Boost Your Business Growth";
        $bgImg = 'img/services-page/presentation-bg.webp';
        include('blocks/presentation.php');
    ?>
    <?php
        include('blocks/services.php');
    ?>
    <section class="consult main__consult">
        <div class="consult__container container">
            <div class="consult__img">
                <img src="img/services-page/consult-img.jpeg" alt="image">
            </div>
            <div class="consult__body">
                <h4 class="consult__sub-title sub-title anim-items anim-no-hide anim-show">Process</h4>
                <h2 class="consult__title title anim-items anim-no-hide anim-show">Our Consuting Service Development</h2>
                <div class="consult__content anim-items anim-no-hide anim-show">
                    <h3 class="consult__industy">Banking and Finance</h3>
                    <p class="consult__text">Professionally fashion wireless leadership rather than prospective experiences my cardinate clicks-and-mortar testing whereas.</p>
                </div>
                <div class="consult__content anim-items anim-no-hide anim-show">
                    <h3 class="consult__industy">Logistic and Transportation</h3>
                    <p class="consult__text">Compellingly embrace empowered e-business after user friendly intellectual capital. Interactively actualize front-end processes.</p>
                </div>
                <div class="consult__content anim-items anim-no-hide anim-show">
                    <h3 class="consult__industy">Trading</h3>
                    <p class="consult__text">Uniquely matrix economically sound value through cooperative technology parallel task fully researched data and enterprise.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing main__pricing">
        <div class="pricing__container container">
            <h4 class="pricing__sub-title sub-title anim-items anim-no-hide anim-show">Pricing</h4>
            <h2 class="pricing__title title anim-items anim-no-hide anim-show">Our Pricing pricing</h2>
            <div class="pricing__body">
                <div class="pricing__mon anim-items anim-no-hide">
                    <div class="pricing__mon-item anim-show anim-item">
                        <div class="pricing__top">
                            <h3 class="pricing__mon-title">Standard pricing</h3>
                            <p class="pricing__mon-text">The argument in favor of using to filler text goes something.</p>
                            <div class="pricing__info">
                                <span class="pricing__price">$35</span>
                                <span class="pricing__desc">Monthly</span>
                            </div>
                        </div>
                        <ul class="pricing__list">
                            <li class="pricing__list-item">24/7 system monitoring</li>
                            <li class="pricing__list-item">Security management</li>
                            <li class="pricing__list-item">Secure finance backup</li>
                            <li class="pricing__list-item">Remote support</li>
                        </ul>
                        <a href="#!" class="pricing__link">Get This pricing</a>
                    </div>
                    <div class="pricing__mon-item anim-show anim-item">
                        <div class="pricing__top">
                            <h3 class="pricing__mon-title">Standard pricing</h3>
                            <p class="pricing__mon-text">The argument in favor of using to filler text goes something.</p>
                            <div class="pricing__info">
                                <span class="pricing__price">$56</span>
                                <span class="pricing__desc">Monthly</span>
                            </div>
                        </div>
                        <ul class="pricing__list">
                            <li class="pricing__list-item">24/7 system monitoring</li>
                            <li class="pricing__list-item">Security management</li>
                            <li class="pricing__list-item">Secure finance backup</li>
                            <li class="pricing__list-item">Remote support</li>
                        </ul>
                        <a href="#!" class="pricing__link">Get This pricing</a>
                    </div>
                    <div class="pricing__mon-item anim-show anim-item">
                        <div class="pricing__top">
                            <h3 class="pricing__mon-title">Standard pricing</h3>
                            <p class="pricing__mon-text">The argument in favor of using to filler text goes something.</p>
                            <div class="pricing__info">
                                <span class="pricing__price">$75</span>
                                <span class="pricing__desc">Monthly</span>
                            </div>
                        </div>
                        <ul class="pricing__list">
                            <li class="pricing__list-item">24/7 system monitoring</li>
                            <li class="pricing__list-item">Security management</li>
                            <li class="pricing__list-item">Secure finance backup</li>
                            <li class="pricing__list-item">Remote support</li>
                        </ul>
                        <a href="#!" class="pricing__link">Get This pricing</a>
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