        <footer class="l-footer">
            <div class="l-inner l-footer__inner">
                <div class="p-footer-info">
                    <div class="p-footer-info__content">
                        <div class="p-footer-info__logo">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="みなみ歯科クリニック">
                        </div>
                        <p class="p-footer-info__address">〒166-0001<span>東京都杉並区阿佐谷北7-3-1</span></p>
                        <p class="p-footer-info__tel">03-1234-5678</p>
                        <p class="p-footer-info__hours">(年中無休 AM9:00〜PM22:00)</p>
                        <div class="p-footer-info__buttons">
                            <div class="p-footer-info__button">
                                <?php $page = get_page_by_path('reserve'); ?>
                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="c-button-blue">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-pc.svg" alt="">
                                    <p class="p-footer-info__button__text">WEB予約</p>
                                </a>
                            </div>
                            <div class="p-footer-info__button white">
                                <?php $page = get_page_by_path('contact'); ?>
                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="c-button-white">
                                    <p class="p-footer-info__button__text white">お問い合わせ</p>
                                </a>
                            </div>
                        </div>
                        <div class="p-footer-info__table">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/medical-time-pc-1@2x.png" alt="診療時間">
                        </div>
                    </div>
                    <div class="p-footer-info__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.8656063941985!2d139.63354817608436!3d35.704924672579715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z6Zi_5L2Q44O26LC36aeF!5e0!3m2!1sja!2sjp!4v1681469493477!5m2!1sja!2sjp" width="385" height="385" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="p-footer-nav">
                    <div class="p-footer-nav__lists">
                        <div class="p-footer-nav__row1">
                            <ul class="p-footer-nav__row1__lists">
                                <li class="p-footer-nav__list">
                                    <a href="" class="p-footer-nav__link">TOP</a>
                                </li>
                                <li class="p-footer-nav__list">
                                    <p class="p-footer-nav__title">当院について</p>
                                    <ul class="p-footer-nav-inside">
                                        <?php $page = get_page_by_path('policy'); ?>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-about__id" class="p-footer-nav-inside__link">ポリシーと特徴</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-state__id" class="p-footer-nav-inside__link">当院の様子</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-footer-nav__list">
                                    <p class="p-footer-nav__title">スタッフ紹介</p>
                                    <ul class="p-footer-nav-inside">
                                        <?php $page = get_page_by_path('staffs'); ?>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-greeting__id" class="p-footer-nav-inside__link">院長のあいさつ</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-staff__id" class="p-footer-nav-inside__link">スタッフ</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_post_type_archive_link('blog')); ?>" class="p-footer-nav-inside__link">スタッフブログ</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="p-footer-nav__row2">
                            <ul class="p-footer-nav__row2__lists">
                                <li class="p-footer-nav__list">
                                    <p class="p-footer-nav-title">診療内容</p>
                                    <ul class="p-footer-nav-inside grid">
                                        <?php $page = get_page_by_path('plan'); ?>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__normal__1" class="p-footer-nav-inside__link">一般歯科</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__normal__2" class="p-footer-nav-inside__link">小児歯科</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__normal__3" class="p-footer-nav-inside__link">予防歯科</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__1" class="p-footer-nav-inside__link">入れ歯</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__2" class="p-footer-nav-inside__link">矯正歯科</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__3" class="p-footer-nav-inside__link">ホワイトニング</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__4" class="p-footer-nav-inside__link">口腔外科</a>
                                        </li>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__5" class="p-footer-nav-inside__link">レーザー治療</a>
                                        </li>
                                    </ul>
                                    <div class="p-footer-nav-inside__sp">
                                        <ul class="p-footer-nav-inside">
                                            <li class="p-footer-nav-inside__list">
                                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__normal__1" class="p-footer-nav-inside__link">一般歯科</a>
                                            </li>
                                            <li class="p-footer-nav-inside__list">
                                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__normal__2" class="p-footer-nav-inside__link">小児歯科</a>
                                            </li>
                                            <li class="p-footer-nav-inside__list">
                                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__normal__3" class="p-footer-nav-inside__link">予防歯科</a>
                                            </li>
                                            <li class="p-footer-nav-inside__list">
                                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__1" class="p-footer-nav-inside__link">入れ歯</a>
                                            </li>
                                        </ul>

                                        <ul class="p-footer-nav-inside">
                                            <li class="p-footer-nav-inside__list">
                                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__2" class="p-footer-nav-inside__link">矯正歯科</a>
                                            </li>
                                            <li class="p-footer-nav-inside__list">
                                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__3" class="p-footer-nav-inside__link">ホワイトニング</a>
                                            </li>
                                            <li class="p-footer-nav-inside__list">
                                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__4" class="p-footer-nav-inside__link">口腔外科</a>
                                            </li>
                                            <li class="p-footer-nav-inside__list">
                                                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>#p-medical-card__special__5" class="p-footer-nav-inside__link">レーザー治療</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="p-footer-nav__list">
                                    <p class="p-footer-nav-title">お問い合わせ</p>
                                    <ul class="p-footer-nav-inside">
                                        <?php $page = get_page_by_path('contact'); ?>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="p-footer-nav-inside__link">お問い合わせフォーム</a>
                                        </li>
                                        <?php $page = get_page_by_path('reserve'); ?>
                                        <li class="p-footer-nav-inside__list">
                                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="p-footer-nav-inside__link">WEB予約</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="l-footer__copyright">&copy;2020-2021 みなみ歯科クリニック</p>
        </footer>
        <div class="p-cta">
            <div class="p-cta__wrapper">
                <div class="p-cta__texts">
                    <p class="p-cta__tel">03-1234-5678</p>
                    <p class="p-cta__hours">(年中無休 AM9:00〜PM22:00)</p>
                </div>
                <div class="p-cta-reserve">
                    <?php $page = get_page_by_path('reserve'); ?>
                    <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="p-cta-reserve__link">
                        <div class="p-cta-reserve__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-pc.svg" alt="WEB予約はこちら">
                        </div>
                        <p class="p-cta-reserve__text"><span>WEB予約</span><br>はこちら</p>
                    </a>
                </div>
            </div>

        </div>
        <div class="p-to-top">
            <a href="#" class="c-to-top"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow-blue-btn.svg" alt="矢印アイコン"></a>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>