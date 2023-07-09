<div class="p-reserve-cta">
    <?php $page = get_page_by_path('reserve'); ?>
    <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="p-reserve-cta__link">
        <div class="p-reserve-cta__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-pc.svg" alt="WEB予約はこちら">
        </div>
        <p class="p-reserve-cta__text">WEB予約はコチラ</p>
    </a>
</div>