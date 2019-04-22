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

  /*
  $(function () {
    countDown();
  });

  function countDown() {
    var startDateTime = new Date();
    //時間の設定をここで行う, indexSuccessでも設定してください。
    var endDateTime = new Date("April 20,2019 10:00:00");
    var difference = endDateTime - startDateTime;
    var a_day = 24 * 60 * 60 * 1000;

    // 残り時間の日
    var d = Math.floor(difference / a_day);
    // 残り時間の時
    var h = Math.floor((difference % a_day) / (60 * 60 * 1000));
    // 残り時間の分
    var m = Math.floor((difference % a_day) / (60 * 1000)) % 60;
    // 残り時間の秒
    var s = Math.floor((difference % a_day) / 1000) % 60 % 60;

    $('#timer').text(d + '日' + h + '時間' + m + '分' + s + '秒');
    setInterval(function () {
      countDown();
    }, 1000);
  }
  */

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
