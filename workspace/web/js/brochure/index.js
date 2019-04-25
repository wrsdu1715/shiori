$(function () {

  var windowH = $(window).height();
  $('.menu').height(windowH);

  //ハンバーガーメニュー
  $('.burger').on('click', function () {
    var $line = $(this).children('div');
    var $nav = $('.menu');

    if ($line.hasClass('burger_normal')) {
      $line.removeClass('burger_normal');
      $line.first().addClass('topline');
      $line.eq(1).css('display', 'none');
      $line.last().addClass('bottomline');
    } else {
      $line.removeClass().addClass('burger_normal');
      $line.eq(1).css('display', 'block');
    }

    //メニュー
    $nav.toggleClass('open');
    if ($nav.hasClass('open')) {
      $nav.stop(true).animate({
        right: '0%'
      }, 1000)
    } else {
      $nav.stop(true).animate({
        right: '-100%'
      }, 800)
    }
  });


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
});
