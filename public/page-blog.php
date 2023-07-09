<?php get_header('blog'); ?>
    <?php get_template_part('assets/template/drawer'); ?>

    <?php get_template_part('assets/template/cta'); ?>

    <div class="p-mv">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/page-staff_top@2x.png" alt="">
        <div class="p-mv__texts">
            <h1 class="p-mv__title">スタッフブログ</h1>
            <p class="p-mv__subtitle">STAFF BLOG</p>
        </div>
    </div>
    
    <?php get_template_part('assets/template/breadcrumb'); ?>

    <div class="p-staff-blog">
        <div class="p-staff-blog__wrapper">
            <div class="p-staff-blog__main">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = [
                        'post_type' => 'post',
                        'paged' => $paged,
                        'posts_per_page' => 10,
                        'order' => 'DESC',
                        'orderby'=>'date',
                    ];

                    $the_query = new WP_Query($args);
                ?>
                <?php if($the_query->have_posts()): ?>
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                        <div class="p-staff-blog-item">
                            <a href="<?php the_permalink(); ?>" class="p-staff-blog-item__link">
                                <div class="p-staff-blog-item__img">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/noimg.png" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="p-staff-blog-item__content">
                                    <div class="p-staff-blog-item__category">
                                        <span class="c-category">
                                            <?php 
                                                $cat = get_the_category();
                                                $cat = $cat[0];

                                                echo $cat->name;
                                            ?>
                                        </span>
                                    </div>
                                    <p class="p-staff-blog-item__title">
                                        <?php the_title(); ?>
                                    </p>
                                    <time class="p-staff-blog-item__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="p-pagination">
                    <?php if($the_query->max_num_pages > 1): ?> 
                        <?php 
                            echo paginate_links([
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => 'page/%#%/',
                                'current' => max(1, $paged),
                                'mid_size' => 4,
                                'end_size' => 1,
                                'prev_next' => true,
                                'prev_text' => '前へ',
                                'next_text' => '次へ',
                                'total' => $the_query->max_num_pages,
                            ]);
                        ?>
                    <?php endif; wp_reset_postdata(); ?>
                </div>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>