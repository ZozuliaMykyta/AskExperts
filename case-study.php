<?php
    $title = "Case-study";
    $style = 'case-study.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <?php
        $presentationSubTitle = "Case Studies";
        $presentationTitle = "Case Studies";
        $bgImg = 'img/case-study/presentation-bg.webp';
        include('blocks/presentation.php');
    ?>
    <section class="cases main__cases">
        <div class="cases__container container">
            <div class="cases__block anim-items anim-no-hide anim-show">
                <ul class="cases__list">
                    <li class="cases__list-item active" data-id="all">All</li>
                    <li class="cases__list-item" data-id="taxes">Taxes & Efficiency</li>
                    <li class="cases__list-item" data-id="investment">Investment banking</li>
                    <li class="cases__list-item" data-id="plan">Financial Plan</li>
                    <li class="cases__list-item" data-id="audit">Audit & Evaluation</li>
                </ul>
            </div>
            <div class="cases__body anim-items anim-no-hide">
                <div class="cases__item taxes anim-no-hide anim-show">
                    <img src="img/case-study/cases-img-1.jpeg" alt="image" class="cases__img">
                    <div class="cases__content">
                        <div class="cases__sub-content">
                            <h5 class="cases__info">Taxes & Efficiency</h5>
                            <p class="cases__desc">Business</p>
                        </div>
                        <a href="taxes.php" class="cases__plus"><span>+</span></a>
                    </div>
                </div>
                <div class="cases__item investment anim-no-hide anim-show">
                    <img src="img/case-study/cases-img-2.jpeg" alt="image" class="cases__img">
                    <div class="cases__content">
                        <div class="cases__sub-content">
                            <h5 class="cases__info">Investment banking</h5>
                            <p class="cases__desc">Business</p>
                        </div>
                        <a href="#!" class="cases__plus"><span>+</span></a>
                    </div>
                </div>
                <div class="cases__item taxes anim-no-hide anim-show">
                    <img src="img/case-study/cases-img-3.jpeg" alt="image" class="cases__img">
                    <div class="cases__content">
                        <div class="cases__sub-content">
                            <h5 class="cases__info">Taxes & Efficiency</h5>
                            <p class="cases__desc">Business</p>
                        </div>
                        <a href="taxes.php" class="cases__plus"><span>+</span></a>
                    </div>
                </div>
                <div class="cases__item plan anim-no-hide anim-show">
                    <img src="img/case-study/cases-img-4.jpeg" alt="image" class="cases__img">
                    <div class="cases__content">
                        <div class="cases__sub-content">
                            <h5 class="cases__info">Financial Plan</h5>
                            <p class="cases__desc">Business</p>
                        </div>
                        <a href="#!" class="cases__plus"><span>+</span></a>
                    </div>
                </div>
                <div class="cases__item audit anim-no-hide anim-show">
                    <img src="img/case-study/cases-img-5.jpeg" alt="image" class="cases__img">
                    <div class="cases__content">
                        <div class="cases__sub-content">
                            <h5 class="cases__info">Audit & Evaluation</h5>
                            <p class="cases__desc">Business</p>
                        </div>
                        <a href="#!" class="cases__plus"><span>+</span></a>
                    </div>
                </div>
                <div class="cases__item plan anim-no-hide anim-show">
                    <img src="img/case-study/cases-img-6.jpeg" alt="image" class="cases__img">
                    <div class="cases__content">
                        <div class="cases__sub-content">
                            <h5 class="cases__info">Financial Plan</h5>
                            <p class="cases__desc">Business</p>
                        </div>
                        <a href="#!" class="cases__plus"><span>+</span></a>
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