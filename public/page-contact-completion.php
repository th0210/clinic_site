<?php get_header('contact'); ?>

    <?php get_template_part('assets/template/drawer'); ?>

    <?php get_template_part('assets/template/cta'); ?>

    <div class="p-mv">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-contact_top@2x.png" alt="">
        <div class="p-mv__texts">
            <h1 class="p-mv__title">お問い合わせ</h1>
            <p class="p-mv__subtitle">CONTACT</p>
        </div>
    </div>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <div class="p-completion">
        <div class="p-completion__inner">
            <p class="p-completion__message">
                お問い合わせありがとうございました。 
                <br>3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。 
                <br><span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
            </p>
        </div>
    </div>
<?php get_footer(); ?>