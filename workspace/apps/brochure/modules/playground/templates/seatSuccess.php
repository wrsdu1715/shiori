<?php //メニュー ?>
<?php include('header.php'); ?>

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

<?php //フッターメニュー ?>
<?php include('footer.php'); ?>
