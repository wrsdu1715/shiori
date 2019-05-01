$(function () {

  //fadeIn用クラス付与
  $('.l-content div:nth-child(-n+3)').addClass('show');

  //スクロールfadeIn
  $(window).scroll(function () {
    $('.l-content_box').each(function () {
      //各要素の高さを取得
      var topHeight = $(this).offset().top;
      //スクロール量を取得
      var scroll = $(window).scrollTop();
      //ブラウザの高さを取得
      var fadeIn = $(window).height();
      if (scroll > topHeight - fadeIn + 100) {
        $(this).addClass('show');
      }
    });
  });

  //subメニューを表示
  $('#plusBtn').on('click', function () {
    var $subMenu = $('.subMenu_list_item');
    $(this).toggleClass('active');
    $subMenu.fadeIn(300);
    if ($(this).hasClass('active')) {
      $(this).find('img').attr('src', '/images/minus.png')
    } else {
      $(this).find('img').attr('src', '/images/puls.png')
      $subMenu.fadeOut();
    }
  });
});
