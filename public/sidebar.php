<aside class="l-sidebar">
    <div class="l-sidebar__info">
        <h2 class="l-sidebar__title">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sidebar-icon_1@2x.png" alt="">
            クリニックの紹介
        </h2>
        <div class="l-sidebar__info__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sidebar-img_1@2x.png" alt="">
        </div>
        <h3 class="l-sidebar__clinic">みなみ歯科クリニック</h3>
        <p class="l-sidebar__text">
            お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
        </p>
        <?php $page = get_page_by_path('policy'); ?>
        <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="l-sidebar__link">当院について</a>
    </div>

    <div class="l-sidebar__articles">
        <h2 class="l-sidebar__title">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sidebar-icon_2@2x.png" alt="">
            新着記事
        </h2>
        <?php 
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 5,
                'order' => 'DESC',
                'orderby'=>'date',
            ];

            $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                <div class="p-sidebar-articles-item">
                    <a href="<?php the_permalink(); ?>" class="p-sidebar-articles-item__link">
                        <div class="p-sidebar-articles-item__img">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/noimg.png" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="p-sidebar-articles-item__content">
                            <span class="p-sidebar-articles-item__category">お知らせ</span>
                            <p class="p-sidebar-articles-item__title">
                                <?php the_title(); ?>
                            </p>
                            <time class="p-sidebar-articles-item__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>

    <div class="l-sidebar__categories">
        <h2 class="l-sidebar__title">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sidebar-icon_3@2x.png" alt="">
            カテゴリー
        </h2>
        <ul class="l-sidebar__categories__lists">
            <?php $cats = get_categories(); ?>
            <?php foreach($cats as $cat): ?>
                <li class="l-sidebar__categories__list">
                    <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="l-sidebar__categories__link"><?php echo esc_html($cat->name); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>