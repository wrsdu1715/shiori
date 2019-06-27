<?php //時間設定をしてその時間まで情報が解禁されない ?>
<?php if (strtotime(date('Y-m-d H:i')) > strtotime(TravelGuide::$RELEASE)) { ?>
<?php $schedules = TravelGuide::$SCHEDULE;?>
<?php $days = TravelGuide::$SCHEDULE_DAY;?>
<?php //スケジュール ?>
  <section class="schedule">
    <h2 class="l-sectionTitle">-スケジュール-</h2>
    <div class="schedule_content">
      <div class="l-day">
        <?php foreach ($days as $key => $day ) { ?>
          <p class="l-day_text <?php echo ($key < 1) ? 'day' : '' ?>">
            <?php $date = date('m/d', strtotime($day)) ?>
            <?php echo $date . '<br><span>(' . '曜日' . ')</span>' ?>
          </p>
        <?php } ?>
      </div>
      <div class="l-content">
        <?php foreach ($schedules as $schedule) {?>
          <div class="l-content_box">
            <h3 class="l-content_box_itemTitle">
              <?php echo $schedule['title'] ?>
            </h3>
            <?php foreach($schedule["areaList"] as $detail) { ?>
              <p class="l-content_box_itemText">
                <?php echo $detail["secondTitle"] ?>
              </p>
              <?php if ($detail["detail"]) { ?>
                <p class="l-content_box_itemDetail">
                  <?php foreach($detail["detail"] as $contents) {?>
                    <?php echo $contents ?><br>
                  <?php } ?>
                </p>
              <?php } ?>
            <?php } ?>
            <?php if ($schedule['btn']) { ?>
              <p class="l-content_btn">
                <?php echo $schedule['btn'] ?>
                <a href="#"></a>
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
