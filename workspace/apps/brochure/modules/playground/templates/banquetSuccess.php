

<?php //メニュー ?>
<?php include('common.php'); ?>

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
