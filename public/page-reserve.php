<?php get_header(); ?>
    <?php get_template_part('assets/template/drawer'); ?>

    <?php get_template_part('assets/template/cta'); ?>

    <div class="p-mv">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-contact_top@2x.png" alt="">
        <div class="p-mv__texts">
            <h1 class="p-mv__title">WEB予約</h1>
            <p class="p-mv__subtitle">RESERVE</p>
        </div>
    </div>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <div class="p-reserve">
        <div class="p-reserve__inner">
            <div class="p-reserve__message">
                <h2 class="c-section-title p-reserve__message__title">お電話でのご予約/ご相談</h2>
                <div class="p-reserve__info">
                    <p class="p-reserve__message__tel">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_tel.svg" alt="">03-1234-5678
                    </p>
                    <p class="p-reserve__hours">(年中無休 AM9:00〜PM22:00)</p>
                </div>
                <p class="p-reserve__text">
                    お急ぎの方は電話での連絡がスムーズです。 
                    <br>混雑状況によっては当日受診をご利用いただけない場合がございます。 
                    あらかじめご了承ください。
                </p>
            </div>
            <div class="p-reserve__message">
                <h2 class="c-section-title p-reserve__message__title">お電話でのご予約/ご相談</h2>
                <p class="p-reserve__text">
                    【ご予約に関しての注意点】
                    <br>メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。
                    <br>※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
                </p>
            </div>

            <div class="u-text-align-center">
                <h2 class="c-section-title p-reserve__title">予約フォーム</h2>
            </div>
            <div class="p-form">
                <?php echo do_shortcode('[contact-form-7 id="138" title="予約フォーム"]'); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>