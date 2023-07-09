<?php get_header('blog'); ?>
    <?php get_template_part('assets/template/drawer'); ?>

    <?php get_template_part('assets/template/cta'); ?>

    <div class="p-mv">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/archive_top@2x.png" alt="">
        <div class="p-mv__texts">
            <div class="p-mv__title">スタッフブログ</div>
            <p class="p-mv__subtitle">STAFF BLOG</p>
        </div>
    </div>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <div class="p-article">
        <div class="p-article__wrapper">
            <div class="p-article__main">
                <h1><?php the_title(); ?></h1>
                <div class="p-article__published">
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <div class="p-article__category">
                        <span class="c-category">
                        <?php 
                            $term = get_the_terms($post->ID, 'news');
                            echo esc_html($term[0]->name);
                        ?> 
                        </span>
                    </div>
                </div>
                
                <?php the_content(); ?>

                <div class="p-article__pagination">
                    <?php if (get_previous_post()): ?>
                        <div class="p-article__pagination__prev">
                            <?php previous_post_link('%link','前の記事', FALSE); ?>
                        </div>
                    <?php endif; ?>
                    <div class="p-article__pagination__all">
                        <a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>" class="p-pagination-article__all__link">記事一覧</a>
                    </div>
                    <?php if(get_next_post()) :?>
                        <div class="p-article__pagination__next">
                            <?php next_post_link('%link','次の記事', FALSE); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php get_sidebar('blog'); ?>
        </div>
    </div>
<?php get_footer(); ?>