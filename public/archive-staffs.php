<?php get_header('staffs'); ?>
    <?php get_template_part('assets/template/drawer'); ?>

    <?php get_template_part('assets/template/cta'); ?>

    <div class="p-mv">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-staff_top@2x.png" alt="">
        <div class="p-mv__texts">
            <h1 class="p-mv__title">スタッフ紹介</h1>
            <p class="p-mv__subtitle">STAFF</p>
        </div>
    </div>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <main>
        <section class="p-greeting">
            <div id="p-greeting__id" class="p-greeting__inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-greeting__title">院長のあいさつ</h2>
                </div>
                <div class="p-greeting__wrapper">
                    <div class="p-greeting__content">
                        <h3 class="c-section-title p-greeting__content__title">気軽に相談できる<br class="u-sp-display">街の歯医者さんでありたい。</h3>
                        <p class="p-greeting__text">
                            当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。
                            <br><br>「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
                        </p>
                        <div class="p-greeting__info">
                            <p class="p-greeting__clinic">みなみ歯科クリニック</p>
                            <p class="p-greeting__person">院長 南 俊雄</p>
                        </div>

                        <div class="p-greeting__img__sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff1@2x.png" alt="">
                        </div>

                        <div class="p-greeting-career">
                            <p class="p-greeting-career__title">経歴</p>
                            <div class="p-greeting-career__content">
                                <div class="p-greeting-career__item">
                                    <p class="p-greeting-career__month">2004年</p>
                                    <p class="p-greeting-career__text">東京医科歯科大学歯学部 卒業</p>
                                </div>
                                <div class="p-greeting-career__item">
                                    <p class="p-greeting-career__month">2008年</p>
                                    <p class="p-greeting-career__text">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</p>
                                </div>
                                <div class="p-greeting-career__item">
                                    <p class="p-greeting-career__month">2012年</p>
                                    <p class="p-greeting-career__text">みなみ歯科クリニック 開院</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-greeting__license">
                            <p class="p-greeting__license__title">資格</p>
                            <p class="p-greeting__license__text">歯科医師臨床研修指導歯科医</p>
                            <p class="p-greeting__license__text">博士(歯学)</p>
                            <p class="p-greeting__license__text">衛生検査技師</p>
                        </div>
                    </div>
                    <div class="p-greeting__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff1@2x.png" alt="">
                    </div>
                </div>       
            </div>
        </section>

        <div class="p-staff-gallery">
            <ul class="p-staff-gallery__lists">
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1@2x.png" alt="">
                </li>
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1-1@2x.png" alt="">
                </li>
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1-2@2x.png" alt="">
                </li>
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1-3@2x.png" alt="">
                </li>
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1-4@2x.png" alt="">
                </li>
            </ul>
            <ul class="p-staff-gallery__lists">
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1@2x.png" alt="">
                </li>
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1-1@2x.png" alt="">
                </li>
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1-2@2x.png" alt="">
                </li>
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1-3@2x.png" alt="">
                </li>
                <li class="p-staff-gallery__list">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff-slider1-4@2x.png" alt="">
                </li>
            </ul>
        </div>

        <section class="p-staff">
            <div id="p-staff__id" class="p-staff__inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-staff__title">スタッフ紹介</h2>
                </div>
                <div class="p-staff__row">
                    <h3 class="p-staff__job">歯科衛生士</h3>
                    <div class="p-staff__wrapper1">
                        <?php
                            $args = [
                                'post_type' => 'staffs',
                                'order' => 'ASC',
                                'tax_query' => [
                                    [
                                    'taxonomy' => 'job',
                                    'field' => 'slug',
                                    'terms' => 'hygienist',
                                    ]
                                ],
                            ];
                            $the_query = new WP_Query($args);
                        ?>                            
                        <?php if($the_query->have_posts()): ?>
                            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="p-staff-card">
                                    <div class="p-staff-card__img">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="記事サムネイル">
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-staff-card__info">
                                        <p class="p-staff-card__job">
                                        <?php
                                            $id = $post->ID;
                                            $terms = get_the_terms($id, 'job');
                                            foreach($terms as $term):
                                            echo $term->name;
                                            endforeach;
                                        ?>
                                        </p>
                                        <p class="p-staff-card__name"><?php the_title(); ?></p>
                                    </div>
                                    <div class="p-staff-card__detail">
                                        <dl class="p-staff-table">
                                            <div class="p-staff-table__item">
                                                <?php if(get_field('from')): ?>
                                                    <dt>出身地</dt>
                                                    <dd><?php the_field('from'); ?></dd>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-staff-table__item">
                                                <?php if(get_field('hobby')): ?>
                                                    <dt>趣味</dt>
                                                    <dd><?php the_field('hobby'); ?></dd>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-staff-table__item">
                                                <?php if(get_field('food')): ?>
                                                    <dt>好きな食べ物</dt>
                                                    <dd><?php the_field('food'); ?></dd>
                                                <?php endif; ?>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>

                <div class="p-staff__row">
                    <h3 class="p-staff__job">歯科助手</h3>
                    <div class="p-staff__wrapper2">
                        <?php
                            $args = [
                                'post_type' => 'staffs',
                                'order' => 'ASC',
                                'tax_query' => [
                                    [
                                    'taxonomy' => 'job',
                                    'field' => 'slug',
                                    'terms' => 'assistant',
                                    ]
                                ],
                            ];
                            $the_query = new WP_Query($args);
                        ?>  
                        <?php if($the_query->have_posts()): ?>
                            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="p-staff-card grid">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="記事サムネイル">
                                    <?php endif; ?>
                                    <div class="p-staff-card__info">
                                        <p class="p-staff-card__job">歯科助手</p>
                                        <p class="p-staff-card__name"><?php the_title(); ?></p>
                                    </div>
                                    <div class="p-staff-card__detail">
                                        <dl class="p-staff-table">
                                            <div class="p-staff-table__item">
                                                <?php if(get_field('from')): ?>
                                                    <dt>出身地</dt>
                                                    <dd><?php the_field('from'); ?></dd>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-staff-table__item">
                                                <?php if(get_field('hobby')): ?>
                                                    <dt>趣味</dt>
                                                    <dd><?php the_field('hobby'); ?></dd>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-staff-table__item">
                                                <?php if(get_field('food')): ?>
                                                    <dt>好きな食べ物</dt>
                                                    <dd><?php the_field('food'); ?></dd>
                                                <?php endif; ?>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </section>            
    </main>
<?php get_footer(); ?>