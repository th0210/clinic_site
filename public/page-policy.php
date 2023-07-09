<?php get_header('policy'); ?>
    <?php get_template_part('assets/template/drawer'); ?>

    <?php get_template_part('assets/template/cta'); ?>

    <div class="p-mv">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/page-about_top@2x.png" alt="">
        <div class="p-mv__texts">
            <h1 class="p-mv__title">当院について</h1>
            <p class="p-mv__subtitle">ABOUT OUR CLINIC</p>
        </div>
    </div>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <main>
        <section class="p-about">
            <div  id="p-about__id" class="p-about__inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-about__title">ポリシーと特徴</h2>
                </div>
                <div class="p-about-policy">
                    <div class="p-about-policy__wrapper">
                        <div class="p-about-policy__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature_1@2x.png" alt="">
                        </div>
                        <div class="p-about-policy__content">
                            <span class="c-section-headline">POLICY</span>
                            <h3 class="c-section-title p-about-policy__title-inside">コミュニケーションから始まる最適な医療提供</h3>
                            <p class="p-about-policy__text">
                                当院ではまず患者様から詳しくお話を伺います。難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。
                                <br><br>「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-about-feature">
                    <div class="p-about-feature__wrapper">
                        <div class="p-about-feature__content">
                            <span class="c-section-headline">FEATURE</span>
                            <h3 class="c-section-title p-about-feature__title-inside">「医療技術の追求」と「通いやすさ」</h3>
                            <p class="p-about-feature__text">
                                歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。 また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
                                <br><br>朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。
                            </p>
                        </div>
                        <div class="p-about-feature__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature_2@2x.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-state">
            <div id="p-state__id" class="l-inner p-state__inner">
                <div class="u-text-align-center">
                    <h2 class="c-section-title p-state__title">院内の様子</h2>
                </div>
                <div class="p-state__wrapper">
                    <div class="p-state__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about_1@2x.png" alt="">
                    </div>
                    <div class="p-state__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about_1-1@2x.png" alt="">
                    </div>
                    <div class="p-state__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about_1-2@2x.png" alt="">
                    </div>
                    <div class="p-state__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about_1-3@2x.png" alt="">
                    </div>
                    <div class="p-state__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about_1-4@2x.png" alt="">
                    </div>
                    <div class="p-state__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about_1-5@2x.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>