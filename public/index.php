<?php get_header('home'); ?>

    <?php get_template_part('assets/template/drawer'); ?>

    <div class="p-swiper">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="p-swiper-item">
                        <picture>
                            <source media="(max-width: 599px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top-01-sp@2x.png">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top-01@2x.jpg" alt="街の皆様の笑顔を守るアットホームな歯医者さん">
                            </picture>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="p-swiper-item">
                        <picture>
                            <source media="(max-width: 599px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top-02-sp@2x.png">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top-02@2x.jpg" alt="街の皆様の笑顔を守るアットホームな歯医者さん">
                        </picture>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="p-swiper-item">
                        <picture>
                            <source media="(max-width: 599px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top-03-sp@2x.png">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top-03@2x.jpg" alt="街の皆様の笑顔を守るアットホームな歯医者さん">
                        </picture>
                    </div>
                </div>
            </div><!-- swiper-wrapper -->
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="p-swiper__text">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top-text.svg" alt="">
            </div>
            
        </div><!-- swiper -->
        <div class="swiper-pagination"></div>
    </div>

    <?php get_template_part('assets/template/cta'); ?>

    <main>
        <div class="p-info">
            <div class="l-inner p-info__inner">
                <div class="p-info-news">
                    <div class="p-info-news__top">
                        <div class="p-info-news__head">
                            <div class="p-info-news__title">お知らせ</div>
                            <div class="p-info-news__mark">
                                <span class="c-news-headline">NEW</span>
                            </div> 
                        </div>
                        <div class="p-info-news__list">
                            <a href="<?php echo esc_url(home_url('/')); ?>/archive" class="p-info-news__link">過去のお知らせはこちら</a>
                        </div>
                    </div>
                    <div class="p-info-news__archive">
                        <?php
                            $args = [
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                            ];

                            $the_query = new WP_Query($args);
                        ?>
                        <?php if($the_query->have_posts()): ?>
                            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="p-info-news__archive__link">
                                    <time class="p-info-news__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                                    <p class="p-info-news__text"><?php the_title(); ?></p>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="p-info__table">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/medical-time-pc-1@2x.png" alt="">
                </div>
            </div>
        </div>
        <section class="p-concept">
            <div class="p-concept__inner">
                <div class="p-concept__wrapper">
                    <dv class="p-concept__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/concept-img1@2x.png" alt="健康的で素敵な笑顔あふれる街づくりを目指して">
                    </dv>
                    <div class="p-concept__content">
                        <span class="c-section-headline p-concept__headline">CONCEPT</span>
                        <h2 class="c-section-title p-concept__title">健康的で素敵な笑顔あふれる<br class="u-sp-display">街づくりを目指して</h2>
                        <p class="p-concept__text">私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
                        <div class="p-concept__button">
                            <?php $page = get_page_by_path('policy'); ?>
                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="c-page-button">当院について</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-recommend">
            <div class="l-inner p-recommend__inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-recommend__title">当院の3つのおすすめ</h2>
                </div>
                <div class="p-recommend__wrapper">
                    <div class="p-recommend-item">
                        <h3 class="p-recommend-item__headline">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/recommend-1.svg" alt="おすすめ1">
                        </h3>
                        <div class="p-recommend-item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/recommend-img-01.svg" alt="おすすめ1">
                        </div>
                        <p class="p-recommend-item__text">
                            歯の治療において、小さな違和感は大きなストレスにつながります。 私たちは常に快適な歯科医療技術の研究を行っております。
                        </p>
                    </div>
                    <div class="p-recommend-item">
                        <h3 class="p-recommend-item__headline">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/recommend-2.svg" alt="おすすめ2">
                        </h3>
                        <div class="p-recommend-item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/recommend-img-02.svg" alt="おすすめ2">
                        </div>
                        <p class="p-recommend-item__text">
                            歯の治療において、小さな違和感は大きなストレスにつながります。 私たちは常に快適な歯科医療技術の研究を行っております。
                        </p>
                    </div>
                    <div class="p-recommend-item">
                        <h3 class="p-recommend-item__headline">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/recommend-3.svg" alt="おすすめ3">
                        </h3>
                        <div class="p-recommend-item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/recommend-img-03.svg" alt="おすすめ3">
                        </div>
                        <p class="p-recommend-item__text">
                            歯の治療において、小さな違和感は大きなストレスにつながります。 私たちは常に快適な歯科医療技術の研究を行っております。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-medical">
            <span class="p-medical__deco__top"></span>
            <div class="l-inner p-medical__inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-medical__title">診療案内</h2>
                </div>
                    <div class="p-medical__wrapper">
                        <div class="p-medical-item">
                            <?php $page = get_page_by_path('plan'); ?>
                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#general" class="p-medical-item__link">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/medical_1.jpg" class="p-medical-item__img" alt="">
                                <div class="p-medical-item__texts">
                                    <h3 class="p-medical-item__title">一般診療</h3>
                                    <p class="p-medical-item__text">虫歯・入れ歯・小児歯科</p>
                                </div>
                            </a>
                        </div>
                        <div class="p-medical-item">
                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#special" class="p-medical-item__link">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/medical_2.jpg" class="p-medical-item__img" alt="">
                                <div class="p-medical-item__texts">
                                    <h3 class="p-medical-item__title">特殊診療</h3>
                                    <p class="p-medical-item__text">インプラント・ホワイトニング<br>予防歯科・口腔外科・審美歯科</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="p-medical__text">
                        当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。
                        <br>痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。
                        <br><span>※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします</span>
                    </p>
                </div>
            </div>
            <span class="p-medical__deco__bottom"></span>
        </section>

        <section class="p-blog">
            <div class="l-inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-blog__title">スタッフブログ</h2>
                </div>
                <div class="p-blog__wrapper">
                    <?php
                        $args = [
                            'post_type' => 'blog',
                            'posts_per_page' => 6,
                        ];

                        $the_query = new WP_Query($args);
                    ?>
                    <?php if($the_query->have_posts()): ?>
                        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                            <div class="p-blog-card">
                                <a href="<?php the_permalink(); ?>" class="p-blog-card__link">
                                    <span class="c-new-mark p-blog-card__new-mark">
                                    </span>
                                    <div class="p-blog-card__img">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/noimg.png" alt="記事サムネイル">
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-blog-card__content">
                                        <div class="c-category p-blog-card__category">
                                            <?php 
                                                $term = get_the_terms($post->ID, 'news');
                                                echo $term[0]->name;
                                            ?> 
                                        </div>
                                        <p class="p-blog-card__text">
                                            <?php the_title(); ?>
                                        </p>  
                                        <time class="p-blog-card__date" datetime="<?php the_time('c');?>"><?php the_time("Y/m/d"); ?></time>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="p-blog__button">
                    <a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>" class="c-page-button">スタッフブログ一覧はこちら</a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>