<?php
    $title = "Case-study-single";
    $style = 'taxes.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <?php
        $presentationSubTitle = "Case Studies single";
        $presentationTitle = "Taxes & Efficiency";
        $bgImg = 'img/taxes/presentation-bg.webp';
        include('blocks/presentation.php');
    ?>
    <section class="live main__live">
        <div class="live__container container anim-items anim-no-hide">
            <img src="img/taxes/live.jpeg" alt="image" class="live__img anim-no-hide anim-show">
            <div class="live__body anim-items anim-no-hide anim-show">
                <div class="live__content">
                    <div class="live__item">
                        <h3 class="live__info">Case Name</h3>
                        <h6 class="live__desc">Taxes & Efficiency</h6>
                    </div>
                    <div class="live__item">
                        <h3 class="live__info">Category</h3>
                        <h6 class="live__desc">Business</h6>
                    </div>
                    <div class="live__item">
                        <h3 class="live__info">Date</h3>
                        <h6 class="live__desc">27th September 2022</h6>
                    </div>
                </div>
                <a href="#!" class="live__link">Live Preview</a>
            </div>
        </div>
    </section>
    <section class="overview main__overview">
        <div class="overview__container container">
            <h2 class="overview__title anim-items anim-no-hide anim-show">Project Overview</h2>
            <p class="overview__text anim-items anim-no-hide anim-show">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            <ul class="overview__list anim-items anim-no-hide">
                <li class="overview__item anim-no-hide anim-show">It brings the right people together with all the right information and tools to get work done</li>
                <li class="overview__item anim-no-hide anim-show">We provide operational efficiency, data security, and flexible scale</li>
                <li class="overview__item anim-no-hide anim-show">Your best work, together in one package that works seamlessly from your computer</li>
                <li class="overview__item anim-no-hide anim-show">Delivers the tools you need to save time Improve field performance always</li>
            </ul>
        </div>
    </section>
    <section class="story main__story">
        <div class="story__container container">
            <h3 class="story__title anim-items anim-no-hide anim-show">Storyboard</h3>
            <p class="story__text anim-items anim-no-hide anim-show">Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service. Objectively innovate empowered manufactured products whereas parallel platforms. Holistically predominate extensible testing procedures for reliable supply chains.</p>
            <p class="story__text anim-items anim-no-hide anim-show">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products completely pursue scalable customer service.</p>
            <div class="story__img anim-items anim-no-hide">
                <img src="img/taxes/story.jpeg" alt="image" class="anim-no-hide anim-show">
            </div>
        </div>
    </section>
    <section class="project main__project">
        <div class="project__container container">
            <h3 class="project__title anim-items anim-no-hide anim-show">Project result</h3>
            <p class="project__text anim-items anim-no-hide anim-show">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
            <p class="project__text anim-items anim-no-hide anim-show">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
        </div>
    </section>
    <?php
        include('blocks/subscribe.php');
    ?>
    <section class="cases main__cases">
        <div class="cases__container container anim-items anim-no-hide">
            <h2 class="cases__title title anim-items anim-no-hide anim-show">More case studies</h2>
            <div class="cases__body anim-no-hide anim-show">
                <div class="cases__item">
                    <img src="img/taxes/cases-1.jpeg" alt="image">
                </div>
                <div class="cases__item">
                    <img src="img/taxes/cases-2.jpeg" alt="image">
                </div>
                <div class="cases__item">
                    <img src="img/taxes/cases-3.jpeg" alt="image">
                </div>
            </div>
            <div class="cases__link-block anim-items anim-no-hide anim-show">
                <a href="case-study.php" class="cases__link">Browse all case studies</a>
            </div>
        </div>
    </section>
</main>
<?php
    require_once('blocks/footer.php');
?>  