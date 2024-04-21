<?php
    $title = "blog";
    $style = 'blog.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <?php
        $presentationSubTitle = "Blog";
        $presentationTitle = "Latest Blogs & News";
        $bgImg = 'img/blog/presentation-bg.webp';
        include('blocks/presentation.php');
    ?>
    <section class="news main__news">
            <div class="news__container container">
                <h4 class="news__sub-title sub-title anim-items anim-no-hide anim-show-left">Blog</h4>
                <div class="news__more">
                    <h2 class="news__title title anim-items anim-no-hide anim-show-left">Take a look at our latest articles & resources</h2>
                    <a href="blog.php" class="news__more-link anim-items anim-no-hide anim-show-right">More News</a>
                </div>
                <div class="news__content anim-items anim-no-hide">
                    <div class="news__item anim-show anim-item">
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
                    <div class="news__item anim-show anim-item">
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
                    <div class="news__item anim-show anim-item">
                        <img src="img/blog/news-3.jpeg" alt="image" class="news__img">
                        <h3 class="news__desc">Five Steps to Implement Motivation in Management</h3>
                        <p class="news__text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                        <div class="news__info">
                            <img src="img/main-page/news-person-1.svg" alt="person's image" class="news__info-img">
                            <span class="news__name">John Carter</span>
                            <span class="news__date">September 1, 2022</span>
                            <a href="blog-single.php" class="news__link">Read More</a>
                        </div>
                    </div>
                    <div class="news__item anim-show anim-item">
                        <img src="img/blog/news-4.jpeg" alt="image" class="news__img">
                        <h3 class="news__desc">Team Identifiers, Benefits, and How to Build One that Works</h3>
                        <p class="news__text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                        <div class="news__info">
                            <img src="img/main-page/news-person-1.svg" alt="person's image" class="news__info-img">
                            <span class="news__name">John Carter</span>
                            <span class="news__date">September 1, 2022</span>
                            <a href="blog-single.php" class="news__link">Read More</a>
                        </div>
                    </div>
                    <div class="news__item anim-show anim-item">
                        <img src="img/blog/news-5.jpeg" alt="image" class="news__img">
                        <h3 class="news__desc">Professional Development Goals: Steps and Examples</h3>
                        <p class="news__text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                        <div class="news__info">
                            <img src="img/main-page/news-person-1.svg" alt="person's image" class="news__info-img">
                            <span class="news__name">John Carter</span>
                            <span class="news__date">September 1, 2022</span>
                            <a href="blog-single.php" class="news__link">Read More</a>
                        </div>
                    </div>
                    <div class="news__item anim-show anim-item">
                        <img src="img/blog/news-6.jpeg" alt="image" class="news__img">
                        <h3 class="news__desc">A Guide on What to Bring on the First Day of Work</h3>
                        <p class="news__text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                        <div class="news__info">
                            <img src="img/main-page/news-person-1.svg" alt="person's image" class="news__info-img">
                            <span class="news__name">John Carter</span>
                            <span class="news__date">September 1, 2022</span>
                            <a href="blog-single.php" class="news__link">Read More</a>
                        </div>
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