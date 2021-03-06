
<?php include('headerSuccess.php'); ?>

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
            <?php echo $value['title'] ?>
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
          <?php if (!(empty($value['btn']))) { ?>
          <p class="l-content_btn">
            ボタン
            <a href=<?php echo $value['btn'] ?>></a>
          </p>
          <?php } ?>
        </div>
        <?php } ?>
    </div>
  </div>
</section>

<?php //フッターメニュー ?>
<?php include('footerSuccess.php'); ?>
