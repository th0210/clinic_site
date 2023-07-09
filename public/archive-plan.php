<?php get_header('plan'); ?>
    <?php get_template_part('assets/template/drawer'); ?>

    <?php get_template_part('assets/template/cta'); ?>

    <div class="p-mv">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/page-medical_top@2x.png" alt="">
        <div class="p-mv__texts">
            <h1 class="p-mv__title">診療案内</h1>
            <p class="p-mv__subtitle">MEDICAL</p>
        </div>
    </div>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <div class="p-medical-type">
        <div class="p-medical-type__inner">
            <div class="p-medical-type__wrapper">
                <div class="p-medical-type__head">
                    <h2 class="c-section-title p-medical-type__title">一般診療</h2>
                    <span class="c-insurance-headline">保険対象</span>
                </div>
                <div class="p-medical-type__lists">
                    <div class="p-medical-type__item">
                        <a href="#p-medical-card__normal__1" class="c-medical-button">一般歯科</a>
                    </div>
                    <div class="p-medical-type__item">
                        <a href="#p-medical-card__normal__2" class="c-medical-button">小児歯科</a>
                    </div>
                    <div class="p-medical-type__item">
                        <a href="#p-medical-card__normal__3" class="c-medical-button">予防歯科</a>
                    </div>
                </div>
            </div>
            <div class="p-medical-type__wrapper">
                <div class="p-medical-type__head">
                    <h2 class="c-section-title p-medical-type__title">特殊診療</h2>
                    <span class="c-cost-headline">実費</span>
                </div>
                <div class="p-medical-type__lists">
                    <div class="p-medical-type__item">
                        <a href="#p-medical-card__special__1" class="c-medical-button">入れ歯</a>
                    </div>
                    <div class="p-medical-type__item">
                        <a href="#p-medical-card__special__2" class="c-medical-button">矯正歯科</a>
                    </div>
                    <div class="p-medical-type__item">
                        <a href="#p-medical-card__special__3" class="c-medical-button">ホワイトニング</a>
                    </div>
                    <div class="p-medical-type__item">
                        <a href="#p-medical-card__special__4" class="c-medical-button">口腔外科</a>
                    </div>
                    <div class="p-medical-type__item">
                        <a href="#p-medical-card__special__5" class="c-medical-button">レーザー治療</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <section class="p-medical-general">
            <span class="p-medical-general__deco__top"></span>
            <div id="general" class="p-medical-general__inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-medical-general__title">一般診療</h2>
                </div>
                <div class="p-medical-general__wrapper">
                    <?php
                        $count = 1;
                        $args = [
                            'post_type' => 'plan',
                            'order' => 'ASC',
                            'tax_query' => [
                                [
                                'taxonomy' => 'medical',
                                'field' => 'slug',
                                'terms' => 'normal',
                                ]
                            ],
                        ];
                        $the_query = new WP_Query($args);
                    ?>  
                    <?php if($the_query->have_posts()): ?>
                        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                            <div id="<?php echo 'p-medical-card__normal__' . $count; ?>" class="p-medical-card">                      
                                <span class="p-medical-card__ribbon">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/tag-01.svg" alt="">
                                </span>
                                <div class="p-medical-card__head">
                                    <h3 class="c-section-title p-medical-card__title"><?php the_title(); ?></h3>
                                    <p class="c-section-headline">
                                        <?php if(get_field('problem')): ?>
                                            <?php echo nl2br(get_post_meta($post->ID,'problem',true)); ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <div class="p-medical-card__content">
                                    <p class="p-medical-card__text">
                                        <?php if(get_field('overview')): ?>
                                            <?php echo nl2br(get_post_meta($post->ID,'overview',true)); ?>
                                        <?php endif; ?>
                                    </p>
                                    <div class="p-medical-card__img">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/noimg.png" alt="記事サムネイル">
                                        <?php endif; ?>
                                    </div>     
                                </div>
                            </div>
                        <?php $count++; ?>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
            <span class="p-medical-general__deco__bottom"></span>
        </section>

        <section id="special" class="p-medical-special">
            <span class="p-medical-special__deco__top"></span>
            <div class="p-medical-special__inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-medical-special__title">特殊診療</h2>
                </div>
                <div class="p-medical-special__wrapper">
                <?php
                    $count = 1;
                    $args = [
                        'post_type' => 'plan',
                        'order' => 'ASC',
                        'tax_query' => [
                            [
                            'taxonomy' => 'medical',
                            'field' => 'slug',
                            'terms' => 'special',
                            ]
                        ],
                    ];
                    $the_query = new WP_Query($args);
                ?>  
                <?php if($the_query->have_posts()): ?>
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                        <div id="<?php echo 'p-medical-card__special__' . $count; ?>" class="p-medical-card">
                            <span class="p-medical-card__ribbon">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/tag-02.svg" alt="">
                            </span>
                            <div class="p-medical-card__head">
                                <h3 class="c-section-title p-medical-card__title"><?php the_title(); ?></h3>
                                <p class="c-section-headline">
                                    <?php if(get_field('problem')): ?>
                                        <?php the_field('problem'); ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="p-medical-card__content">
                                <p class="p-medical-card__text">
                                    <?php if(get_field('overview')): ?>
                                        <?php echo nl2br(get_post_meta($post->ID,'overview',true)); ?>
                                    <?php endif; ?>
                                </p>
                                <div class="p-medical-card__img">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/noimg.png" alt="記事サムネイル">
                                    <?php endif; ?>
                                </div>     
                            </div>
                        </div>
                    <?php $count++; ?>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
            <span class="p-medical-special__deco__bottom"></span>
        </section>
    </main>
<?php get_footer(); ?>