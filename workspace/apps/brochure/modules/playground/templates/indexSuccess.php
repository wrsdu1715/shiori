<?php //時間設定をしてその時間まで情報が解禁されない ?>
<?php if (strtotime(date('Y-m-d H:i')) > strtotime(TravelGuide::$RELEASE)) { ?>
<?php $schedule = TravelGuide::$SCHEDULE;?>
<?php //スケジュール ?>
  <section class="schedule">
    <h2 class="l-sectionTitle">-スケジュール-</h2>
    <div class="schedule_content">
      <div class="l-day">
        <?php foreach ($schedule['date'] as $key => $value ) { ?>
            <p class="l-day_text <?php echo ($key < 1) ? 'day' : '' ?>">
              <?php $date = date('m/d', strtotime($value)) ?>
              <?php echo $date . '<span>(' . '曜日' . ')</span>' ?>
            </p>
        <?php } ?>
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
              ボタン
              <a href=<?php echo $value[btn] ?>></a>
            </p>
            <?php } ?>
          </div>
          <?php } ?>
      </div>
    </div>
  </section>
<?php } else { ?>
  <p>社員旅行情報解禁まで</p>
  <p id="timer"></p>
<?php } ?>
