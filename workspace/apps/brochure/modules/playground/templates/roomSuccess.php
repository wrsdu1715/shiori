<?php $roomList = TravelGuide::$ROOMLIST; ?>

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
        <?php foreach ($value["members"] as $name) { ?>
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
