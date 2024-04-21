<section class="client main__client">
    <div class="client__container container anim-items anim-no-hide">
        <?php
            for($i = 0; $i < 6; $i++):
        ?>
            <img class="anim-show anim-item" src="img/main-page/client-logo-<?php echo ($i + 1) ?>.svg" alt="client's image">
        <?php endfor; ?>
    </div>
</section>