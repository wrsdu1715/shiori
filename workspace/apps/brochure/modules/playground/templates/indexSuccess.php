
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
              <?php foreach($test["detail"] as $content) {?>
                <?php echo $content; ?><br>
              <?php } ?>
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
    <?php foreach ($banquetList as $banquetTeam => $content) { ?>
    <li class="l-list_item">
      <p class="l-list_itemTitle">
        <?php echo $banquetTeam ?>
      </p>
      <p class="l-list_itemtName">
        <?php foreach($content as $name) {?>
          <?php echo $name ?>
        <?php } ?>
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
