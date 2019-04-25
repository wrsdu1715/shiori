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
