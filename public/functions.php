<?php
    function my_script_init() {
      wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700;900&display=swap", array(), "all");
      wp_enqueue_style("ress", "https://unpkg.com/ress/dist/ress.min.css", array(), "all");
      wp_enqueue_style("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css", array(), "all");
      wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path('assets/css/style.css')), "all");
      wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js", array("jquery"), "all");
      wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('assets/js/script.js')), true);
    }
    add_action("wp_enqueue_scripts", "my_script_init");

    function my_setup() {
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
      }
      add_action("after_setup_theme", "my_setup");

      function my_menu_init() {
        register_nav_menus(
          array(
            'header' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
          )
        );
      }
      add_action('init', 'my_menu_init');

      //archive.phpにスラッグを追加
      function post_has_archive($args, $post_type){
        if('post'== $post_type){
          $args['rewrite']=true;
          $args['has_archive']='archive'; /* アーカイブにつけるスラッグ名 */
        }
        return $args;
      }
      
      add_filter('register_post_type_args', 'post_has_archive', 10, 2);


      //SEO SIMPLE PACK archive.phpのtitleを書き換え
      function overwrite_ssp_title($ssp_title) { 
        if ( is_archive() ) {
            return "お知らせ一覧 | みなみ歯科クリニック";  //特定のページでのみ、特別な設定で書き換えたい場合
        }
        return $ssp_title;  //投稿ページ以外はそのままの出力
      }
      add_filter('ssp_output_title', 'overwrite_ssp_title');


      // Contact Form 7で自動挿入されるPタグ、brタグを削除
      add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
      function wpcf7_autop_return_false() {
        return false;
} 

?>