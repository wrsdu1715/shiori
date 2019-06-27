<?php $notice = TravelGuide::$NOTICE; ?>
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
