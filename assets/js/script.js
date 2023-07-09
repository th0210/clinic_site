const swiper = new Swiper(".swiper", {
    // ページネーションが必要なら追加
 pagination: {
   el: ".swiper-pagination",
   clickable: true

 },
 // ナビボタンが必要なら追加
 navigation: {
   nextEl: ".swiper-button-next",
   prevEl: ".swiper-button-prev"
 },
 
 loop: true,
 effect: 'fade',
 autoplay: {
    delay: 4000,
 },
 speed: 1000,
});

jQuery(function() {
  /*------ ドロワーメニュー --------*/
  jQuery('.p-hamburger-menu').on('click', function() {
    /*ハンバーガーメニューのアイコンを✕印に、ドロワーメニューを表示、ヘッダーのロゴを青から白へ*/ 
    jQuery('.p-hamburger-menu__bar1, .p-hamburger-menu__bar2, .p-hamburger-menu__bar3, .p-drawer-menu, .l-header__logo__drawer').toggleClass('is-open');
    /*ヘッダーの背景を透明に、ヘッダーのロゴ青を非表示*/
    jQuery('.l-header, .l-header__logo').toggleClass('none');
    /*ドロワー開いてる時背景をスクロールしない*/
    jQuery('body').toggleClass('no-scroll');
  });

  /*------ トップへ戻るボタン --------*/
  jQuery(window).on("scroll", function() {
    // トップから100px以上スクロールしたら
    if (200 < jQuery(this).scrollTop()) {
      // is-showクラスをつける
   jQuery('.p-to-top').addClass( 'is-show' );
    } else {
      // 100pxを下回ったらis-showクラスを削除
    jQuery('.p-to-top').removeClass( 'is-show' );
    }
  });


  //#から始まるaリンクをクリックしたとき
  jQuery('a[href^="#"]').on('click', function() {
  //クリックしたもののid="#〇〇"を取得
    var id = jQuery(this).attr('href');
  //ページの一番上からの距離をpositionとして0としておく
    var position = 0;
    let headerHeight = jQuery('#header').outerHeight();
  //id="#〇〇"が#だけじゃない時はその距離を取得、#だけの時は元々0なので0扱いになる
    if (id != '#') {
        position = jQuery(id).offset().top - headerHeight;
    };

    jQuery('html, body').animate ({
        scrollTop: position
    }, 300);

  });

  jQuery(window).on('load', function() {
    let headerHeight = jQuery('#header').outerHeight();
    let urlHash = location.hash;
    if (urlHash) {
      let position = jQuery(urlHash).offset().top - headerHeight;
      jQuery('html, body').animate({ scrollTop: position }, 300);
    }
  });

});
