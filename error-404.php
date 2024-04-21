<?php
    header('HTTP/1.1 404 Not Found');
    $title = "404";
    $style = 'error-404.css';
    require_once('blocks/header.php');
?>
<main class="main">
    <section class="home main__home">
        <div class="home__container container">
            <div class="home__body">
                <div class="home__content">
                    <h1 class="home__title">404</h1>
                    <h2 class="home__sub-title">Page Not Found</h2>
                    <p class="home__text">This Page Doesn't or was removed! We suggest you back to home</p>
                    <a href="index.php" class="home__link">Back to home</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    require_once('blocks/footer.php');
?>  