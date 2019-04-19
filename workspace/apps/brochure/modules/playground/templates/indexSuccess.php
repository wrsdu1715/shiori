<?php //宴会
$banquet = array(
  "time" =>  "17:50",
  "place" => "旅館2F「比良の間」"
);

// スケジュール
$schedule = array(
  array(
  "title" => "【午前】各エリア出発",
  "areaList" => array(
    array("secondTitle" => "▫️関東(ひかり503号)",
          "detail" => array("7:33 東京駅(出発)", "7:50 品川駅(出発)")),
  ),
  "btn" => "a href",
  ),
);
//部屋割り
$roomList = array(
array(
  "number" => "601",
  "members" => array("tuda", "ryo")),
array(
    "number" => "601",
    "members" => array("tsuda", "ryo", "hoge")),
);
//バス割り
$seatList = array(
  "A" => array("役員陣","第１マーケティング部","第２マーケティング部"),
  "B" => array("HIMARI事業部","技術開発部","事業企画部")
);
//余興参加チーム
$joinTeam = array("hoge","hogehoge","hogehogehoge");
//宴会座席
$banquetList = array(
"A" => "津田 亮<br>津田だ りょうう",
"B" => "津田 量",
"C" => "ああ あああ<br>いい いい<br>うう うううう",
"D" => "ああ あああ<br>いい いい<br>うう うううう",
);
//お知らせ
$notice = array(
'4/16(金)' => "hogehogehogehogehogehogehogehogehogehogehogehogehogehog",
'4/15(金)' => "hogehogehogehogehogehogehogehogehogehogehogehogehogehog"
);
?>

<?php //メニュー ?>
<?php include('common.php'); ?>

<?php //スケジュール ?>
<section class="schedule">
  <h2 class="l-sectionTitle">-スケジュール-</h2>
  <div class="schedule_content">
    <div class="l-day">
      <p class="l-day_text">
        4/4<span>(Thu)</span>
      </p>
      <p class="l-day_textDay">
        4/5<span>(Fri)</span>
      </p>
    </div>
    <?php //TODO 配列がある分だけ追加される↓ ?>
    <div class="l-content">
      <?php
foreach ($schedule as $value) {?>
        <div class="l-content_box">
          <h3 class="l-content_box_itemTitle">
            <?php echo $value[title] ?>
          </h3>
          <?php foreach($value["areaList"] as $test) { ?>
            <p class="l-content_box_itemText">
              <?php echo $test["secondTitle"] ?>
            </p>
            <?php if (!(empty($test["detail"]))) { ?>
            <p class="l-content_box_itemDetail">
              <?php echo $test["detail"]; ?>
            </p>
            <?php } ?>
          <?php } ?>
          <?php if (!(empty($value[btn]))) { ?>
          <p class="l-content_btn">
            <?php echo $value[btn] ?>
          </p>
          <?php } ?>
        </div>
        <?php } ?>
    </div>
  </div>
</section>

<section class="room">
  <h2 class="l-sectionTitle">
    -お部屋-
  </h2>
  <ul class="l-list">
    <?php foreach ($roomList as $value) { ?>
    <li class="l-list_item">
      <p class="l-list_itemTitle">
        <?php echo $value["number"] ?>
      </p>
      <p class="l-list_itemtName">
        <?php foreach ($value["menbers"] as $name) { ?>
          <?php echo $name ?><br>
        <?php } ?>
      </p>
    </li>
    <?php } ?>
  </ul>
  <p class="room_cautionBlue">
    ※青色の方は、お子様とご一緒にお願いします。
  </p>
  <p class="room_cautionPink">
    ※ピンクの方は、お子様とご一緒にお願いします。
  </p>
</section>

<section class="seat">
  <h2 class="l-sectionTitle">
    -座席-
  </h2>
  <?php foreach ($seatList as $busNumber => $teamList) { ?>
  <div class="seat_content">
    <div class="seat_content_group">
      <p class="seat_content_groupText">
        <?php echo $busNumber ?>
      </p>
    </div>
    <div class="seat_content_duty">
      <p class="seat_content_dutyText">
       <?php foreach ($teamList as $teamName) {?>
        <?php echo $teamName ?><br>
      <?php } ?>
      </p>
    </div>
  </div>
  <?php } ?>
</section>
<section class="banquet">
  <h2 class="l-sectionTitle">
    -宴会-
  </h2>
  <p class="banquet_text">
    <?php echo $banquet["time"] ?>に
    <?php echo $banquet["place"]?>集合になります。乾杯に間に合うように来てくださいね！<br> 今回は余興の参加がたくさんございます。ぜひお楽しみにー♪
  </p>
  <figure class="banquet_img">
    <img src="" alt="余興画像">
  </figure>
  <div class="banquet_join">
    <p class="banquet_join_title">参加チーム</p>
    <p class="banquet_join_text">
      <?php foreach ($joinTeam as $value) {
echo $value."<br>";
} ?>
    </p>
  </div>
  <h2 class="l-sectionTitle">
    -宴会座席-
  </h2>
  <figure class="banquet_seat">
    <img src="" alt="宴会座席画像">
  </figure>
  <ul class="l-list">
    <?php foreach ($banquetList as $key => $value) { ?>
    <li class="l-list_item">
      <p class="l-list_itemTitle">
        <?php echo $key ?>
      </p>
      <p class="l-list_itemtName">
        <?php echo $value ?>
      </p>
    </li>
    <?php } ?>
  </ul>
</section>
<section class="notice">
  <h2 class="l-sectionTitle">
    -お知らせ-
  </h2>
  <div class="notice_content">
    <?php foreach ($notice as $key => $value) { ?>
    <div class="notice_content_wrapper">
      <p class="notice_content_day">
        <?php echo $key ?>
      </p>
      <p class="notice_content_text">
        <?php echo $value ?>
      </p>
    </div>
    <?php } ?>
  </div>
</section>
<section class="contact">
  <h2 class="l-sectionTitle">
    -緊急連絡先-
  </h2>
  <div class="contact_content">
    <p class="contact_content_name">
      津田 亮
    </p>
    <p class="contact_content_tel">
      080-0000-0000
    </p>
  </div>
</section>
